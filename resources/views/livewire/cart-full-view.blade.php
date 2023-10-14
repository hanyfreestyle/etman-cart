<div class="section">
    <div wire:loading>
        <div class="preloader_cart">
            <div class="lds-ellipsis">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="container">
        @if(count($CartList) > 0 )
            @if($agent->isTablet() or $agent->isDesktop())
                @include('livewire.cart-full-view_desktop')
            @else
                @include('livewire.cart-full-view_mobile')
            @endif
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
                                {{--                                <tr>--}}
                                {{--                                    <td class="cart_total_label">{{__('web/cart.cart_view_Shipping')}}</td>--}}
                                {{--                                    <td class="cart_total_amount">{{__('web/cart.cart_view_Shipping_free')}}</td>--}}
                                {{--                                </tr>--}}
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.cart_veiw_Total')}}</td>
                                    <td class="cart_total_amount"><strong>{{$subtotal}} {{__('web/cart.EGP')}}</strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="row">
                            <div class="col-md-12 text-left Confirm_Order">
                                @if(Auth::guard('customer')->check())
                                    @if($PageErr == 0)
                                        <span>
                                    <a href="{{route('Shop_CartConfirm')}}" class="btn btn-fill-out float-right ml-5 mb-2 mt-2 mt-lg-3">
                                        <i class="fas fa-shopping-cart"></i> {{__('web/cart.Confirm_Order')}}
                                    </a>
                                         </span>

                                    @else
                                        <div class="alert alert-danger text-center">
                                            {!! (__('web/cart.err_update_need')) !!}
                                        </div>
                                    @endif


                                    {{--                                    <span>--}}
                                    {{--                                    <a href="https://api.whatsapp.com/send?phone=201208256945&text={!! $Mass !!}" class="btn btn-whatsapp ml-5 mt-lg-3 mt-2">--}}
                                    {{--                                        <i class="fab fa-whatsapp"></i> {{__('web/cart.Confirm_Order_whatsapp')}}--}}
                                    {{--                                    </a>--}}
                                    {{--                                         </span>--}}
                                @else
                                    <span>
                                        <a href="{{route('Customer_login','cart')}}" class="btn btn-fill-out ml-5 mb-2 mt-2 mt-lg-3">
                                            <i class="fas fa-lock"></i> {{__('web/cart.confirm_order_but_login')}}
                                        </a>
                                    </span>

                                    <span>
                                         <a href="{{route('Customer_Register')}}" class="btn btn-dark ml-5 mt-lg-3 mt-2">
                                            <i class="fas fa-user-check"></i> {{__('web/cart.confirm_order_but_register')}}
                                        </a>
                                    </span>

                                @endif
                            </div>
                        </div>

                    </div>
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


