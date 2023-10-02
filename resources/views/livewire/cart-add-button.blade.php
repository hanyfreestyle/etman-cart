<div>

    <div wire:loading>
{{--        <div style="position: absolute; z-index: 999999; background: yellowgreen; display: block; top: 0; left: 0; width: 10px; height: 100%">--}}
{{--            Processing Payment...--}}
{{--            @if( $readyToLoad)--}}
{{--                wait--}}
{{--            @endif--}}
{{--        </div>--}}

        <div class="preloader_cart">
            <div class="lds-ellipsis">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    @if($cart->where('id', $product->id)->count())

        <div class="update_Cart_wrap">
            @if($cart->where('id', $product->id)->first()->qty < $product->qty_left )
                @if($cart->where('id', $product->id)->first()->qty < $product->qty_max )
                    <div class="increaseProduct">
                        <form wire:submit.prevent="increaseProduct({{$product->id}})" method="post">
                            <button type="submit" class="btn btn-sm btn-fill-out">+</button>
                        </form>
                    </div>
                @endif
            @endif

            <div class="product_qty">
                {{$cart->where('id', $product->id)->first()->qty}}
            </div>

            <div class="increaseProduct">
                <form wire:submit.prevent="decreaseProduct({{$product->id}})" method="post">
                    <button type="submit" class="btn btn-sm btn-fill-out">-</button>
                </form>
            </div>
        </div>
    @else
        <form  wire:submit.prevent="addToCart({{$product->id}})" method="post">
            <div class="add_toCart_wrap">
                <button type="submit" class="btn btn-sm btn-fill-out"> <i class="icon-basket-loaded"></i> {{__('web/cart.Add To Cart')}}</button>
            </div>
        </form>
    @endif
</div>


