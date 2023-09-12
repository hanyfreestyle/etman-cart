<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use App\Models\admin\Category;
use App\Models\admin\FaqCategory;
use App\Models\admin\Product;
use Illuminate\Http\Request;

class ShopPageController extends WebMainController
{
    public $SinglePageView ;
    public function __construct(

    )
    {
        parent::__construct();
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
            ->with('recursiveProduct')
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

        $MainCategoryProduct  = Category::where('parent_id',null)
            ->with('recursiveProduct')
            //->withCount('recursiveProduct')
            ->get();

       // dd($MainCategoryProduct);

        return view('shop.product.category_main',compact('SinglePageView','PageMeta','MainCategoryProduct'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ShopCategoryView
    public function ShopCategoryView ($slug)
    {

        $slug = \AdminHelper::Url_Slug($slug);

        $Category  = Category::defWeb()
            ->withCount('CatProduct')
            ->with('CatProduct')
            ->whereTranslation('slug', $slug)
            ->firstOrFail();

        if ($Category->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('Page_WebCategoryView', $Category->translate()->slug);
        }


        $PageMeta = $Category ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;
        $SinglePageView['breadcrumb'] = "Shop_CategoryView" ;
        $SinglePageView['slug'] = 'category/'.$Category->translate(webChangeLocale())->slug;

        $trees = Category::find($Category->id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;


        $MainCategoryPro  = Category::where('parent_id',null)
            ->with('recursiveProduct')
            ->get();


        $CategoryWithPro  = Category::where('id',$Category->id)
            ->with('recursiveProduct')
            ->get();





        return view('shop.product.category_view',compact('SinglePageView','PageMeta','Category','trees','MainCategoryPro','CategoryWithPro'));

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     ShopProductView
    public function ShopProductView ($slug){
        $slug = \AdminHelper::Url_Slug($slug);

        $Product  = Product::defWeb()
            ->whereTranslation('slug', $slug)
            ->firstOrFail();

        $ReletedProducts = Product::with('translation')
            ->where('category_id',$Product->category_id)
            ->where('id','!=',$Product->id)
            ->limit(8)
            ->get();

        ;

        $PageMeta = $Product ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'MainCategory' ;
        $SinglePageView['breadcrumb'] = "Shop_ProductView" ;
        $SinglePageView['slug'] = 'product/'.$Product->translate(webChangeLocale())->slug;

        $trees = Category::find($Product->category_id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;

        return view('shop.product.product_view',compact('SinglePageView','PageMeta','Product','trees','ReletedProducts'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Recently
    public function Recently ()
    {

        $Category  = Category::defWeb()
            ->withCount('CatProduct')
            ->with('CatProduct')
            ->whereTranslation('id',1 )
            ->firstOrFail();




        $PageMeta = $Category ;
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_Recently' ;
        $SinglePageView['breadcrumb'] = "Shop_Recently" ;


        $trees = Category::find($Category->id)->ancestorsAndSelf()->orderBy('depth','asc')->get() ;


        $MainCategoryPro  = Category::where('parent_id',null)
            ->with('recursiveProduct')
            ->get();


        $CategoryWithPro  = Category::where('id',$Category->id)
            ->with('recursiveProduct')
            ->get();





        return view('shop.product.recently_arrived',compact('SinglePageView','PageMeta','Category','trees','MainCategoryPro','CategoryWithPro'));

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


        $MainCategoryPro  = Category::where('parent_id',null)
            ->with('recursiveProduct')
            ->limit(4)
            ->get();

        $BestDeals = Product::where('photo','!=',null)
//            ->where('category_id',39)
            ->inRandomOrder()
            ->limit(6)
            ->get();





        return view('shop.best-deals',compact('SinglePageView','BestDeals'));
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #    BestDeals
    public function WeekOffers()
    {
        $PageMeta = parent::getMeatByCatId('Shop_BestDeals');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_WeekOffers' ;
        $SinglePageView['breadcrumb'] = "Shop_WeekOffers" ;


        $MainCategoryPro  = Category::where('parent_id',null)
            ->with('recursiveProduct')
            ->limit(4)
            ->get();

        $BestDeals = Product::where('photo','!=',null)
//            ->where('category_id',39)
            ->inRandomOrder()
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

}


