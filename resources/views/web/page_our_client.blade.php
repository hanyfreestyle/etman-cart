@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb :meta="$PageMeta" :catid="$SinglePageView['CatId']" />
@endsection
@section('content')

    <div class="section">
        <div class="container OurClientList">
            <div class="row">
                @foreach($OurClients as $Client)
                    <div class="col-lg-4 text-center">
                        <div class="blog_post blog_style2 rounded box_shadow1">
                            <div class="Client_img">
                                    <img src="{{ getPhotoPath($Client->photo,'light-logo') }}" alt="{{$Client->name}}">
                            </div>
                        </div>
                        <h2 class="Client_title"><a href="#">{{$Client->name}}</a></h2>
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

