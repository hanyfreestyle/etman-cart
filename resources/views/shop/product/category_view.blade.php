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

                    @if($Category->id == '23')

                        <div class="row shop_container shop_container_50  mt-lg-3">
                            @foreach($Category->recursiveProduct as $Product )
                                <div class="col-lg-4 col-md-4 col-6">
                                    <x-shop.block-list-pro-from-cat  :product="$Product" />
                                </div>
                            @endforeach
                        </div>

                    @else
                        @if($Category->children_count > 0)
                            <div class="row MainCategoryList mt-lg-3">
                                <div class="col-12">
                                    <div class="row shop_container shop_container_50">
                                        @foreach($Category->children as $SubCategory)
                                            <div class="col-lg-4 col-md-4 col-6 grid_item">
                                                <div class="product">
                                                    <div class="product_img">
                                                        <a href="{{route('Shop_CategoryView',$SubCategory->slug)}}">
                                                            <img src="{{getPhotoPath($SubCategory->photo,'categorie')}}" alt="product_img1">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li><a href="{{route('Shop_CategoryView',$SubCategory->slug)}}" ><i class="icon-magnifier-add"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h3 class="product_title"><a href="{{route('Shop_CategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif


                    @if($Category->cat_product_count > 0)
                        @if($Category->children_count > 0 )
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
                                    @foreach($Category->CatProduct as $Product )
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <x-shop.block-list-pro-from-cat  :product="$Product" />
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

