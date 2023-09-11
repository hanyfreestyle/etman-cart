@extends('shop.layouts.app')

@section('content')

    <div class="section small_pb small_pt MainCategory_Home_Slider">
        <div class="container">

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





    @foreach($MainCategoryPro as $MainCategory)

    <div class="section MainCategoryList">
        <div class="container">
            <div class="row">
                @if($loop->index == 0 or $loop->index == 2 )
                    <div class="col-xl-3 d-none d-xl-block">
                        <div class="sale-banner">
                            <a class="hover_effect1 HomeImageCat" href="{{route('Page_WebCategoryView',$MainCategory->slug)}}">
                                <img src="{{getPhotoPath($MainCategory->photo)}}" alt="shop_banner_img10">
                            </a>
                        </div>
                    </div>
                @endif

                <div class="col-xl-9 ">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <h4>{{$MainCategory->name}}</h4>
                                </div>
                                <div class="view_all">
                                    <a href="{{route('Page_WebCategoryView',$MainCategory->slug)}}" class="text_default"><i class="linearicons-power"></i> <span>{{__('web/def.View_All')}}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product_slider carousel_slider owl-carousel owl-theme dot_style1" data-loop="true" data-margin="5" data-responsive='{"0":{"items": "2"}, "481":{"items": "2"}, "768":{"items": "3"}, "991":{"items": "4"}}'>

                                @foreach($MainCategory->recursiveProduct as $Product)
                                    <div class="item">
                                        <div class="product_wrap">
                                            <div class="product_img">
                                                <a href="{{route('Page_WebProductView',$Product->slug)}}">
                                                    <img src="{{ getPhotoPath($Product->photo ,'categorie') }}" alt="el_img2">
                                                </a>
                                                <div class="product_action_box">
                                                    <ul class="list_none pr_action_btn">
                                                        <li><a href="{{route('Page_WebPro_Qview',$Product->slug)}}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product_info">
                                                <h6 class="product_title"><a href="{{route('Page_WebProductView',$Product->slug)}}">{{$Product->name}}</a></h6>



                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>

                    @if($loop->index ==1 or $loop->index == 3 )
                        <div class="col-xl-3 d-none d-xl-block">
                            <div class="sale-banner">
                                <a class="hover_effect1 HomeImageCat" href="{{route('Page_WebCategoryView',$MainCategory->slug)}}">
                                    <img src="{{getPhotoPath($MainCategory->photo)}}" alt="shop_banner_img10">
                                </a>
                            </div>
                        </div>
                    @endif


            </div>
        </div>
    </div>

    @endforeach



@endsection

