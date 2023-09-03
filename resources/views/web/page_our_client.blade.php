@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb :meta="$PageMeta" :catid="$SinglePageView['CatId']" />
@endsection
@section('content')

    <div class="section">
        <div class="container">
            <div class="row grid_container masonry">
                <div class="col-lg-4 col-md-6 grid-sizer"></div>

                @foreach($OurClients as $Client)
                    <div class="col-lg-4 col-md-6 grid_item">
                        <div class="blog_post blog_style2 box_shadow1">
                            <div class="blog_img">
                                <a href="#">
                                    <img src="{{ getPhotoPath($Client->photo) }}" alt="blog_small_img7">
                                </a>
                            </div>

                        </div>
                        <h2 class="Client_title"><a href="#">{{$Client->name}}</a></h2>
                    </div>
                @endforeach


            </div>
            <div class="row">
                <div class="col-12 mt-2 mt-md-4">
                    <ul class="pagination pagination_style1 justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="linearicons-arrow-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="linearicons-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection

