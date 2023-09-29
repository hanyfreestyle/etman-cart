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
                                    <i class="fas fa-id-card"></i>
                                    {{__('web/customers.Profile_AccountDetails')}}
                                </h3>
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="row">
                                        @csrf

                                        <div class="form-group col-md-5 mb-3">
                                            <x-form-input
                                                label="{{__('admin/config/roles.users_fr_email')}}"
                                                name="email"
                                                :disabled="true"
                                                :requiredSpan="true"
                                                colrow="col-lg-12"
                                                value="{{old('email',$UserProfile->email)}}"
                                                inputclass="dir_en"/>
                                        </div>


                                        <div class="form-group col-md-7 mb-3">
                                            <x-form-input
                                                label="{{ __('web/customers.reg_form_name') }}"
                                                name="name"
                                                :requiredSpan="true"
                                                colrow="col-lg-12"
                                                value="{{old('name',$UserProfile->name)}}"
                                                inputclass="dir_en"/>
                                        </div>


                                        <div class="form-group col-md-7 mb-3">
                                            <x-form-input
                                                label="{{ __('web/customers.Profile_form_company_name') }}"
                                                name="company_name"
                                                :requiredSpan="false"
                                                colrow="col-lg-12"
                                                value="{{old('company_name',$UserProfile->company_name)}}"
                                                inputclass="dir_en"/>
                                        </div>

                                        <div class="form-group col-md-5 mb-3">
                                            <label class="def_form_label col-form-label font-weight-light">
                                                {{ __('web/customers.Profile_form_city') }}
                                            </label>
                                            <div class="custom_select">
                                                <select class="form-control">
                                                    <option value="">{{__('web/customers.Profile_form_city_sleoption')}}</option>
                                                    <option value="ZW">الاسكندرية</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 mb-3">
                                                <x-form-input
                                                    label="{{ __('web/customers.reg_form_phone') }}"
                                                    name="phone"
                                                    :requiredSpan="true"
                                                    colrow="col-lg-12"
                                                    value="{{old('phone',$UserProfile->phone)}}"
                                                    inputclass="dir_en"/>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group  col-md-6 mb-3">
                                                <x-form-input
                                                    label="{{ __('web/customers.Profile_whatsapp') }}"
                                                    name="whatsapp"
                                                    :requiredSpan="false"
                                                    colrow="col-lg-12"
                                                    value="{{old('whatsapp',$UserProfile->whatsapp)}}"
                                                    inputclass="dir_en"/>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group  col-md-6 mb-3">
                                                <x-form-input
                                                    label="{{__('web/customers.land_phone') }}"
                                                    name="land_phone"
                                                    :requiredSpan="false"
                                                    colrow="col-lg-12"
                                                    value="{{old('land_phone',$UserProfile->land_phone)}}"
                                                    inputclass="dir_en"/>
                                            </div>
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

