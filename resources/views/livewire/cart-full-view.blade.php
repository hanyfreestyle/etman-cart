<div class="section">
    <div class="container">
        @if(count($CartList) > 0 )
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive shop_cart_table">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">{{__('web/cart.t_Product')}}</th>
                                <th class="product-price">{{__('web/cart.t_Price')}}</th>
                                <th class="product-quantity">{{__('web/cart.t_Quantity')}}</th>
                                <th class="product-subtotal">{{__('web/cart.t_Total')}}</th>
                                <th class="product-remove"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($CartList) >0 )
                                @foreach($CartList as $ProductCart)
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="{{getPhotoPath($ProductCart->options->photo,"blog")}}" alt="product1"></a></td>
                                        <td class="product-name" data-title="{{__('web/cart.t_Product')}}">
                                            <a href="#">{{$ProductCart->name}}</a></td>
                                        <td class="product-price" data-title="{{__('web/cart.t_Price')}}">{{$ProductCart->price}} {{__('web/cart.EGP')}}</td>
                                        <td class="product-quantity" data-title="{{__('web/cart.t_Quantity')}}">
                                            <div class="quantity">


                                                <div class="increaseProduct">
                                                    <form wire:submit.prevent="decreaseProduct({{$ProductCart->id}})" method="post">
{{--                                                        @csrf--}}
                                                        <button type="submit" class="btn btn-sm btn-fill-out">-</button>
                                                    </form>
                                                </div>

                                                <input type="text" name="quantity" readonly value="{{$ProductCart->qty}}" title="Qty" class="qty" size="4">

                                                <div class="increaseProduct">
                                                    <form wire:submit.prevent="increaseProduct({{$ProductCart->id}})" method="post">
{{--                                                        @csrf--}}
                                                        <button type="submit" class="btn btn-sm btn-fill-out">+</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="{{__('web/cart.t_Total')}}">{{ $ProductCart->price *  $ProductCart->qty }} {{__('web/cart.EGP')}}</td>
                                        <td class="product-remove" data-title="">
                                            <form  wire:submit.prevent="removeFromCart({{$ProductCart->id}})" method="post">
{{--                                                @csrf--}}

                                                <div class="add_toCart_wrap">
                                                    <button type="submit" class="btn btn-sm btn-fill-out"> <i class="ti-close"></i>{{__('web/cart.t_Remove')}}</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif



                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="medium_divider"></div>
                    <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                    <div class="medium_divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="border p-3 p-md-4">
                        <div class="heading_s1 mb-3">
                            <h6>{{__('web/cart.cart_veiw_Totals')}}</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.Subtotal')}}</td>
                                    <td class="cart_total_amount">{{$subtotal}} {{__('web/cart.EGP')}}</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.cart_view_Shipping')}}</td>
                                    <td class="cart_total_amount">{{__('web/cart.cart_view_Shipping_free')}}</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.cart_veiw_Total')}}</td>
                                    <td class="cart_total_amount"><strong>{{$subtotal}} {{__('web/cart.EGP')}}</strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


{{--                        @foreach($CartList as $ProductCart)--}}
{{--                            --}}
{{--                        @endforeach--}}

{{--                        {!! nl2br($Mass) !!}--}}
                        <div class="row">
                            <div class="col-md-12 text-left Confirm_Order">
                                <a href="#" class="btn btn-fill-out float-right ml-5"><i class="fas fa-shopping-cart"></i> {{__('web/cart.Confirm_Order')}}</a>

                                <a href="https://api.whatsapp.com/send?phone=201208256945&text={!! $Mass !!}" class="btn btn-whatsapp ml-5">
                                    <i class="fab fa-whatsapp"></i> {{__('web/cart.Confirm_Order_whatsapp')}}</a>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-lg-5">
                <div class="col-md-12">
                </div>
            </div>
        @else
            <div class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="text-center order_complete">
                                <i class="fas fa-check-circle"></i>
                                <div class="heading_s1">
                                    <h3>{!! __('web/cart.empty_h1') !!}</h3>
                                </div>
                                <p>
                                    {!! nl2br(__('web/cart.empty_p')) !!}
                                </p>
                                <a href="{{route('Shop_Recently')}}" class="btn btn-fill-out">{{__('web/cart.empty_but')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>

<script>
    document.addEventListener('livewire:load', () => {
        setInterval(function(){ window.livewire.emit('cart-full-view.blade'); }, 1800000);
    });
</script>
