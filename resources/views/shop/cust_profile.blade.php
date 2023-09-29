@extends('shop.layouts.app')

@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection



@section('content')


   <section class="div_data">
       <div class="container-fluid">
           <div class="row ">
               <div class="col-lg-12 py-5">
                   <div class="login_register_wrap section">
                       <div class="container">
                           <div class="row justify-content-center">
                              Profile



                               <a class="btn btn-default btn-flat float-right" href="{{ route('Customer_logout') }}"
                                  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>
                               <form id="logout-form" action="{{ route('Customer_logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>


                               {{ Auth::guard('customer')->user()->name }}

                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </section>



@endsection

