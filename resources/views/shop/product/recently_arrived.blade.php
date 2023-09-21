@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection

@section('content')
    <div class="section CategoryViewPage pt-lg-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 set_border">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="product_title">{{ __('web/menu.recently_arrived') }}</h1>
                        </div>
                    </div>

                    <div class="row shop_container shop_container_50  mt-lg-3">
                        @foreach($Recently as $Product )
                            <div class="col-lg-4 col-md-4 col-6">
                                <x-shop.block-list-pro-from-cat  :product="$Product" :category="$Category" />
                            </div>
                        @endforeach
                    </div>
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

