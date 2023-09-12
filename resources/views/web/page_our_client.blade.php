@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection

@section('AddStyle')
    <style>
        .web_site_navbar_nav i{
            display: none!important;
        }
    </style>
@endsection


@section('content')

    <div class="section">
        <div class="container OurClientList">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="def_h1 text-center" >{{$PageMeta->body_h1}}</h1>
                    <p class="def_gdes text-center">{{$PageMeta->g_des}}</p>
                </div>
            </div>


            <div class="row ">
                @foreach($OurClients as $Client)
                    <div class="col-lg-4 text-center">
                        <div class="blog_post blog_style2 rounded box_shadow1">
                            <div class="Client_img">
                                    <img src="{{ getPhotoPath($Client->photo,'light-logo') }}" alt="{{$Client->name}}">
                            </div>
                        </div>
                        <h2 class="def_h3 crop_text_1 def_color">{{$Client->name}}</h2>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12 mt-2 mt-md-4">
                    <ul class="pagination pagination_style1 justify-content-center">
                        {{ $OurClients->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

