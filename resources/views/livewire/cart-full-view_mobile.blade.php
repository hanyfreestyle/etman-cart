<div class="row">
    @if(count($CartList) >0 )
        @foreach($CartList as $ProductCart)
            <div class="col-12 cart_mobile_12">

                <div class="product_row_div @if($ProductCart->options->price_err == 1 or $ProductCart->options->qty_err ) error_in_product_mobile @endif">
                    <div class="product_img">
                        <img src="{{getPhotoPath($ProductCart->model->photo_thum_1 ,"blog")}}" alt="product1">
                    </div>

                    <div class="product_infoDiv">
                        <div class="info_name">{{$ProductCart->name}}</div>

                        @if($ProductCart->options->qty_err == 1 and $ProductCart->options->qty_left == null)
                            <div class="err_sold_out">
                                {{__('web/orders.err_sold_out')}}
                            </div>

                            <div class="quantity_divform">
                            </div>
                            <div class="removeform">
                                <form  wire:submit.prevent="removeFromCart({{$ProductCart->id}})" method="post">
                                    <button type="submit" class="btns  remove_but_cart"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        @else
                            <div class="price_info">
                                <div class="this_price">
                                    {{$ProductCart->price}} {{__('web/cart.EGP')}}
                                </div>
                                <div class="price_with_qty">
                                    {{$ProductCart->qty}} x  {{$ProductCart->model->unit}}  {{ $ProductCart->price *  $ProductCart->qty }} {{__('web/cart.EGP')}}
                                </div>
                            </div>


                            <div class="quantity_divform">
                                @if( $ProductCart->qty < $ProductCart->model->qty_left and $ProductCart->qty < $ProductCart->model->qty_max )
                                    <div class="increaseProduct">
                                        <form wire:submit.prevent="increaseProduct({{$ProductCart->id}})" method="post">
                                            <button type="submit" class="cart_increase">+</button>
                                        </form>
                                    </div>
                                @else
                                    <div class="increaseProduct">
                                        <button wire:click="update({{$ProductCart->id}})" type="button" class="cart_increase cart_increase_dark">+</button>
                                    </div>
                                @endif

                                <div class="increaseProduct">
                                    <form wire:submit.prevent="decreaseProduct({{$ProductCart->id}})" method="post">
                                        <button type="submit" class="cart_increase">-</button>
                                    </form>
                                </div>
                            </div>

                            <div class="removeform">
                                <form  wire:submit.prevent="removeFromCart({{$ProductCart->id}})" method="post">
                                    <button type="submit" class="btns  remove_but_cart"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>

                        @endif

                        @if (session()->has('message_'.$ProductCart->id))
                            <div class="no_more_qty_mobile">
                                {{ session('message_'.$ProductCart->id) }}
                            </div>
                        @endif

                        @if($PageErr != 0)
                            <div class="cart_mobile_err_div">



                            @if($ProductCart->options->price_err == 1)
                                <form  wire:submit.prevent="updateProductPrice({{$ProductCart->id}})" method="post">
                                    <div class="cart_mobile_err_but">
                                        <button type="submit" class="btn btn-sm btn-fill-out">{{__('web/orders.err_price_but')}}</button>
                                    </div>
                                </form>
                            @endif

                            @if($ProductCart->options->qty_err == 1 and $ProductCart->options->qty_left != null)
                                <form  wire:submit.prevent="updateProductQTY({{$ProductCart->id}})" method="post">
                                    <div class="cart_mobile_err_but">
                                        <button type="submit" class="btn btn-sm btn-fill-out">{{__('web/orders.err_qty_but')}}</button>
                                    </div>
                                </form>
                            @endif
                            </div>

                        @endif

                    </div>
                </div>
           </div>
        @endforeach
    @endif




</div>
