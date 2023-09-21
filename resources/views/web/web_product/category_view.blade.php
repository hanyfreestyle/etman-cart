@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$trees) }}
    </x-website.breadcrumb>
@endsection

@section('content')
    <div class="section CategoryViewPage pt-lg-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 set_borderX">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="product_title">{{$Category->name}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="pr_detail">
                                <div class="product_description">
                                    <div class="pro_des">
                                        <p class="addReadMore showlesscontent">{{$Category->des}}</p>
                                    </div>
                                </div>
                                @if($agent->isMobile() == false)
                                    <x-website.block-category-icon-info/>
                                    <x-website.block-share-icons />
                                @endif
                            </div>
                            @if($Category->table_data_count > 0)
                                <x-website.block-additional-table :row-data="$Category->table_data" />
                            @endif
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <div class="product-image mb-3">
                                <div class="img_box_c">
                                    <img  src='{{getPhotoPath($Category->photo,'categorie')}}' alt="product_img1" />
                                </div>
                            </div>

                            @if($agent->isMobile())
                                <x-website.block-category-icon-info/>
                                <x-website.block-share-icons />
                            @endif
                        </div>
                    </div>


                    @if($Category->website_children_count > 0)
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="divider"></div>
                            </div>
                        </div>
                        <div class="row MainCategoryList">
                            <div class="col-12">
                                <div class="heading_s1">
                                    <h2 class="subCategoryTitle">{{__('web/def.Related_Category')}}</h2>
                                </div>

                                <div class="row shop_container shop_container_50">
                                    @foreach($Category->website_children as $SubCategory)
                                        <div class="col-lg-3 col-md-3 col-6 grid_item">
                                            <div class="product">
                                                <a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">
                                                    <div class="product_img">
                                                        <img src="{{getPhotoPath($SubCategory->photo,'categorie')}}" alt="product_img1">
                                                    </div>
                                                </a>
                                                <div class="product_info">
                                                    <h3 class="product_title"><a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}</a></h3>
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
        </div>
    </div>



    @if($Category->category_with_product_website_count > 0)
        @include('web.web_product.category_view_product')
    @endif



@endsection


@section('AddScript')

@endsection

