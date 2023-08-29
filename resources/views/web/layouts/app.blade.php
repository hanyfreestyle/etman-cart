<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  {!!htmlArDir()!!}  >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
{!! SEO::generate() !!}
    <link rel="stylesheet" href="{{ defWebAssets('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ defAdminAssets('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/Main_Style.css') }}">
    <link rel="stylesheet" href="{{ defWebAssets('css/Main_Style_'.thisCurrentLocale().'.css') }}">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>


<div class="container">
    @include('web.layouts.inc.top_navbar')
</div>

<div class="container main-container">
    @yield('content')

</div>



@include('web.layouts.inc.footer')


<script src="{{ defWebAssets('jquery-3.7.0.min.js') }}" ></script>
<script src="{{ defWebAssets('bootstrap.bundle.min.js') }}"></script>
</body>
</html>
