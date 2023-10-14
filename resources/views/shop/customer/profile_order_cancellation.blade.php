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
                <div class="col-lg-3 mb-5">
                    @include('shop.customer.profile_menu')
                </div>
                <div class="col-lg-9 ">
                    <div class="tab-content dashboard_content">
                        <div class="card profileCard">
                            <div class="card-header border_top">
                                <h3>
                                    <i class="fas fa-window-close"></i> {{__('web/customers.Profile_cancellation_but')}}
                                </h3>
                            </div>
                        </div>


                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-12">
                                    {{__('web/customers.Profile_cancellation_mass')}}  #{{$order->id +1000}}
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <form method="post" action="{{route('Profile_CancellationConfirm',$order->uuid)}}">
                                        @csrf
                                        <x-form-textarea
                                            label="{{__('web/customers.Profile_cancellation_notes')}}"
                                            name="notes"
                                            value="{{old('notes')}}"
                                        />
                                        <div class="form-group mt-3">
                                            <button class="btn btn-fill-out btn-block" type="submit">
                                                {{ __('web/customers.Profile_cancellation_h1') }}
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

