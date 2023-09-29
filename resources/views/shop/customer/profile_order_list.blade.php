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
    </div>
@endsection

