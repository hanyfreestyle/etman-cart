<div>

    @if($cart->where('id', $product->id)->count())
        <div class="update_Cart_wrap">
            <div class="increaseProduct">
                <form wire:submit.prevent="increaseProduct({{$product->id}})" method="post">
{{--                    @csrf--}}
                    <button type="submit" class="btn btn-sm btn-fill-out">+</button>
                </form>
            </div>
            <div class="product_qty">
                 {{$cart->where('id', $product->id)->first()->qty}}
            </div>

            <div class="increaseProduct">
                <form wire:submit.prevent="decreaseProduct({{$product->id}})" method="post">
{{--                    @csrf--}}
                    <button type="submit" class="btn btn-sm btn-fill-out">-</button>
                </form>
            </div>
        </div>
    @else
        <form  wire:submit.prevent="addToCart({{$product->id}})" method="post">
{{--            @csrf--}}
            <div class="add_toCart_wrap">
                <button type="submit" class="btn btn-sm btn-fill-out"> <i class="icon-basket-loaded"></i> {{__('web/cart.Add To Cart')}}</button>

            </div>
        </form>
    @endif
</div>

<script>
    document.addEventListener('livewire:load', () => {
        setInterval(function(){ window.livewire.emit('cart-add-button.blade'); }, 1800000);
    });
</script>
