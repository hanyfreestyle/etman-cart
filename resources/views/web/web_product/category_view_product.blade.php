<div class="section pt-0 pt-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="def_h2">المنتجات</h2>
                <hr>
            </div>
        </div>
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
                        <div class="col-lg-3 col-md-4 col-6 grid_item">
                            <div class="product">
                                <div class="product_img">
                                    <a href="#">
                                        <img src="{{getPhotoPath($Product->photo,'categorie')}}" alt="product_img1">
                                    </a>
                                    <div class="product_action_box">
                                        <ul class="list_none pr_action_btn">
                                            <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
{{--                                            <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>--}}
                                            <li><a href="{{route('Page_WebPro_Qview',$Product->slug)}}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><a href="{{route('Page_WebProductView',$Product->slug)}}">{{$Product->name}}</a></h6>

                                    <div class="pr_desc">
                                        <p> {{$Product->g_des}}</p>
                                    </div>

                                    <div class="list_product_action_box">
                                        <a class="btn btn-danger btn-sm" href="#">{{__('web/def.View_Details')}}</a>
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
