<?php

namespace App\Http\Controllers\customer;

use App\Helpers\AdminHelper;
use App\Http\Controllers\AdminMainController;
use App\Models\admin\Category;
use App\Models\admin\Product;
use App\Models\admin\shop\Customer;
use App\Models\customer\UserCustomersProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserCustomersProductController extends AdminMainController
{

    public $controllerName ;
    public $PageTitle ;
    public $selMenu ;
    public $PrefixRole ;
    public $PrefixRoute ;
    public $pageData ;

    function __construct(
        $selMenu = 'ShopCustomer.',
        $controllerName = 'Customer',
        $PrefixRole = 'ShopCustomer',
        $PrefixRoute = '#',
        $pageData = array(),
    )

    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->selMenu = $selMenu;
        $this->PrefixRole = $PrefixRole;
        $this->PrefixRoute = $this->selMenu.$this->controllerName ;


        $this->PageTitle = __('admin/menu.shop_customer');

        $this->middleware('permission:'.$PrefixRole.'_edit',
            ['only' =>
                [
                    'FavList',
                    'FavListProductsAjax',
                    'AddFavorite',
                    'FavListRemove',
                    'RemoveFavorite',
                ]
            ]
        );

        View::share('PrefixRoute', $this->PrefixRoute);
        View::share('PrefixRole', $PrefixRole);
        View::share('controllerName', $controllerName);

        $sendArr = [
            'TitlePage' =>  $this->PageTitle ,
            'selMenu'=> $this->selMenu,
            'prefix_Role'=> $this->PrefixRole ,
            'restore'=> 1 ,
        ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $this->pageData = $pageData ;
    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #FavList
    public function FavList($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";

        $customer = Customer::findOrFail($id);

        $categories = Category::query()
            ->where('parent_id',null)
            ->where('cat_shop',true)
            ->withCount('product_shop_admin')
            ->get();

        return view('admin.customer.products_list',compact('pageData','customer','categories'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     FavListProductsAjax
    public function FavListProductsAjax(Request $request)
    {
        $category_id = $request->input('category_id');
        $customer_id = $request->input('customer_id');
        $category = Category::where('id',$category_id)->first();

        $customersProduct  = UserCustomersProduct::select('product_id')
            ->where('customer_id',$customer_id)
            ->pluck('product_id');


        $products = Product::query()
            ->where('pro_shop',true)
            ->with('product_with_category')
            ->whereHas('product_with_category',function($query) use ($category_id){
                $query->where('category_id',$category_id);
            })
            ->whereNotIn('id',$customersProduct)
            ->orderby('id','desc')->get();


        if($category == null){
            return view('admin.customer.products_list_ajex_no_data')->with(
                [
                    'category' => $category,
                    'category_id' => $category_id,
                    'products' => $products,
                    'customer_id' => $customer_id,
                ]
            );
        }else{
            return view('admin.customer.products_list_ajex')->with(
                [
                    'category' => $category,
                    'category_id' => $category_id,
                    'products' => $products,
                    'customer_id' => $customer_id,
                ]
            );
        }

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     AddFavorite
    public function AddFavorite(Request $request)
    {
        $product_id = $request->input('product_id');
        $customer_id = $request->input('customer_id');

        $customersProduct  = UserCustomersProduct::query()
            ->where('product_id',$product_id)
            ->where('customer_id',$customer_id)
            ->first();

        if($customersProduct == null){
            $saveProduct = new UserCustomersProduct();
            $saveProduct->product_id = $product_id ;
            $saveProduct->customer_id = $customer_id ;
            $saveProduct->save();
        }

        return response()->json(
            [
                'product_id'=>$product_id,
                'customer_id'=>$customer_id,
                'customersProduct'=>$customersProduct,
            ]
        );
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     FavRemoveList
    public function FavListRemove($id)
    {
        $pageData = $this->pageData;
        $pageData['ViewType'] = "Edit";

        $customer = Customer::findOrFail($id);

        $customersProduct  = UserCustomersProduct::select('product_id')
            ->where('customer_id',$customer->id)
            ->pluck('product_id');

        $FavProduct = Product::query()
            ->with('category')
            ->whereIn('id',$customersProduct)
            ->get()
            ->groupBy('category.*.name');

        return view('admin.customer.products_list_remove')->with(
            [
                'pageData' => $pageData,
                'customer' => $customer,
                'FavProduct' => $FavProduct,

            ]
        );

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     AddFavorite
    public function RemoveFavorite(Request $request)
    {
        $product_id = $request->input('product_id');
        $customer_id = $request->input('customer_id');

        $customersProduct  = UserCustomersProduct::query()
            ->where('product_id',$product_id)
            ->where('customer_id',$customer_id)
            ->first();

        if($customersProduct != null){
            $customersProduct->delete();
        }

        return response()->json(
            [
                'product_id'=>$product_id,
                'customer_id'=>$customer_id,
                'customersProduct'=>$customersProduct,
            ]
        );
    }




}
