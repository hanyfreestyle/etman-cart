@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb :meta="$PageMeta" :catid="$SinglePageView['CatId']" />
@endsection
@section('content')

    <div class="section AboutUs">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <div class="about_img scene mt-2 mb-4 mb-lg-0">
                        <img src="{{getDefPhotoPath($DefPhotoList,'about-1')}}" alt="about_img"/>
                    </div>

                </div>
                <div class="col-lg-7">
                    <p>{!! __('web/about.text_1') !!}</p>
                    <p>{!! __('web/about.text_2') !!}</p>
                    <p>{!! __('web/about.text_3') !!}</p>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">

                <div class="col-lg-7 order-lg-1 order-2">
                    <p>{!! __('web/about.text_4') !!}</p>
                    <p>{!! __('web/about.text_5') !!}</p>
                    <p>{!! __('web/about.text_6') !!}</p>
                </div>

                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="about_img scene mt-2 mb-4 mb-lg-0">
                        <img src="{{getDefPhotoPath($DefPhotoList,'about-2')}}" alt="about_img"/>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12 order-lg-1 order-2">
                    <p>{!! __('web/about.text_7') !!}</p>
                </div>
            </div>
        </div>

    </div>


    <x-website.block-our-client/>


@endsection

