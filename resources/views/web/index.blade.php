@extends('web.layouts.app')

@section('content')
    <!-- START SECTION BANNER -->

{{--    <div class="mt-4 staggered-animation-wrap">--}}
{{--        <div class="{{ $PageView['container'] }}">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="banner_section shop_el_slider">--}}
{{--                        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">--}}
{{--                            <div class="carousel-inner">--}}
{{--                                @foreach($Banner_def as $banner)--}}
{{--                                    <div class="carousel-item @if($loop->index == 0) active @endif background_bg" data-img-src="{{getPhotoPath($banner->photo,"blog")}}">--}}
{{--                                        <div class="banner_slide_content banner_content_inner">--}}
{{--                                            <div class="col-lg-7 col-10">--}}
{{--                                                <div class="banner_content3 overflow-hidden">--}}
{{--                                                    <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Get up to 50% off Today Only!</h5>--}}
{{--                                                    <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Dual Camera 20MP</h2>--}}
{{--                                                    <h4 class="staggered-animation mb-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">$45.00</span><del>$55.25</del></h4>--}}
{{--                                                    <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                            <ol class="carousel-indicators indicators_style3">--}}
{{--                                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>--}}
{{--                                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>--}}
{{--                                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>--}}
{{--                            </ol>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 d-none d-lg-block">--}}
{{--                    @foreach($Banner_def2 as $Banner_2)--}}
{{--                        <a href="#" class="hover_effect1 mb-3">--}}

{{--                            <div class="el_img ">--}}
{{--                                <img src="{{getPhotoPath($Banner_2->photo,"blog")}}" alt="shop_banner_img6">--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--               </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="section small_pt pb-0">
        {{thisCurrentLocale()}}
        {{htmlArDir()}}
    </div>
@endsection

