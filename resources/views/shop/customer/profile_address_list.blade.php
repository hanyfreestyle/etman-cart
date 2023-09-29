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
                                    <i class="fas fa-map-signs"></i> {{__('web/customers.Profile_Address')}}
                                </h3>
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="row">
                                        @csrf



                                        <div class="col-md-12 card_but">
                                            <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">
                                                {{__('web/def.but_update')}}
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

