@extends('admin.layouts.app')

@section('content')



        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"></h1>
                    </div><!-- /.col -->
                </div>
            </div>
        </div>



        <div class="content">
            <div class="container-fluid">
                <x-html-section>
                    <div class="row">
                        <div class="col-4">
                            <x-dashboard-orders
                                title="{{__('admin/order.status_1')}}"
                                :orders="$newOrder"
                                :url="route('ShopOrders.New.index')"
                            />
                        </div>

                        <div class="col-4">
                            <x-dashboard-orders
                                title="{{__('admin/order.status_2')}}"
                                :orders="$pendingOrder"
                                :url="route('ShopOrders.Pending.index')"
                            />
                        </div>

                        <div class="col-4">
                            <x-dashboard-orders
                                title="{{__('admin/order.status_3')}}"
                                :orders="$recipientOrder"
                                :url="route('ShopOrders.Recipient.index')"
                            />
                        </div>

                    </div>

                </x-html-section>



            </div>
        </div>


@endsection

@push('JsCode')
    <!-- OPTIONAL SCRIPTS -->
    <script src="{{defAdminAssets('plugins/chart.js/Chart.min.js')}}"></script>


    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{defAdminAssets('js/pages/dashboard3.js')}}"></script>
@endpush
