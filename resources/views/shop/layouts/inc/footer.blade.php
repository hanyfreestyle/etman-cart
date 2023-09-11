<x-website.footer-news-letter/>

<footer class="bg_gray webSiteFooter">
    <div class="footer_top small_pt pb_20">
        <div class="container">
            <div class="row accordion accordion_style1" id="accordion"  >



                <div class="col-lg-3 col-md-4 col-sm-6">
                    <x-website.footer-col-row title="{{ __('web/footer.menu_main') }}" prefix="Three" >
                        <ul class="widget_links">
                            <li><a class="" href="{{ route('Page_HomePage') }}">{{__('web/menu.home')}} </a></li>
                            <li><a class="" href="{{ route('Page_AboutUs') }}">{{ __('web/menu.About_Us') }}</a></li>
                            <li><a class="" href="{{ route('Page_OurClient') }}">{{ __('web/menu.Our_Client') }}</a></li>
                            <li><a class="" href="{{ route('Page_LatestNews') }}">{{  __('web/menu.Latest_News')}}</a></li>
                            <li><a class="" href="{{ route('Page_FaqList') }}">{{ __('web/menu.Faq') }}</a></li>
                            <li><a class="" href="{{ route('Page_TermsConditions') }}">{{ __('web/menu.Terms') }}</a></li>
                            <li><a class="" href="{{ route('Page_ContactUs') }}">{{  __('web/menu.contatc_us')}}</a></li>
                        </ul>
                    </x-website.footer-col-row>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <x-website.footer-col-row title="{{__('web/footer.menu_Categories')}}" prefix="Four" >
                        <ul class="widget_links">

                            @if($agent->isMobile())
                                @foreach($MenuCategory as $MainCategory)
                                    <li><a href="#">{{$MainCategory->name}}</a></li>
                                @endforeach

                            @else
                                @foreach($MenuCategory as $MainCategory)
                                    @if($loop->index < 7)
                                    <li><a href="#">{{$MainCategory->name}}</a></li>
                                    @endif
                                @endforeach


                            @endif

                        </ul>
                        @if(count($MenuCategory) > 7)
                            <p class="footer_about_more">
                                <a href="{{route('Page_MainCategory')}}">{{__('web/def.View_All')}}</a>
                            </p>
                        @endif

                    </x-website.footer-col-row>
                </div>

            </div>
        </div>
    </div>

    <x-website.footer-icons/>

    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <p class="mb-lg-0 text-center">{!! GetCopyRight('2010',$WebConfig->name ) !!}</p>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <div class="widget mb-lg-0">
                        <ul class="social_icons  social_icons_footer text-center text-lg-start">
                            @if($WebConfig->facebook)
                                <li><a href="{{$WebConfig->facebook}}" target="_blank" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            @endif
                            @if($WebConfig->twitter)
                                <li><a href="{{$WebConfig->twitter}}"  target="_blank" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            @endif

                            @if($WebConfig->youtube)
                                <li><a href="{{$WebConfig->youtube}}"  target="_blank" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            @endif

                            @if($WebConfig->instagram)
                                <li><a href="{{$WebConfig->instagram}}" target="_blank" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            @endif

                            @if($WebConfig->linkedin)
                                    <li><a href="{{$WebConfig->linkedin}}" target="_blank" class="sc_linkedin"><i class="ion-social-linkedin"></i></a></li>
                            @endif





                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="footer_payment text-center text-lg-end">

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
