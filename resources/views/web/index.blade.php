@extends('web.layouts.app')

@section('content')

{{--    <div class="section pb_20 small_pt">--}}
{{--        <div class="container">--}}
{{--            <div class="row mb-5">--}}

{{--                @foreach($MenuCategory as $MainCategory)--}}
{{--                    <li>{{$MainCategory->name}} {{$MainCategory->children_count}}</li>--}}
{{--                    @if($MainCategory->children_count > 0 )--}}

{{--                        @foreach($MainCategory->children  as $SubCategory)--}}
{{--                            @if($loop->index < 2)--}}

{{--                                <li class="mr-5" style="margin-right: 100px!important;">{{$SubCategory->name}} {{count($SubCategory->CatProduct)}}</li>--}}

{{--                                @if(count($SubCategory->CatProduct) > 0 )--}}
{{--                                    @foreach($SubCategory->CatProduct as $Product)--}}
{{--                                        <li class="mr-5" style="margin-right: 100px!important;">{{$Product->name}}</li>--}}
{{--                                    @endforeach--}}

{{--                                @endif--}}
{{--                            @endif--}}
{{--                        @endforeach--}}

{{--                    @endif--}}

{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="section small_pb small_pt MainCategory_Home_Slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s4 text-center">
                        <h2 class="def_h2"><a href="{{route('Page_MainCategory')}}">{{ __('web/def.Main_Categories') }}</a></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="cat_slider cat_style1 mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "576":{"items": "4"}, "768":{"items": "5"}, "991":{"items": "6"}, "1199":{"items": "7"}}'>
                        @foreach($MenuCategory as $MainCategory)
                        <div class="item">
                            <div class="categories_box">
                                <a href="#">
                                    <img  class="slider_icon" src="{{ getPhotoPath($MainCategory->icon ,'faq-icon') }}" alt="cat_img1"/>
                                    <span>{{$MainCategory->name}}</span>
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-website.block-our-client/>

@endsection

