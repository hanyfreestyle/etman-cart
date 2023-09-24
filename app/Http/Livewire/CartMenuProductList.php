<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartMenuProductList extends Component
{
    protected $listeners = ['cart_updated'=>'render'];
    public $showimg = false ;

    public function render()
    {
        $CartList =  Cart::content();
        $subtotal =  Cart::subtotal();
        return view('livewire.cart-menu-product-list',compact('CartList','subtotal'));
    }
}
