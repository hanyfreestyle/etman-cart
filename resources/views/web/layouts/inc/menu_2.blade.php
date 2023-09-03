
<div class="bottom_header light_skin main_menu_uppercase bg_dark mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                <x-website.menu-categories-wrap/>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                        <ul class="navbar-nav">
                            <li><a class="nav-link nav_item" href="#">{{__('web/menu.home')}} </a></li>
                            <li><a class="nav-link nav_item" href="#">{{ __('web/menu.About_Us') }}</a></li>
                            <li><a class="nav-link nav_item" href="#">{{ __('web/menu.Faq') }}</a></li>
                            <li><a class="nav-link nav_item" href="#">{{  __('web/menu.New')}}</a></li>
                            <li><a class="nav-link nav_item" href="#">{{ __('web/menu.Our_Client') }}</a></li>
                            <li><a class="nav-link nav_item" href="#">{{  __('web/menu.contatc_us')}}</a></li>
                        </ul>
                    </div>

                    <ul class="navbar-nav attr-nav align-items-center">
                        <li><a href="{{ LaravelLocalization::getLocalizedURL(webChangeLocale(), null, [], true) }}" class="nav-link changeLangMobile">
                                <span> <img src="{{ defWebAssets('img/'.webChangeLocale().'.png') }}" alt=""></span>
                            </a></li>
                        <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-bs-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>

                            <div class="cart_box dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    @foreach($CartList as $ProductCart)
                                        <li>
                                            <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                            <a href="#"><img src="{{getPhotoPath($ProductCart->photo,"blog")}}" alt="cart_thumb1">
                                                <span class="cart_item_name">
                                            {{$ProductCart->name}}
                                        </span>

                                            </a>
                                            <span class="cart_quantity forcDir"> 1 x <span class="cart_amount"></span>150</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>{{__('web/cart.Subtotal')}}</strong>
                                        <span class="cart_price"> <span class="price_symbole"></span></span>300.00</p>
                                    <p class="cart_buttons">
                                        <a href="#" class="btn btn-fill-line rounded-0 view-cart">{{__('web/cart.View_Cart')}}</a>
                                        <a href="#" class="btn btn-fill-out rounded-0 checkout">{{__('web/cart.Confirm_Order')}}</a></p>
                                </div>
                            </div>
                        </li>

                    </ul>
                    @if($PageView['top_search_view'])
                        <div class="pr_search_icon">
                            <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                        </div>
                    @endif



                </nav>
            </div>
        </div>
    </div>
</div>
