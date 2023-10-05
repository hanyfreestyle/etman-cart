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
use Illuminate\Support\Facades\DB;
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

        $cities =self::getDataCity() ;
        View::share('cities', $cities);


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

        $PageErr = self::CheckCartProduct() ;

        if($CartList->count() > 0 and $PageErr == 0 ){
            return view('shop.cart.confirm',compact('SinglePageView','PageMeta','addresses','CartList','subtotal','UserProfile'));
        }else{
            return redirect()->route('Shop_CartView');
        }
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| # CartOrderSave
    public function CartOrderSave(ShoppingOrderSaveRequest $request)
    {

        $PageErr = self::CheckCartProduct() ;
        if($PageErr > 0 ){
            return redirect()->route('Shop_CartView');
        }

        $CartList =  Cart::content();

        if($CartList->count() > 0){
            try{

                DB::transaction(function () use ($request){

                    $CartList =  Cart::content();
                    $subtotal =  Cart::subtotal();
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

                    foreach ($CartList as $product ){
                        $addProduct = new ShoppingOrderProduct() ;
                        $addProduct->order_id = $newOrder->id ;
                        $addProduct->sku = $product->model->ref_code ;
                        $addProduct->product_ref = $product->model->id ;
                        $addProduct->name = $product->model->name ;
                        $addProduct->price = $product->model->price ;
                        $addProduct->sale_price = $product->model->sale_price ;
                        $addProduct->qty = $product->qty ;
                        $addProduct->save() ;
                        Product::find($product->model->id)->decrement('qty_left',$product->qty);
                    }

                    Cart::destroy();
                });

            }catch (\Exception $exception){
                return redirect()->back()->with('order_not_saved',__('web/orders.err_order_not_saved'));
            }

            return redirect()->route('Shop_CartOrderCompleted');
        }else{
            return redirect()->route('Shop_CartView');
        }

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     CheckCartProduct
    static function CheckCartProduct()
    {
        $CartList =  Cart::content();

        $products = Product::select('id','qty_left','price','sale_price')
            ->whereIn('id',$CartList->pluck('id'))
            ->get()->keyBy('id');

        $PageErr = 0 ;
        foreach ($CartList as $ProductCart){

            $options_price = $ProductCart->options->price ;
            $options_sale_price = $ProductCart->options->sale_price ;
            $qty = $ProductCart->qty ;

            $price_err = 0;
            $qty_err = 0 ;

            if($products[$ProductCart->id]->price != $options_price or $products[$ProductCart->id]->sale_price != $options_sale_price  ){
                $price_err = 1;
                $PageErr = $PageErr +1;
            }
            if($qty > $products[$ProductCart->id]->qty_left ){
                $qty_err = 1;
                $PageErr = $PageErr +1;
            }

            Cart::update($ProductCart->rowId , [
                'options' => [
                    'price' =>  $options_price,
                    'sale_price' =>  $options_sale_price,
                    'qty_left' =>  $products[$ProductCart->id]->qty_left,
                    'price_err' =>  $price_err,
                    'qty_err' =>  $qty_err,
                ]
            ]);
        }
        return $PageErr ;
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
