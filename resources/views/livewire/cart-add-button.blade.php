<div>

    @if($cart->where('id', $product->id)->count())
        <form wire:submit.prevent="removeFromCart({{$product->id}})" method="post">
            @csrf
            in cart
            <button type="submit" class="add_to_cart_new"> remove</button>
        </form>
    @else
        <form  wire:submit.prevent="addToCart({{$product->id}})" method="post">
            @csrf
            <div class="rating_wrap rating_wrap_new">
                <div class="add_to_cart_new quantity_new" >
                    <input type="button" value="-" class="minus">
                    <input wire:model="quantity.{{$product->id}}" type="text" title="Qty" class="qty" size="4">
                    <input type="button" value="+" class="plus">
                </div>
                <button type="submit" class="add_to_cart_new"> <i class="icon-basket-loaded"></i></button>
            </div>
        </form>
    @endif
</div>
