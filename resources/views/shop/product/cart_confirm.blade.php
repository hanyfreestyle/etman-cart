@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')
    <div class="section ">
        <div class="container section_confirm py-4">


            <div class="row">

                <div class="col-md-6">
                    <div class="heading_s1">
                        <h4>{{__('web/cart.cart_veiw_Totals')}}</h4>
                    </div>
                    <div class="order_review">
                        <div class="table-responsive order_table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>{{__('web/cart.review_Product')}}</th>
                                    <th>{{__('web/cart.review_Total')}}</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($CartList as $ProductCart)
                                    <tr>
                                        <td>

                                            <span class="confirm_name">
                                                <span class="confirm_product_qty">x {{$ProductCart->qty}}</span>
                                                {{$ProductCart->model->name}}
                                            </span>

                                        </td>
                                        <td>{{ $ProductCart->price *  $ProductCart->qty }} {{__('web/cart.EGP')}}</td>
                                    </tr>

                                @endforeach
                                </tbody>
                                <tfoot>

                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.Subtotal')}}</td>
                                    <td class="cart_total_amount">{{$subtotal}} {{__('web/cart.EGP')}}</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.cart_view_Shipping')}}</td>
                                    <td class="cart_total_amount">{{__('web/cart.cart_view_Shipping_free')}}</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">{{__('web/cart.cart_veiw_Total')}}</td>
                                    <td class="cart_total_amount"><strong>  {{$subtotal}} {{__('web/cart.EGP')}}</strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="heading_s1">
                        <h4>{{__('web/cart.review_address')}}</h4>
                    </div>
                    <form method="post" action="{{route('Shop_CartOrderSave')}}">
                        @csrf


                        <div class="form-group mb-3">
                            <div class="custom_select">
                                <select class="form-control" name="address_id">
                                    <option value="">برجاء تحديد عنوان الشحن</option>
                                    @foreach($addresses as $address)
                                        <option value="{{$address->id}}" @if($address->is_default) selected @endif >{{$address->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea rows="5" class="form-control" placeholder="{{__('web/cart.review_notes')}}"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-fill-out btn-block" type="submit">
                                {{__('web/cart.review_confirm_but')}}
                            </button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

