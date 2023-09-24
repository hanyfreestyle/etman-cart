<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartFullView extends Component
{
    public function render()
    {
        $CartList =  Cart::content();
        $subtotal =  Cart::subtotal();

        $Mass = "";
        $Brek = "%0a";
        ///$Brek = '<br/>';

        foreach ($CartList as $ProductCart){
           // dd($ProductCart);
           /// $Mass .= $ProductCart->name.$Brek ;
            $Mass .= $ProductCart->options->ref_code_name.$Brek ;
            $Mass .= $ProductCart->price."x".$ProductCart->qty.$Brek ;
        }

        $Mass .= '---------------------'.$Brek ;
        $Mass .= $subtotal.$Brek ;
        $Mass = str_replace(" ","%20",$Mass);

//        {{ $ProductCart->price *  $ProductCart->qty }}


        return view('livewire.cart-full-view',compact('CartList','subtotal','Mass'));
    }

    public function removeFromCart($rowId)
    {
        $cart = Cart::content();
        Cart::remove($cart->where('id',$rowId)->first()->rowId);
        $this->emit('cart_but_updated');
        $this->emit('cart_updated');
        #cart_but_updated
    }


    public function increaseProduct($rowId){
        $cart = Cart::content();
        Cart::update($cart->where('id',$rowId)->first()->rowId , $cart->where('id',$rowId)->first()->qty+1);
        $this->emit('cart_updated');
    }

    public function decreaseProduct($rowId){
        $cart = Cart::content();
        Cart::update($cart->where('id',$rowId)->first()->rowId , $cart->where('id',$rowId)->first()->qty-1);
        $this->emit('cart_updated');
    }


}
