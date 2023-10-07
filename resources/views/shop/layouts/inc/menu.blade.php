
<div class="bottom_header light_skin main_menu_uppercase bg_dark  @if($SinglePageView['banner_id']  and $SinglePageView['banner_count'] > 0) mb-4 @endif">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                @include('shop.layouts.inc.categories-wrap')
            </div>

            <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                        <ul class="navbar-nav web_site_navbar_nav">
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'HomePage' ) setActive @endif" href="{{ route('Shop_HomePage') }}"> <i class="fas fa-home d-sm-none"></i> {{__('web/menu.home')}} </a></li>
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'MainCategory' ) setActive @endif" href="{{ route('Shop_MainCategory') }}"><i class="fas fa-sitemap d-sm-none"></i>{{__('web/def.Main_Categories')}} </a></li>
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'Shop_Recently' ) setActive @endif" href="{{ route('Shop_Recently') }}"><i class="fas fa-history d-sm-none"></i>{{ __('web/menu.recently_arrived')}} </a></li>
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'Shop_WeekOffers' ) setActive @endif" href="{{ route('Shop_WeekOffers') }}"><i class="fas fa-calendar-alt d-sm-none"></i>{{ __('web/menu.week_offer') }} </a></li>
                            <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'Shop_BestDeals' ) setActive @endif" href="{{ route('Shop_BestDeals') }}"><i class="fas fa-cash-register d-sm-none"></i>{{ __('web/menu.client_offer') }} </a></li>
                            @if(Auth::guard('customer')->check() == false)
                                @if($agent->isMobile() == true and $agent->isTablet() == false)
                                    <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'FaqList' ) setActive @endif" href="{{ route('Page_FaqList') }}"><i class="fas fa-question"></i> {{ __('web/menu.Faq') }}</a></li>
                                @endif
                                <li><a class="nav-link nav_item @if($SinglePageView['SelMenu'] == 'ContactUs' ) setActive @endif" href="{{ route('Page_ContactUs') }}"><i class="fas fa-headset d-sm-none"></i> {{ __('web/menu.contatc_us')}}</a></li>
                            @endif



                            @if($agent->isMobile() == true and $agent->isTablet() == false)




                                @if(Auth::guard('customer')->check() == false)

                                    <div class="mobileCart">
                                        <a href="{{route('Shop_CartView')}}">
                                            <i class="linearicons-cart"></i>
                                            <span class="">سلة المشتريات</span>

                                        </a>
                                    </div>

                                    <div class="call_us">
                                        <i class="linearicons-phone-wave"></i>
                                        <span class="header_phone_number">{{$WebConfig->phone_text}}</span>
                                    </div>
                                    <div class="menu_social_icons  text-center  ">
                                        @if($WebConfig->facebook)
                                            <a href="{{$WebConfig->facebook}}" target="_blank" class="sc_facebook"><i class="ion-social-facebook"></i></a>
                                        @endif
                                        @if($WebConfig->twitter)
                                            <a href="{{$WebConfig->twitter}}"  target="_blank" class="sc_twitter"><i class="ion-social-twitter"></i></a>
                                        @endif

                                        @if($WebConfig->youtube)
                                            <a href="{{$WebConfig->youtube}}"  target="_blank" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a>
                                        @endif

                                        @if($WebConfig->instagram)
                                            <a href="{{$WebConfig->instagram}}" target="_blank" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a>
                                        @endif

                                        @if($WebConfig->linkedin)
                                            <a href="{{$WebConfig->linkedin}}" target="_blank" class="sc_linkedin"><i class="ion-social-linkedin"></i></a>
                                        @endif





                                    </div>
                                @else




                                    <li class="nav-item">
                                        <a href="{{route('Customer_Profile')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'profile' ) setActive @endif">
                                            <i class="fas fa-id-card"></i> {{__('web/customers.Profile_AccountDetails')}}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('Profile_OrdersList')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'OrdersList' ) setActive @endif">
                                            <i class="fas fa-shopping-cart"></i> {{__('web/customers.Profile_OrdersList')}}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('Profile_Address')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'Address' ) setActive @endif">
                                            <i class="fas fa-map-signs"></i> {{__('web/customers.Profile_Address')}}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('Profile_ChangePassword')}}" class="nav-link @if($SinglePageView['profileMenu'] == 'ChangePassword' ) setActive @endif">
                                            <i class="fas fa-key"></i> {{__('web/customers.Profile_ChangePassword')}}
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('Customer_logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  >
                                            <i class="fas fa-unlock-alt"></i> {{__('web/customers.Profile_logout')}}
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('Customer_logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                                    <div class="mobileCart">
                                        <a href="{{route('Shop_CartView')}}">
                                            <i class="linearicons-cart"></i>
                                            <span class="">سلة المشتريات</span>

                                        </a>
                                    </div>

                                @endif




                            @endif

                        </ul>







                    </div>

                    <ul class="navbar-nav attr-nav align-items-center">

                        @if(Auth::guard('customer')->check())
                            <li><a href="{{route('Customer_Profile')}}" class="nav-link"><i class="linearicons-user"></i></a></li>
                        @else
                            <li><a href="{{route('Customer_login')}}" class="nav-link"><i class="linearicons-user"></i></a></li>
                        @endif


                        <li class="dropdown cart_dropdown">
                            <a href="{{route('Shop_CartView')}}" class="nav-link"><i class="linearicons-cart"></i>@livewire('cart-counter')</a>
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
