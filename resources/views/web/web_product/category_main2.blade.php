@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb :meta="$PageMeta" :catid="$SinglePageView['CatId']" />
@endsection
@section('content')

    <div class="section ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="product_header_left">
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="order">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                        <a href="javascript:void(0);" class="shorting_icon list "><i class="ti-layout-list-thumb"></i></a>
                                    </div>
                                    <div class="custom_select">
                                        <select class="form-control form-control-sm">
                                            <option value="">Showing</option>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row shop_container loadmore list_xxx" data-item="8" data-item-show="4" data-finish-message="No More Item to Show" data-btn="Load More">

                        @foreach($MenuCategory as $MainCategory)

                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product" >
                                <div class="product_img">
                                    <a href="#">
                                        <img src="{{getPhotoPath($MainCategory->photo,'categorie')}}" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li><a href="#" class="popup-ajaxXX"><i class="icon-magnifier-add"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h2 class="product_title Category_title"><a href="#">{{$MainCategory->name}}</a></h2>

                                    <div class="Category_des">
                                        <p class="crop_text_4">{{$MainCategory->g_des}}</p>
                                    </div>


                                    <div class=" pr_desc">

                                        @if($MainCategory->children_count > 0 )
                                            <div class="row list_sub_children">


                                                    @foreach($MainCategory->children  as $SubCategory)
                                                        @if($loop->index < 3)
                                                        <div class="list_i">
                                                            <h3>{{$SubCategory->name}} {{count($SubCategory->CatProduct)}}</h3>


                                                                    @if(count($SubCategory->CatProduct) > 0 )
                                                                        @foreach($SubCategory->CatProduct as $Product)

                                                                            <li class="Product_name"><a class="" href="#">{{$Product->name}}</a></li>
                                                                        @endforeach
                                                                    @endif


                                                        </div>
                                                        @endif
                                                    @endforeach

                                            </div>

                                        @endif
                                    </div>




                                </div>
                            </div>
                            <div class="mb-4 readmore_cat text-left">
                                 <a href="#" >{{__('web/def.View_Details')}}</a>
                            </div>

                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>




{{--    <div class="section pb_20 small_pt">--}}

{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="faqcat_list pb-5">--}}
{{--                        <div class="row">--}}
{{--                            @foreach($MenuCategory as $MainCategory)--}}
{{--                                <div class="col-md-4 mb-lg-3">--}}
{{--                                    <div class="icon_box icon_box_style2">--}}

{{--                                        <div class="icon faq_icon">--}}
{{--                                            <a href="{{route('Page_FaqCatView',$MainCategory->slug)}}">--}}
{{--                                                <img src="{!! getPhotoPath($MainCategory->photo_thum_1,"faq-icon") !!}">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}

{{--                                        <div class="icon_box_content">--}}
{{--                                            <h2><a href="{{route('Page_FaqCatView',$MainCategory->slug)}}">{{ $MainCategory->name }}</a>--}}
{{--                                                <span class="cat_count">({{$MainCategory->faq_to_cat_count}})</span></h2>--}}
{{--                                            <p>{{ $MainCategory->g_des }}</p>--}}
{{--                                            <span class="readmore">--}}
{{--                                                <a href="{{route('Page_FaqCatView',$MainCategory->slug)}}">{{__('web/def.read_more')}}</a>--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            @endforeach--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col-12 mt-0 mt-md-4">--}}
{{--                                        <ul class="pagination pagination_style1 justify-content-center">--}}
{{--                                            {{ $MenuCategory->links() }}--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}


{{--    </div>--}}

@endsection

