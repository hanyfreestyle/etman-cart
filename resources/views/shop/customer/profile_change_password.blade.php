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
                                    <i class="fas fa-key"></i> {{__('web/customers.Profile_ChangePassword')}}
                                </h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('Profile_ChangePasswordUpdate')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <x-mass.confirm-massage/>
                                    </div>

                                    {{Session('hany')}}

                                    <div class="row">

                                        <div class="form-group mb-3">
                                            <x-form-input label="{{__('web/customers.Profile_ChangePassword_fr_old')}}"
                                                          name="old_password"
                                                          :requiredSpan="true"
                                                          colrow="col-lg-12"
                                                          type="password"
                                                          value=""
                                                          :password-edit="false"
                                                          inputclass="dir_en"/>
                                        </div>

                                        <div class="form-group mb-3">
                                            <x-form-input label="{{__('web/customers.Profile_ChangePassword_fr_new')}}"
                                                          name="password"
                                                          :requiredSpan="true"
                                                          colrow="col-lg-12"
                                                          type="password"
                                                          value=""
                                                          :password-edit="false"
                                                          inputclass="dir_en"/>
                                        </div>

                                        <div class="form-group mb-3">
                                            <x-form-input label="{{__('web/customers.reg_form_confirm_pass')}}"
                                                          name="password_confirmation"
                                                          :requiredSpan="true"
                                                          colrow="col-lg-12"
                                                          type="password"
                                                          value=""
                                                          :password-edit="false"
                                                          inputclass="dir_en"/>

                                        </div>
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

