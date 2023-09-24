@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$trees) }}
    </x-website.breadcrumb>
@endsection

@section('content')
    <div class="section CategoryViewPage pt-lg-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 set_border">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="product_title">{{$Category->name}}</h1>
                        </div>
                    </div>


                    @if($Category->web_shop_children_count > 0)
                        <div class="row mt-lg-3">
                            <div class="col-12">
                                <div class="row Shop_CategoryList">
                                    @foreach($Category->web_shop_children as $SubCategory)
                                        <div class="col-lg-4 col-md-4 col-6  Shop_CategoryI">
                                            <div class="product">
                                                <a href="{{route('Shop_CategoryView',$SubCategory->slug)}}">
                                                    <div class="product_img">
                                                        <img src="{{getPhotoPath($SubCategory->photo_thum_1,'categorie')}}" alt="product_img1">
                                                    </div>
                                                </a>
                                            </div>
                                            <h2 class="cat_name crop_text_1"><a href="{{route('Shop_CategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}
                                                    @if(count($SubCategory->recursive_product_shop) > 0 )
                                                       <span> ({{ count($SubCategory->recursive_product_shop) }}) </span>
                                                    @endif</a></h2>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif



                    @if($Category->category_with_product_shop_count > 0)
                        @if($Category->children_shop_count > 0 )
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="def_h2">{{__('web/def.products')}}</h2>
                                    <hr>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-12">
                                @if($agent->isMobile())
                                    <div class="row align-items-center mb-4 pb-1">
                                        <div class="col-12">
                                            <div class="product_header">
                                                <div class="product_header_right">
                                                    <div class="products_view">
                                                        <a href="javascript:void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                                        <a href="javascript:void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif


                                <div class="row shop_container shop_container_50  mt-lg-3">
                                    @foreach($Category->category_with_product_shop as $Product )
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <x-shop.block-product :product="$Product" :category="$Product->product_with_category->first()"/>
{{--                                            <x-shop.block-list-pro-from-cat  :product="$Product" :category="$Category"  />--}}
                                        </div>
                                    @endforeach
                                </div>


                            </div>
                        </div>
                    @endif

                </div>
                @if($agent->isMobile() == false )
                   @include('shop.product.category_view_sidebar')
                @endif
            </div>
        </div>
    </div>





@endsection


@section('AddScript')

@endsection

