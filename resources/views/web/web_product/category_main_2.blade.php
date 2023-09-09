@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb :meta="$PageMeta" :catid="$SinglePageView['breadcrumb']" />
@endsection
@section('content')
    <div class="section MainCategoryList pt-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                {{--                                <div class="product_header_left">--}}
                                {{--                                    <div class="custom_select">--}}
                                {{--                                        <select class="form-control form-control-sm">--}}
                                {{--                                            <option value="order">Default sorting</option>--}}
                                {{--                                            <option value="popularity">Sort by popularity</option>--}}
                                {{--                                            <option value="date">Sort by newness</option>--}}
                                {{--                                            <option value="price">Sort by price: low to high</option>--}}
                                {{--                                            <option value="price-desc">Sort by price: high to low</option>--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                        <a href="javascript:void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row shop_container loadmore" data-item="8" data-item-show="4" data-finish-message="No More Item to Show" data-btn="{{__('web/def.Load_More')}}">
                        @foreach($MenuCategory as $MainCategory)
                            <div class="col-lg-3 col-md-4 col-6 grid_item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="{{route('Page_WebCategoryView',$MainCategory->slug)}}">
                                            <img src="{{getPhotoPath($MainCategory->photo,'categorie')}}" alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="{{route('Page_WebCategoryView',$MainCategory->slug)}}" ><i class="icon-magnifier-add"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h2 class="product_title"><a href="{{route('Page_WebCategoryView',$MainCategory->slug)}}">{{$MainCategory->name}}</a></h2>
                                        <div class="pr_desc">
                                            <p>
                                                {{$MainCategory->g_des}}
                                            </p>
                                            @if($MainCategory->children_count > 0  and $agent->isMobile() == false )

                                                <div class="row list_sub_children">


                                                    @foreach($MainCategory->children  as $SubCategory)
                                                        @if($loop->index < 3)
                                                            <div class="list_i">
                                                                <h3><a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}</a></h3>
                                                                @if(count($SubCategory->CatProduct) > 0 )
                                                                    @foreach($SubCategory->CatProduct as $Product)
                                                                        @if($loop->index < 3)
                                                                            <li class="product_name_li"><a class="" href="#">{{$Product->name}}</a></li>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="list_product_action_box">
                                            <a class="btn btn-danger btn-sm" href="{{route('Page_WebCategoryView',$MainCategory->slug)}}">{{__('web/def.View_Details')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('AddScript')
    <script src="{{ defWebAssets('js/isotope-loadmore.js') }}"></script>
@endsection

