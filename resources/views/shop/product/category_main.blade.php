@extends('shop.layouts.app')
@section('breadcrumb')

    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')
    <div class="section MainCategoryList">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="def_h1 text-center" >{{$PageMeta->body_h1}}</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-4 pb-1">
                        <div class="col-12">
                            <div class="product_header">
                                <div class="product_header_right">
                                    <div class="products_view">
                                        <a href="javascript:void(0);" class="shorting_icon shorting_icon_new grid active"><i class="ti-view-grid"></i></a>
                                        <a href="javascript:void(0);" class="shorting_icon shorting_icon_new list"><i class="ti-layout-list-thumb"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row shop_container shop_container_50">
                        @foreach($MainCategoryProduct as $MainCategory)
                            <div class="col-lg-3 col-md-4 col-6 grid_item">

                                <div class="product">

                                    <div class="product_img">
                                        <a href="{{route('Shop_CategoryView',$MainCategory->slug)}}">
                                            <img src="{{getPhotoPath($MainCategory->photo,'categorie')}}" alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="{{route('Shop_CategoryView',$MainCategory->slug)}}" ><i class="icon-magnifier-add"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_info">
                                        <h2 class="product_title"><a href="{{route('Shop_CategoryView',$MainCategory->slug)}}">{{$MainCategory->name}} <span class="">({{count($MainCategory->recursiveProduct) }})</span> </a></h2>
                                        <div class="pr_desc">
                                            <p>
                                                {{$MainCategory->g_des}}
                                            </p>
                                            @if($MainCategory->children_count > 0  and $agent->isMobile() == false )

                                                <div class="row list_sub_children">


                                                    @foreach($MainCategory->children  as $SubCategory)
                                                        @if($loop->index < 3)
                                                            <div class="list_i">
                                                                <h3 class="crop_text_1" ><a href="{{route('Shop_CategoryView',$SubCategory->slug)}}">{{$SubCategory->name}}</a></h3>
                                                                @if(count($SubCategory->CatProduct) > 0 )
                                                                    @foreach($SubCategory->CatProduct as $Product)
                                                                        @if($loop->index < 3)
                                                                            <li class="product_name_li crop_text_1"><a href="{{route('Page_WebProductView',$Product->slug)}}">{{$Product->name}}</a></li>
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
                                            <a class="btn btn-danger btn-sm" href="{{route('Shop_CategoryView',$MainCategory->slug)}}">{{__('web/def.View_Details')}}</a>
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

@endsection

