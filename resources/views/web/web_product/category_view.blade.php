@extends('web.layouts.app')
@section('breadcrumb')
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <span>{{$Category->name}}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$Category) }}
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
                                    <h4 class="product_title"><a href="#">{{$Category->name}}</a></h4>

                                    <div class="pr_desc">
                                        <p>{{$Category->des}}</p>
                                    </div>


                                    {{--                                    <div class="product_sort_info">--}}
                                    {{--                                        <ul>--}}
                                    {{--                                            <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li>--}}
                                    {{--                                            <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>--}}
                                    {{--                                            <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </div>--}}


                                </div>
                                {{--                                <ul class="product-meta">--}}
                                {{--                                    <li>SKU: <a href="#">BE45VGRT</a></li>--}}
                                {{--                                    <li>Category: <a href="#">Clothing</a></li>--}}
                                {{--                                    <li>Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">printed</a> </li>--}}
                                {{--                                </ul>--}}

                                {{--                                <div class="product_share">--}}
                                {{--                                    <span>Share:</span>--}}
                                {{--                                    <ul class="social_icons">--}}
                                {{--                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>--}}
                                {{--                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>--}}
                                {{--                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>--}}
                                {{--                                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>--}}
                                {{--                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </div>--}}
                            </div>

                        </div>
                        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                            <div class="product-image">
                                <div class="product_img_boxX">
                                    <img id="product_img" src='{{getPhotoPath($Category->photo,'categorie')}}' data-zoom-image="assets/images/product_zoom_img1.jpg" alt="product_img1" />

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">

                            <div class="small_divider clearfix"></div>
                        </div>
                    </div>

                    @if($Category->table_data_count > 0)
                        <div class="row">
                            <div class="col-12">
                                <h3> {{__('web/def.Additional_info')}}</h3>
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Capacity</td>
                                        <td>5 Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Black, Brown, Red,</td>
                                    </tr>
                                    <tr>
                                        <td>Water Resistant</td>
                                        <td>Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Artificial Leather</td>
                                    </tr>
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
                                <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-loop="true" data-dots="false" data-nav="true" data-margin="10" data-responsive='{"0":{"items": "2"}, "481":{"items": "2"}, "768":{"items": "3"}, "992":{"items": "2"}, "1199":{"items": "3"}}'>
                                    @foreach( $Category->children as $SubCategory)
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a href="#">
                                                        <img src="{{getPhotoPath($SubCategory->photo,'categorie')}}" alt="product_img1">
                                                    </a>
                                                    <div class="product_action_box">
                                                        <ul class="list_none pr_action_btn">
                                                            <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title"><a href="{{route('Page_WebCategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
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
        <div class="section">
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
                                            <a href="javascript:void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row shop_container loadmore" data-item="8" data-item-show="4" data-finish-message="No More Item to Show" data-btn="Load More">

                            @foreach($Category->CatProduct as $Product )
                                <div class="col-lg-3 col-md-4 col-6 grid_item">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img src="{{getPhotoPath($Product->photo,'categorie')}}" alt="product_img1">
                                            </a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title"><a href="shop-product-detail.html">{{$Product->name}}</a></h6>
                                            <div class="product_price">
                                                <span class="price">$45.00</span>
                                                <del>$55.25</del>
                                                <div class="on_sale">
                                                    <span>35% Off</span>
                                                </div>
                                            </div>
                                            <div class="pr_desc">
                                                <p> {{$Product->g_des}}</p>
                                            </div>
                                            <div class="pr_switch_wrap">
                                                <div class="product_color_switch">
                                                    <span class="active" data-color="#87554B"></span>
                                                    <span data-color="#333333"></span>
                                                    <span data-color="#DA323F"></span>
                                                </div>
                                            </div>
                                            <div class="list_product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                    <li><a href="shop-compare.html" class="popup-ajax"><i class="icon-shuffle"></i></a></li>
                                                    <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                    <li><a href="#"><i class="icon-heart"></i></a></li>
                                                </ul>
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

    @endif



@endsection


@section('AddScript')
    <script src="{{ defWebAssets('js/isotope-loadmore.js') }}"></script>
@endsection

