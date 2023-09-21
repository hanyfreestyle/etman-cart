@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$trees,$Product,$Category) }}
    </x-website.breadcrumb>
@endsection
@section('content')

    <div class="section ProductViewPage pt-lg-5 pt-4 pb-5">
        <div class="container">
            <div class="row">
                @if($agent->isMobile())
                    <div class="col-lg-12 col-md-6">
                        <div class="pr_detail mb-4">
                            <div class="product_description">
                                <h1 class="product_title">{{$Product->name}}</h1>
                                <div class="pro_des">
                                    <p class="addReadMore showlesscontent" >{{$Product->des}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif



                <div class="col-lg-5 col-md-6">


                    <div class="product-image vertical_gallery">
                        <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-vertical="true" data-vertical-swiping="true" data-slides-to-show="5" data-slides-to-scroll="1" data-infinite="false">
                            @foreach($Product->more_photos as $photo)
                                <div class="item">
                                    <a href="#" class="product_gallery_item  @if($loop->index == 0) active @endif" data-image="{{getPhotoPath($photo->photo)}}" data-zoom-image="{{getPhotoPath($photo->photo)}}">
                                        <img src="{{getPhotoPath($photo->photo_thum_1)}}" alt="product_small_img1" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="product_img_box">
                            @foreach($Product->more_photos as $photo)
                                @if($loop->index == 0)
                                    <img id="product_img" src='{{getPhotoPath($photo->photo_thum_1)}}' data-zoom-image="{{getPhotoPath($photo->photo)}}" alt="product_img1" />
                                    <a href="#" class="product_img_zoom" title="Zoom">
                                        <span class="linearicons-zoom-in"></span>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">

                    <div class="pr_detail">
                        <div class="product_description">

                            @if($agent->isMobile() == false)
                                <h1 class="product_title">{{$Product->name}}</h1>
                                <div class="pro_des">
                                    <p class="addReadMore showlesscontent" >{{$Product->des}}</p>
                                </div>
                            @endif


                            <ul class="product-meta">

                                @if($Product->ref_code)
                                    <li> {{__('web/def.lable_SKU')}} <a href="#">  <span>{{$Product->ref_code}}</span> </a></li>
                                @endif

                                <li> {{__('web/def.lable_Category')}}
                                    @foreach($Product->website_product_with_category as $category )
                                        <a href="{{ route('Page_WebCategoryView',$category->slug)}}"><span> {{$category->name}}</span></a>
                                    @endforeach

                                </li>

                            </ul>

                        </div>
                        <hr />
{{--                        <x-website.block-category-icon-info/>--}}
                    </div>

                    @if($Product->table_data_count)
                        <x-website.block-additional-table :row-data="$Product->table_data" />
                    @endif
                </div>
            </div>





            @if(count($ReletedProducts) > 0)
                <div class="row mt-lg-3 MainCategoryList ">
                    <div class="col-12">
                    <h3 class="ReletedProducts">{{__('web/def.Releted_Products')}}</h3>
                        <hr>

                        <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="5" data-responsive='{"0":{"items": "2"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>

                            @foreach($ReletedProducts as $Product)
                                <div class="item">
                                    <x-website.block-product-card :product="$Product" :category="$Category"/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif


        </div>
    </div>
@endsection


@section('AddScript')

@endsection

