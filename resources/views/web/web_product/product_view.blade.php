@extends('web.layouts.app')
@section('breadcrumb')

    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                {{--                <div class="col-md-6">--}}
                {{--                    <div class="page-title">--}}
                {{--                        <span>{{$Category->name}}</span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-md-12">
                    {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$trees,$Product) }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="section ProductViewPage pt-lg-5 pt-4">
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
                                    <a href="#" class="product_gallery_item  @if($loop->index == 0) active @endif" data-image="{{getPhotoPath($photo->photo_thum_1)}}" data-zoom-image="{{getPhotoPath($photo->photo_thum_1)}}">
                                        <img src="{{getPhotoPath($photo->photo_thum_1)}}" alt="product_small_img1" />
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="product_img_box">
                            @foreach($Product->more_photos as $photo)
                                @if($loop->index == 0)
                                    <img id="product_img" src='{{getPhotoPath($photo->photo_thum_1)}}' data-zoom-image="{{getPhotoPath($photo->photo_thum_1)}}" alt="product_img1" />
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
                                <li> {{__('web/def.lable_SKU')}} <a href="#">  <span>5041315101040</span> </a></li>
                                <li> {{__('web/def.lable_Category')}}<a href="{{ route('Page_WebCategoryView',$Product->categoryName->slug)}}"><span> {{$Product->categoryName->name}}</span></a></li>

                            </ul>

                        </div>
                        <hr />
{{--                        <x-website.block-category-icon-info/>--}}
                    </div>

                    @if($Product->table_data_count)
                        <div class="row">
                            <div class="col-12">
                                <h2> {{__('web/def.Additional_info')}}</h2>
                                <table class="table table-bordered">
                                    @foreach($Product->table_data as $tableData)
                                        <tr>
                                            <td>{{$tableData->attributeName->name}}</td>
                                            <td>{{$tableData->des}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>


            <div class="row">
                <div class="col-12 text-left">
                    <hr>
                    <x-website.block-share-icons/>
                </div>
            </div>


            @if(count($ReletedProducts) > 0)
                <div class="row mt-lg-3">
                    <div class="col-12">
                    <h3>{{__('web/def.Releted_Products')}}</h3>
                        <hr>

                        <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "2"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>

                            @foreach($ReletedProducts as $Product)
                                <div class="item">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="{{route('Page_WebProductView',$Product->slug)}}">
                                                <img src="{{getPhotoPath($Product->photo)}}" alt="product_img1">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
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
            @endif


        </div>
    </div>
@endsection


@section('AddScript')

@endsection

