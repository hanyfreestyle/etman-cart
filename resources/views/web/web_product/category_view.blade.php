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
                    {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$trees) }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="section CategoryViewPage pt-lg-5 pt-3">
        <div class="container">
            <div class="row">



                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                            <div class="pr_detail">
                                <div class="product_description">
                                    <h1 class="product_title">{{$Category->name}}</h1>
                                    <div class="pro_des">
                                        <p class="addReadMore showlesscontent">{{$Category->des}}</p>
                                    </div>
                                </div>
                                @if($agent->isMobile() == false)
                                    <x-website.block-category-icon-info/>
                                    <x-website.block-share-icons />
                                @endif
                            </div>

                        </div>
                        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                            <div class="product-image mb-3">
                                <div class="img_box">
                                    <img  src='{{getPhotoPath($Category->photo,'categorie')}}' alt="product_img1" />
                                </div>
                            </div>

                            @if($agent->isMobile())
                                <x-website.block-category-icon-info/>
                                <x-website.block-share-icons />
                            @endif
                        </div>
                    </div>

                    @if($Category->table_data_count > 0)
                        <div class="row">
                            <div class="col-12">
                                <h2> {{__('web/def.Additional_info')}}</h2>
                                <table class="table table-bordered">
                                    @foreach($Category->table_data as $tableData)
                                        <tr>
                                            <td>{{$tableData->attributeName->name}}</td>
                                            <td>{{$tableData->des}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    @endif

                    @if($Category->children_count > 0)
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="divider"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_s1">
                                    <h3 class="def_h2">{{__('web/def.Related_Category')}}</h3>
                                </div>

                                <div class="row shop_container shop_container_50">
                                    @foreach($Category->children as $SubCategory)
                                        <div class="col-lg-4 col-md-4 col-6 grid_item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">
                                                        <img src="{{getPhotoPath($SubCategory->photo,'categorie')}}" alt="product_img1">
                                                    </a>
                                                    <div class="product_action_box">
                                                        <ul class="list_none pr_action_btn">
                                                            <li><a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}" ><i class="icon-magnifier-add"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_info">
                                                    <h2 class="product_title"><a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}</a></h2>
                                                    <div class="pr_desc">
                                                        <p>
                                                            {{$SubCategory->g_des}}
                                                        </p>

                                                    </div>
                                                    <div class="list_product_action_box">
                                                        <a class="btn btn-danger btn-sm" href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">{{__('web/def.View_Details')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

{{--                                <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-loop="true" data-dots="false" data-nav="true" data-margin="10" data-responsive='{"0":{"items": "2"}, "481":{"items": "2"}, "768":{"items": "3"}, "992":{"items": "2"}, "1199":{"items": "3"}}'>--}}
{{--                                    @foreach( $Category->children as $SubCategory)--}}
{{--                                        <div class="item">--}}
{{--                                            <div class="product">--}}
{{--                                                <div class="product_img">--}}
{{--                                                    <a href="#">--}}
{{--                                                        <img src="{{getPhotoPath($SubCategory->photo,'categorie')}}" alt="product_img1">--}}
{{--                                                    </a>--}}
{{--                                                    <div class="product_action_box">--}}
{{--                                                        <ul class="list_none pr_action_btn">--}}
{{--                                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_info">--}}
{{--                                                    <h6 class="product_title"><a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}</a></h6>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}


{{--                                </div>--}}
                            </div>
                        </div>
                    @endif
                </div>
                @if($agent->isMobile() == false )
                    @include('web.web_product.category_view_sidebar')
                @endif
            </div>
        </div>
    </div>

    @if($Category->cat_product_count > 0)
        @include('web.web_product.category_view_product')
    @endif



@endsection


@section('AddScript')

@endsection

