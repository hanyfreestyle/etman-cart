<x-website.footer-news-letter/>

<footer class="bg_gray">
    <div class="footer_top small_pt pb_20">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo text-center">
                            <a href="{{route('Page_HomePage')}}"><img src="{{getDefPhotoPath($DefPhotoList,'dark-logo')}}" alt="logo"/></a>
                        </div>
                        <p class="footer_about_text">
                            {!! __('web/footer.about_text') !!}
                        </p>
                        <p class="footer_about_more">
                            <a href="">{{__('web/def.read_more')}}</a>
                        </p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="widget">

                        <h6 class="widget_title">المقر الرئيسى</h6>
                        <ul class="contact_info">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>
                                    ش خليل بك متفرع من اسماعيل صبري
                                    أمام بنك مصر - الجمرك <br>
                                    الاسكندرية - مصر <br>

                                </p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p class="forcDir">
                                    +2 0100 618 0117
                                    <br>
                                    +203 48 67 311
                                    <br>

                                    +203 48 15 941
                                </p>
                            </li>

                            <li>
                                <i class=" far fa-clock"></i>
                                <p><strong>
                                    مواعيد العمل
                                    </strong></p>
                                <p>
                                    طول ايام الاسبوع
                                    <br>
                                    من 9 صباحا وحتى 8 مساءا
                                </p>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">القائمة الرئيسية</h6>
                        <ul class="widget_links">
                            <li><a class="" href="{{ route('Page_HomePage') }}">{{__('web/menu.home')}} </a></li>
                            <li><a class="" href="{{ route('Page_AboutUs') }}">{{ __('web/menu.About_Us') }}</a></li>
                            <li><a class="" href="{{ route('Page_OurClient') }}">{{ __('web/menu.Our_Client') }}</a></li>
                            <li><a class="" href="{{ route('Page_LatestNews') }}">{{  __('web/menu.Latest_News')}}</a></li>
                            <li><a class="" href="{{ route('Page_FaqList') }}">{{ __('web/menu.Faq') }}</a></li>
                            <li><a class="" href="{{ route('Page_ContactUs') }}">{{  __('web/menu.contatc_us')}}</a></li>



                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">قائمة المنتجات</h6>
                        <ul class="widget_links">
                            @foreach($MenuCategory as $MainCategory)
                                <li><a href="#">{{$MainCategory->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <x-website.footer-icons/>

    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <p class="mb-lg-0 text-center">© 2020 All Rights Reserved by Bestwebcreator</p>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <div class="widget mb-lg-0">
                        <ul class="social_icons text-center text-lg-start">
                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
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
