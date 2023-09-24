<?php

namespace App\Http\Livewire;

use App\Models\admin\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use Livewire\Component;

class CartAddButton extends Component
{
    public $product ;
    public array $quantity = [] ;
    protected $listeners = ['cart_but_updated'=>'render'];


    public function mount()
    {
        $this->quantity[$this->product->id] = 1 ;
    }


    public function render()
    {
        $cart = Cart::content();
        return view('livewire.cart-add-button',compact('cart'));
    }

    public function addToCart($product_id)
    {
        $Product  = Product::Web_Shop_Def_Query()
            ->where('id', $product_id)
            ->firstOrFail();

        Cart::add(
            $Product->id,
            $Product->name,
            $this->quantity[$product_id],
            $Product->CartPriceToAdd(),
            [
                'photo' => $Product->photo_thum_1,
                'ref_code' => $Product->ref_code,
                'ref_code_name' =>Str::limit($Product->name,10).$Product->ref_code,
            ]
        );
        $this->emit('cart_updated');
    }

    public function removeFromCart($rowId)
    {
        $cart = Cart::content();
        $cart->where('id',$rowId)->first()->rowId ;
        Cart::remove($cart->where('id',$rowId)->first()->rowId);
        $this->emit('cart_updated');
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
