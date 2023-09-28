@extends('shop.layouts.app')

@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')


@section('content')


   <div class="login_register_wrap section">
       <div class="container py-5">
           <div class="row justify-content-center">
               <div class="col-xl-6 col-md-10">
                   <div class="login_wrap">
                       <div class="padding_eight_all bg-white">
                           <div class="heading_s1">
                               <h3>Create an Account</h3>
                           </div>
                           <form method="post" action="{{route('Customer_Create')}}">
                               @csrf
                               <div class="form-group mb-3">
                                   <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                               </div>
                               <div class="form-group mb-3">
                                   <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                               </div>
                               <div class="form-group mb-3">
                                   <input class="form-control" type="password" name="password" placeholder="Password">
                               </div>
{{--                               <div class="form-group mb-3">--}}
{{--                                   <input class="form-control" required="" type="password" name="password" placeholder="Confirm Password">--}}
{{--                               </div>--}}
                               <div class="login_footer form-group mb-3">
                                   <div class="chek-form">
                                       <div class="custome-checkbox">
                                           <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                           <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group mb-3">
                                   <button type="submit" class="btn btn-fill-out btn-block" name="register">Register</button>
                               </div>
                           </form>


                           <div class="form-note text-center">Already have an account?
                               <a href="{{ route('Customer_login') }}">Log in</a></div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>




@endsection

