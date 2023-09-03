<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  {!!htmlArDir()!!}  >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">
    <title>Etman-Group</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ defWebAssets('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/animate.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('bootstrap/css/bootstrap.min_'.thisCurrentLocale().'.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('owlcarousel/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('owlcarousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/slick.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/style.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/responsive.css') }}">

    @if(thisCurrentLocale() == 'ar')
        <link rel="stylesheet" href="{{ defWebAssets('css/rtl-style.css') }}">
    @endif

    <link rel="stylesheet" href="{{ defWebAssets('css/custom_style.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/custom_'.thisCurrentLocale().'.css') }}">
</head>

<body >

<x-website.html-loader/>

<header class="header_wrap">
    @include('web.layouts.inc.header_top_2')
    @include('web.layouts.inc.header_middle_2')
    @include('web.layouts.inc.menu_2')
</header>

<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div id="carouselExampleControls" class="carousel slide light_arrow" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @foreach($Banner_def as $banner)
                            <div class="carousel-item @if($loop->index == 0) active @endif background_bg" data-img-src="{{getPhotoPath($banner->photo,"blog")}}">
                                <div class="banner_slide_content banner_content_inner">
                                    <div class="col-lg-7 col-10">
                                        <div class="banner_content3 overflow-hidden stop_view">
                                            <h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Get up to 50% off Today Only!</h5>
                                            <h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Dual Camera 20MP</h2>
                                            <h4 class="staggered-animation mb-4 product-price" data-animation="slideInLeft" data-animation-delay="1.2s"><span class="price">$45.00</span><del>$55.25</del></h4>
                                            <a class="btn btn-fill-out btn-radius staggered-animation text-uppercase" href="shop-left-sidebar.html" data-animation="slideInLeft" data-animation-delay="1.5s">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <ol class="carousel-indicators indicators_style1">
                        <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main_content mt-5">



</div>


{{--@yield('content')--}}

@include('web.layouts.inc.footer')


<!-- Latest jQuery -->
<script src="{{ defWebAssets('js/jquery-3.6.0.min.js') }}"></script>
<!-- popper min js -->
<script src="{{ defWebAssets('js/popper.min.js') }}"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{ defWebAssets('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- owl-carousel min js  -->
<script src="{{ defWebAssets('owlcarousel/js/owl.carousel.min.js') }}"></script>
<!-- magnific-popup min js  -->
<script src="{{ defWebAssets('js/magnific-popup.min.js') }}"></script>
<!-- waypoints min js  -->
<script src="{{ defWebAssets('js/waypoints.min.js') }}"></script>
<!-- parallax js  -->
<script src="{{ defWebAssets('js/parallax.js') }}"></script>
<!-- countdown js  -->
<script src="{{ defWebAssets('js/jquery.countdown.min.js') }}"></script>
<!-- imagesloaded js -->
<script src="{{ defWebAssets('js/imagesloaded.pkgd.min.js') }}"></script>
<!-- isotope min js -->
<script src="{{ defWebAssets('js/isotope.min.js') }}"></script>
<!-- jquery.dd.min js -->
<script src="{{ defWebAssets('js/jquery.dd.min.js') }}"></script>
<!-- slick js -->
<script src="{{ defWebAssets('js/slick.min.js') }}"></script>
<!-- elevatezoom js -->
<script src="{{ defWebAssets('js/jquery.elevatezoom.js') }}"></script>
<!-- scripts js -->
<script src="{{ defWebAssets('js/scripts.js') }}"></script>

<script>
    async function loadarfont(){
        const font_ar = new FontFace('Tajawal','url({{ defWebAssets('fonts/Ar/TajawalRegular.woff2') }}');
        await font_ar.load();
        document.fonts.add(font_ar);
        document.body.classList.add('Tajawal');
    };
    loadarfont();

    async function loadarfont_en(){
        const font_en = new FontFace('Poppins','url({{ defWebAssets('fonts/En/Poppins-Regular.woff2') }}');
        await font_en.load();
        document.fonts.add(font_en);
        document.body.classList.add('Poppins');
    };
    loadarfont_en();
</script>

</body>
</html>
