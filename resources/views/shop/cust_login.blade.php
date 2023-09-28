@extends('shop.layouts.app')

@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')


@section('content')

   <x-html-section>



   </x-html-section>


   <section class="div_data">
       <div class="container-fluid">
           <div class="row ">
               <div class="col-lg-12 py-5">
                   <div class="login_register_wrap section">
                       <div class="container">
                           <div class="row justify-content-center">
                               <div class="col-xl-6 col-md-10">
                                   <div class="login_wrap">
                                       <div class="padding_eight_all bg-white">

                                           <form method="post" action="{{route('Customer_loginCheck')}}">
                                               @csrf

                                               <div class="form-group mb-3">
                                                   <x-form-input label="{{__('admin/config/roles.users_fr_email')}}" name="email" :requiredSpan="true" colrow="col-lg-12"
                                                                 value="hany.freestyle4u@gmail.com" inputclass="dir_en"/>
                                               </div>

                                               <div class="form-group mb-3">
                                                   <x-form-input label="{{__('admin/form.password')}}" name="password" :requiredSpan="true" colrow="col-lg-12"
                                                                 value="hany.freestyle4u@gmail.com"   inputclass="dir_en"/>
                                               </div>
{{--                                               {{ old('user_password') }}--}}
                                               <div class="form-group mb-3">
                                                   <button type="submit" class="btn btn-fill-out btn-block" name="login">
                                                       {{ __('web/customers.login_but') }}
                                                   </button>
                                               </div>
                                           </form>

                                           <div class="form-note text-center"> <a href="{{route('Customer_Register')}}">{{ __('web/customers.login_sign_up_now') }}</a>
                                               {{__('web/customers.login_have_no')}}
                                              </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </section>



@endsection

