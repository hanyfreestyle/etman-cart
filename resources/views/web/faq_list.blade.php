@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb :meta="$PageMeta" :catid="$SinglePageView['CatId']" />
@endsection
@section('content')






    <div class="section pb_20 small_pt">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faqcat_list pb-5">
                        <div class="row">
                            @foreach($FaqCategories as $Category )
                                <div class="col-md-4">
                                    <div class="icon_box icon_box_style2">
                                        <div class="icon faq_icon">
{{--                                            <i class="flaticon-shipped"></i>--}}
                                            <img src="{!! getPhotoPath($Category->photo_thum_1,"faq-icon") !!}">
                                        </div>
                                        <div class="icon_box_content">
                                            <h2> {{ $Category->name }}</h2>
                                            <p>{{ $Category->g_des }}</p>
                                            <span class="readmore">
                                                <a href="">{{__('web/def.read_more')}}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection

