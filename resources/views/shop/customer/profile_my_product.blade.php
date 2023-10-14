@extends('shop.layouts.app')

@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection

@section('content')

    <div class="section pt-lg-5 ">
        <div class="container pb-lg-5">
            <div class="row">
                <div class="col-lg-3">
                    @if($agent->isDesktop() or $agent->isTablet())
                        @include('shop.customer.profile_menu')
                    @else
                        @include('shop.customer.profile_menu_mobile')
                    @endif
                </div>
                <div class="col-lg-9">
                    <div class="tab-content dashboard_content">
                        <div class="card profileCard">
                            <div class="card-header border_top">
                                <h3>
                                    <i class="fas fa-tasks"></i> {{__('web/customers.Profile_my_product')}}
                                </h3>
                            </div>
                        </div>
                        <div class="containerX mt-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row shop_container shop_container_50 {{$proViewList}} mt-3">
{{--                                        @foreach($FavProducts as  $x => $val )--}}
{{--                                            @foreach($val as $product)--}}
{{--                                                <div class="col-lg-4 col-md-4 col-6">--}}
{{--                                                    <x-shop.block-product :product="$product" :category="$product->product_with_category->first()"/>--}}
{{--                                                </div>--}}
{{--                                            @endforeach--}}
{{--                                        @endforeach--}}


                                        @foreach($FavProducts as $product )

                                                <div class="col-lg-4 col-md-4 col-6">
                                                    <x-shop.block-product :product="$product" :category="$product->product_with_category->first()"/>
                                                </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        {{ $FavProducts->links('web.layouts.inc.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

