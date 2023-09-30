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
                <div class="col-lg-3 col-md-4">
                    @include('shop.customer.profile_menu')
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content dashboard_content">
                        <div class="card profileCard">
                            <div class="card-header border_top">
                                <h3>
                                    <i class="fas fa-shopping-cart"></i> {{__('web/customers.Profile_OrdersList')}}
                                </h3>
                            </div>
                        </div>


                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive shop_cart_table">
                                        <table class="table">
                                            <thead>
                                            <tr>

                                                <th class="product-price">{{__('web/orders.title_num')}}</th>
                                                <th class="product-quantity">{{__('web/orders.title_date')}}</th>
                                                <th class="product-subtotal">{{__('web/orders.title_status')}}</th>
                                                <th class="product-subtotal">{{__('web/orders.title_total')}}</th>
                                                <th class="product-remove">{{__('web/orders.title_view')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>



                                                <td class="product-price" data-title="{{__('web/orders.title_num')}}">$45.00</td>
                                                <td class="product-price" data-title="{{__('web/orders.title_date')}}">$45.00</td>
                                                <td class="product-subtotal" data-title="{{__('web/orders.title_status')}}">$90.00</td>
                                                <td class="product-subtotal" data-title="{{__('web/orders.title_total')}}">$90.00</td>
                                                <td class="product-remove" data-title="{{__('web/orders.title_view')}}"><a href="#"><i class="fas fa-search"></i></a></td>
                                            </tr>


                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

