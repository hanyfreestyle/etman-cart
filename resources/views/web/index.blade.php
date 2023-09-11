@extends('web.layouts.app')

@section('content')
<div class="section AboutUs">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="def_h1 def_border" >{{__('web/menu.About_Us')}}</h1>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <p>{!! __('web/about.text_1') !!}</p>
                    <p>{!! __('web/about.text_2') !!}</p>
                    <p>{!! __('web/about.text_3') !!}</p>
                </div>

                <div class="col-lg-5">
                    <div class="about_img scene mt-2 mb-4 mb-lg-0">
                        <img src="{{getDefPhotoPath($DefPhotoList,'about-1')}}" alt="about_img"/>
                    </div>

                </div>

            </div>
        </div>



    </div>


<div class="section small_pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading_tab_header">
                    <div class="heading_s2">
                        <h2 class="def_h2">{{__('web/def.Main_Categories')}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="client_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="true" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                    @foreach($MenuCategory as $MainCategory)

                        <a href="">

                            <div class="item">
                                <div class="cl_logoX">
                                    <img src="{{ getPhotoPath($MainCategory->photo ,'faq-icon') }}" alt="cl_logo"/>

                                </div>

                                <h3 class="def_h4 text-center mt-3">{{$MainCategory->name}}</h3>
                            </div>
                        </a>


                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



<div class="sectionX small_pt pb_70 mt-lg-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 mb-lg-3">
                <div class="heading_s1 text-center">
                    <h2>{{__('web/menu.Latest_News')}}</h2>
                </div>

            </div>
        </div>
        <div class="row justify-content-center">

            @foreach($BlogPosts as $Post)
                <div class="col-lg-4 col-md-6">
                    <x-website.card-last-news  :post-data="$Post"/>
                </div>
            @endforeach


        </div>
    </div>
</div>


<x-website.block-our-client/>

@endsection

