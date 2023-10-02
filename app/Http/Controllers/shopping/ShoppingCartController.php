<?php

namespace App\Http\Controllers\shopping;

use App\Http\Controllers\Controller;
use App\Http\Controllers\WebMainController;
use App\Http\Requests\shopping\ShoppingOrderSaveRequest;
use App\Models\admin\Product;
use App\Models\customer\UsersCustomersAddress;
use App\Models\shopping\ShoppingOrder;
use App\Models\shopping\ShoppingOrderAddress;
use App\Models\shopping\ShoppingOrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class ShoppingCartController extends WebMainController
{
    public $SinglePageView ;
    public function __construct(

    )
    {
        parent::__construct();

        $stopCash = 0 ;
        $ShopMenuCategory = self::getShopMenuCategory($stopCash);
        View::share('ShopMenuCategory', $ShopMenuCategory);

       $SinglePageView = [
            'SelMenu' => '',
            'slug' => null,
            'banner_id' => null,
            'breadcrumb' => 'home',

        ];

        $this->SinglePageView = $SinglePageView ;
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CartView
    public function CartView()
    {


        $PageMeta = parent::getMeatByCatId('Shop_CartView');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_CartView' ;
        $SinglePageView['breadcrumb'] = "Shop_Cart" ;

        return view('shop.cart.view_cart',compact('SinglePageView','PageMeta'));
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CartConfirm
    public function CartConfirm()
    {
        $PageMeta = parent::getMeatByCatId('Shop_CartView');
        parent::printSeoMeta($PageMeta);

        $UserProfile = Auth::guard('customer')->user();
        $addresses = UsersCustomersAddress::where('customer_id',$UserProfile->id)->get();


        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_CartView' ;
        $SinglePageView['breadcrumb'] = "Shop_Cart" ;

        $CartList =  Cart::content();
        $subtotal =  Cart::subtotal();

        if($CartList->count() > 0){
            return view('shop.cart.confirm',
                compact('SinglePageView','PageMeta','addresses','CartList','subtotal'));
        }else{
            return redirect()->route('Shop_CartView');
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # CartOrderSave
    public function CartOrderSave(ShoppingOrderSaveRequest $request)
    {

        $CartList =  Cart::content();
        $subtotal =  Cart::subtotal();

        if($CartList->count() > 0){
            $UserProfile = Auth::guard('customer')->user();

            $address = UsersCustomersAddress::with('city')
                ->where('uuid',$request->input('address_id'))
                ->firstOrFail();

            $newAddress = new ShoppingOrderAddress ;

            $newAddress->name = $address->name ;
            $newAddress->city = $address->city->name ;
            $newAddress->address = $address->address ;
            $newAddress->recipient_name = $address->recipient_name ;
            $newAddress->phone = $address->phone ;
            $newAddress->phone_option = $address->phone_option ;
            $newAddress->notes = $request->input('notes') ;
            $newAddress->save();



            $newOrder = new ShoppingOrder ;
            $newOrder->customer_id = $UserProfile->id ;
            $newOrder->address_id = $newAddress->id ;
            $newOrder->uuid = Str::uuid()->toString() ;
            $newOrder->order_date = now() ;
            $newOrder->status = 1 ;
            $newOrder->total = $subtotal;
            $newOrder->units = $CartList->count();
            $newOrder->save();

            //dd($newOrder);


            foreach ($CartList as $product ){
                $addProduct = new ShoppingOrderProduct() ;
                $addProduct->order_id = $newOrder->id ;
                $addProduct->product_ref = $product->model->id ;
                $addProduct->name = $product->model->name ;
                $addProduct->price = $product->model->price ;
                $addProduct->sale_price = $product->model->sale_price ;
                $addProduct->qty = $product->qty ;
                $addProduct->save() ;
            }

            Cart::destroy();
            return redirect()->route('Shop_CartOrderCompleted');
        }else{
            return redirect()->route('Shop_CartView');
        }

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CartOrderCompleted
    public function CartOrderCompleted()
    {
        $PageMeta = parent::getMeatByCatId('Shop_CartView');
        parent::printSeoMeta($PageMeta);

        $SinglePageView = $this->SinglePageView ;
        $SinglePageView['SelMenu'] = 'Shop_CartView' ;
        $SinglePageView['breadcrumb'] = "Shop_Cart" ;

        $CartList =  Cart::content();

        if($CartList->count() > 0){
            return redirect()->route('Shop_CartView');
        }else{
            return view('shop.cart.completed',compact('SinglePageView','PageMeta'));
        }
    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CartEmpty
    public function CartEmpty()
    {
        //Session::flush();
        Cart::destroy();
        return redirect()->back();
    }



}
