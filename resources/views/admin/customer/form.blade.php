@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>


{{--    <x-html-section>--}}
{{--        @if($pageData['ViewType'] == 'Edit')--}}
{{--            <div class="row mb-3">--}}
{{--                <div class="col-9">--}}
{{--                    <h1 class="def_h1">{{ $Category->name }}</h1>--}}
{{--                </div>--}}
{{--                <div class="col-3 text-left">--}}
{{--                    <x-action-button url="{{route($PrefixRoute.'.Table_list',$Category->id)}}"  bg="p"  print-lable="{{__('admin/def.table_info')}}"  icon="fas fa-info-circle"  />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </x-html-section>--}}

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />

            <form  class="mainForm" action="{{route($PrefixRoute.'.update',intval($customer->id))}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-7">

                        <div class="row">
                            <x-form-input label="{{__('admin/customer.name') }}" name="name" :requiredSpan="true"
                                          colrow="col-lg-6" value="{{old('name')}}"   inputclass="dir_ar"/>

                            <x-form-input label="{{__('admin/customer.name') }}" name="name" :requiredSpan="true"
                                          colrow="col-lg-6" value="{{old('name')}}"   inputclass="dir_ar"/>

                        </div>







                        <div class="form-group mb-3">

                        </div>
                        <div class=" row form-group mb-3">
                            <x-form-input label="{{__('admin/config/roles.users_fr_email')}}" name="email" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('email')}}" inputclass="dir_en"/>

                            <x-form-input label="{{__('web/customers.reg_form_phone')}}" name="phone" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('phone')}}" inputclass="dir_en"/>
                        </div>

                        <div class="row form-group mb-3">
                            <x-form-input label="{{__('admin/form.password')}}" name="password" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('password')}}"  type="password"  :password-edit="false" inputclass="dir_en"/>

                            <x-form-input label="{{__('web/customers.reg_form_confirm_pass')}}" name="password_confirmation" :requiredSpan="true" colrow="col-lg-6"
                                          value="{{old('password_confirmation')}}"  type="password"  :password-edit="false" inputclass="dir_en"/>
                        </div>



                    </div>

                    <div class="col-lg-5">

                    </div>
                </div>


                <div class="row">
                    <x-form-select-arr
                        name="city_id"
                        label="{{__('admin/customer.city')}}"
                        :sendvalue="old('city_id',$customer->city_id)"
                        :required-span="true"
                        colrow="col-lg-6 "
                        :send-arr="$cities"
                    />
               </div>




                <hr class="pb-3">


                <div class="row">
                    <x-form-check-active :row="$customer" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                </div>

                <hr>


                <div class="container-fluid">
                    <x-form-submit-new  :page-data="$pageData" />
                </div>
            </form>
        </x-ui-card>

    </x-html-section>

@endsection


@push('JsCode')
    <x-slug-name-script :pagetype="$pageData['ViewType']" />
@endpush
