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
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>

                                                <td class="product-name" data-title="Product"><a href="#">Blue Dress For Woman</a></td>
                                                <td class="product-price" data-title="Price">$45.00</td>
                                                <td class="product-price" data-title="Price">$45.00</td>

                                                <td class="product-subtotal" data-title="Total">$90.00</td>
                                                <td class="product-remove" data-title="Remove"><a href="#"><i class="fas fa-search"></i></a></td>
                                            </tr>


                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#1234</td>
                                        <td>March 15, 2020</td>
                                        <td>Processing</td>
                                        <td>$78.00 for 1 item</td>
                                        <td><a href="#" class="btn btn-fill-out btn-sm">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>#2366</td>
                                        <td>June 20, 2020</td>
                                        <td>Completed</td>
                                        <td>$81.00 for 1 item</td>
                                        <td><a href="#" class="btn btn-fill-out btn-sm">View</a></td>
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
@endsection

