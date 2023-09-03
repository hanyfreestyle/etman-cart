<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  {!!htmlArDir()!!}  >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate() !!}

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
    @include('web.layouts.inc.header_top')
    @include('web.layouts.inc.header_middle')
    @include('web.layouts.inc.menu')
</header>

@if( isset($SinglePageView['CatId'])  and count($PagesList[$SinglePageView['CatId']]->PageBanner) > 0)
    @include('web.layouts.inc.def_banner')
@else
    @yield('breadcrumb')
@endif



<div class="main_content">
    @yield('content')
</div>

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
