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
                    @if($PageErr != 0)
                        <th class="product-remove"> </th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @if(count($CartList) >0 )
                    @foreach($CartList as $ProductCart)

                        <tr class="@if($ProductCart->options->price_err == 1 or $ProductCart->options->qty_err ) error_in_product @endif">
                            <td class="product-thumbnail"><a href="#"><img src="{{getPhotoPath($ProductCart->model->photo_thum_1 ,"blog")}}" alt="product1"></a></td>
                            <td class="product-name" data-title="{{__('web/cart.t_Product')}}">
                                <a href="#">{{$ProductCart->name}}</a></td>

                            @if($ProductCart->options->qty_err == 1 and $ProductCart->options->qty_left == null)
                                <td colspan="3">
                                    <div class="btn btn-dark rounded-0">
                                        {{__('web/orders.err_sold_out')}}
                                    </div>
                                </td>

                            @else
                                <td class="product-price" data-title="{{__('web/cart.t_Price')}}">{{$ProductCart->price}} {{__('web/cart.EGP')}}</td>
                                <td class="product-quantity" data-title="{{__('web/cart.t_Quantity')}}">
                                    <div class="quantity">
                                        @if( $ProductCart->qty < $ProductCart->model->qty_left and $ProductCart->qty < $ProductCart->model->qty_max )
                                            <div class="increaseProduct">
                                                <form wire:submit.prevent="increaseProduct({{$ProductCart->id}})" method="post">
                                                    <button type="submit" class="btn btn-sm btn-fill-out">+</button>
                                                </form>
                                            </div>
                                        @else
                                            <div class="increaseProduct">
                                                <button wire:click="update({{$ProductCart->id}})" type="button" class="btn btn-sm btn-fill-out-dark">+</button>
                                            </div>
                                        @endif

                                        <input type="text" name="quantity" readonly value="{{$ProductCart->qty}}" title="Qty" class="qty" size="4">

                                        <div class="increaseProduct">
                                            <form wire:submit.prevent="decreaseProduct({{$ProductCart->id}})" method="post">
                                                <button type="submit" class="btn btn-sm btn-fill-out">-</button>
                                            </form>
                                        </div>


                                    </div>
                                    @if (session()->has('message_'.$ProductCart->id))
                                        <div class="no_more_qty">
                                            {{ session('message_'.$ProductCart->id) }}
                                        </div>
                                    @endif
                                </td>
                                <td class="product-subtotal" data-title="{{__('web/cart.t_Total')}}">{{ $ProductCart->price *  $ProductCart->qty }} {{__('web/cart.EGP')}}</td>
                            @endif

                            <td class="product-remove" data-title="">
                                <form  wire:submit.prevent="removeFromCart({{$ProductCart->id}})" method="post">
                                    <div class="add_toCart_wrap">
                                        <button type="submit" class="btn btn-sm btn-fill-out"> <i class="ti-close"></i>{{__('web/cart.t_Remove')}}</button>
                                    </div>
                                </form>
                            </td>

                            @if($PageErr != 0)
                                <td class="product-remove" data-title="">

                                    @if($ProductCart->options->price_err == 1)
                                        <form  wire:submit.prevent="updateProductPrice({{$ProductCart->id}})" method="post">
                                            <div class="add_toCart_wrap">
                                                <button type="submit" class="btn btn-sm btn-fill-out">{{__('web/orders.err_price_but')}}</button>
                                            </div>
                                        </form>
                                    @endif

                                    @if($ProductCart->options->qty_err == 1 and $ProductCart->options->qty_left != null)
                                        <form  wire:submit.prevent="updateProductQTY({{$ProductCart->id}})" method="post">
                                            <div class="add_toCart_wrap">
                                                <button type="submit" class="btn btn-sm btn-fill-out">{{__('web/orders.err_qty_but')}}</button>
                                            </div>
                                        </form>
                                    @endif

                                </td>
                            @endif

                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
