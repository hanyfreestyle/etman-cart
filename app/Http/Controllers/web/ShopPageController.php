<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use App\Models\admin\Category;
use App\Models\admin\FaqCategory;
use App\Models\admin\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class ShopPageController extends WebMainController
{
    public $SinglePageView ;
    public function __construct(

    )
    {
        parent::__construct();

        $stopCash = 0 ;
        $ShopMenuCategory = self::getShopMenuCategory($stopCash);
        View::share('ShopMenuCategory', $ShopMenuCategory);

        $CartList = Product::with('translation')->inRandomOrder()->limit(2)->get();
        View::share('CartList', $CartList);

        $RecentProduct = Product::with('translation')->inRandomOrder()->limit(4)->get();
        View::share('RecentProduct', $RecentProduct);

        $SinglePageView = [
            'SelMenu' => '',
            'slug' => null,
            'banner_id' => null,
            'breadcrumb' => 'home',

        ];

        $this->SinglePageView = $SinglePageView ;
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     WebPro_Qview
    public function Pro_Qview($slug){
        $slug = \AdminHelper::Url_Slug($slug);

        $Product  = Product::defWeb()
            ->whereTranslation('slug', $slug)
            ->firstOrFail();
        return view('shop.product.Qview',compact('Product'));
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    HomePage
    public function Shop_HomePage()
    {
        $PageMeta = parent::getMeatByCatId('Shop_HomePage');
        parent::printSeoMeta($PageMeta);
        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'HomePage' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;


        $MainCategoryPro  = Category::where('parent_id',null)
            ->with('recursive_product_shop')
            ->limit(4)
            ->get();


        return view('shop.index',compact('SinglePageView','MainCategoryPro'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    MainCategory
    public function MainCategory ()
    {

        $PageMeta = parent::getMeatByCatId('MainCategory');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "Shop_MainCategory" ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;

        $MainCategoryProduct  = Category::Web_Shop_Def_Query()
            ->where('parent_id',null)
            ->with('recursive_product_shop')
            ->orderBy('postion_shop')
            ->get();

        return view('shop.product.category_main',compact('SinglePageView','PageMeta','MainCategoryProduct'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ShopCategoryView
    public function ShopCategoryView ($slug)
    {
        $slug = \AdminHelper::Url_Slug($slug);

        $Category  = Category::Web_Shop_Def_Query()
            ->whereTranslation('slug', $slug)
            ->withCount('web_shop_children')
            ->with('web_shop_children')
            ->withCount('category_with_product_shop')
            ->with('category_with_product_shop')
            ->firstOrFail();

        $PageMeta = $Category ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;
        $SinglePageView['breadcrumb'] = "Shop_CategoryView" ;
        $SinglePageView['slug'] = 'category/'.$Category->translate(webChangeLocale())->slug;

        $trees = Category::find($Category->id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;

        return view('shop.product.category_view',compact('SinglePageView','PageMeta','Category','trees'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ShopProductView
    public function ShopProductView ($catid,$slug){



        $slug = \AdminHelper::Url_Slug($slug);
        $catid = intval($catid);

        $Category  = Category::Web_Shop_Def_Query()
            ->where('id',$catid)
            ->withCount('web_shop_children')
            ->with('web_shop_children')
            ->withCount('category_with_product_shop')
            ->with('category_with_product_shop')
            ->firstOrFail();

        $Product  = Product::Web_Shop_Def_Query()
            ->whereHas('product_with_category',function($query) use ($catid){
                $query->where('category_id',$catid);
            })
            ->whereTranslation('slug', $slug)
            ->withCount('product_with_category')
            ->with('product_with_category')
            ->withCount('more_photos')
            ->with('more_photos')
            ->firstOrFail();


        $ReletedProducts = Product::Web_Shop_Def_Query()
            ->where('id','!=',$Product->id)
            ->whereHas('product_with_category',function($query) use ($catid){
                $query->where('category_id',$catid);
            })
            ->inRandomOrder()
            ->limit(8)
            ->get();

        $PageMeta = $Product ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;
        $SinglePageView['breadcrumb'] = "Shop_ProductView" ;
        $SinglePageView['slug'] = 'product/'.$Product->slug;

       $trees = $Category->ancestorsAndSelf()->orderBy('depth','asc')->get() ;


        return view('shop.product.product_view',
            compact('SinglePageView','PageMeta','Product','trees','ReletedProducts','Category'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Recently
    public function Recently ()
    {
        $PageMeta = parent::getMeatByCatId('Shop_Recently');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_Recently' ;
        $SinglePageView['breadcrumb'] = "Shop_Recently" ;

        $Recently = Product::Web_Shop_Def_Query()
            ->with('product_with_category')

            ->limit(9)->get();

        #->inRandomOrder()



        $Recently=Product::Web_Shop_Def_Query()
            ->with('product_with_category')
            ->whereHas('product_with_category',function($query){
                $query->where('category_id',39);
            })->get();


        $Category = ['id'=>__('routes.Recently')];

        return view('shop.product.recently_arrived',compact('SinglePageView','PageMeta','Recently','Category'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    BestDeals
    public function BestDeals()
    {
        $PageMeta = parent::getMeatByCatId('Shop_BestDeals');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_BestDeals' ;
        $SinglePageView['breadcrumb'] = "Shop_BestDeals" ;


        $BestDeals = Product::Web_Shop_Def_Query()
            ->with('product_with_category')
            ->limit(6)->get();  #->inRandomOrder()

        return view('shop.best-deals',compact('SinglePageView','BestDeals'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    BestDeals
    public function WeekOffers()
    {
        $PageMeta = parent::getMeatByCatId('Shop_WeekOffers');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_WeekOffers' ;
        $SinglePageView['breadcrumb'] = "Shop_WeekOffers" ;

        $BestDeals=Product::Web_Shop_Def_Query()
            ->with('product_with_category')
            ->limit(12)
            ->get();

        return view('shop.product.week',compact('SinglePageView','BestDeals'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    FaqList
    public function FaqList ()
    {

        $PageMeta = parent::getMeatByCatId('FaqList');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'FaqList' ;
        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "Shop_FaqList" ;

        $FaqCategories = FaqCategory::defWeb()->paginate(12);

        return view('shop.faq_list',compact('SinglePageView','PageMeta','FaqCategories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     FaqCatView
    public function FaqCatView ($slug)
    {
        $slug = \AdminHelper::Url_Slug($slug);

        $FaqCategory  = FaqCategory::defWeb()
            ->whereTranslation('slug', $slug)
            ->firstOrFail();

        if ($FaqCategory->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('Shop_FaqCatView', $FaqCategory->translate()->slug);
        }


        $PageMeta = $FaqCategory ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'FaqList' ;
        $SinglePageView['breadcrumb'] = "Shop_FaqCatView" ;
        $SinglePageView['slug'] = 'faq/'.$FaqCategory->translate(webChangeLocale())->slug;


        $FaqCategories = FaqCategory::defWeb()
            ->where('id','!=',$FaqCategory->id)
            ->get();

        return view('shop.faq_cat_view',compact('SinglePageView','PageMeta','FaqCategory','FaqCategories'));

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CartEmpty
    public function CartEmpty()
    {
        //Session::flush();
        Cart::destroy();
        return redirect()->back();
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CartView
    public function CartView()
    {
        $PageMeta = parent::getMeatByCatId('Shop_CartView');
        parent::printSeoMeta($PageMeta);



        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_CartView' ;
//        $SinglePageView['banner_id'] = $PageMeta->banner_id ;
//        $SinglePageView['banner_count'] = $PageMeta->page_banner_count ;
//        $SinglePageView['banner_list'] = $PageMeta->PageBanner ;
        $SinglePageView['breadcrumb'] = "Shop_Cart" ;

        $FaqCategories = FaqCategory::defWeb()->paginate(12);

        return view('shop.product.cart',compact('SinglePageView','PageMeta','FaqCategories'));
    }





    /*
        #@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    #|||||||||||||||||||||||||||||||||||||| #     ShopProductView
        public function ShopProductView ($slug,$catid='lastProducts'){

            $slug = \AdminHelper::Url_Slug($slug);

            $catList = ['lastProducts'];






    //        if( !in_array($catid,$catList)){
    //
    ////            dd( !in_array($catid,$catList));
    ////
    //            ///$cat = \AdminHelper::Url_Slug($cat);
    //            $Category  = Category::where('id',$catid)
    //                ->where('cat_shop',true)
    //                ->withCount('children_shop')
    //                ->with('children_shop')
    //                ->withCount('category_with_product_shop')
    //                ->with('category_with_product_shop')
    //                ->firstOrFail();
    //
    //
    //
    //        }else{
    //            $Category = null;
    //        }


            $Product  = Product::Web_Shop_Def_Query()
                ->whereTranslation('slug', $slug)
                ->withCount('product_with_category')
                ->with('product_with_category')
                ->withCount('more_photos')
                ->with('more_photos')
                ->firstOrFail();





    //        $ReletedProducts = Product::with('translation')
    //            ->where('category_id',$Product->category_id)
    //            ->where('id','!=',$Product->id)
    //            ->limit(8)
    //            ->get();
    //more_photos_count
    //        ;

            $PageMeta = $Product ;
            parent::printSeoMeta($PageMeta);

            $SinglePageView = $this->SinglePageView ;
            $SinglePageView['SelMenu'] = 'MainCategory' ;
            $SinglePageView['breadcrumb'] = "Shop_ProductView" ;
            $SinglePageView['slug'] = 'product/'.$Product->slug;

            // $trees = Category::find($Product->category_id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;
            $trees = [];
            $ReletedProducts = [];
            return view('shop.product.product_view',compact('SinglePageView','PageMeta','Product','trees','ReletedProducts'));
        }
      */


}


