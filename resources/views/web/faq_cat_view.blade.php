@extends('web.layouts.app')
@section('breadcrumb')

    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>{{$FaqCategory->name}}</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    {{ Breadcrumbs::render('FaqCatView',$FaqCategory) }}
                </div>
            </div>
        </div>
    </div>

@endsection
@section('content')






    <div class="section  pb_20 small_pt pt-lg-2">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faqcat_list pb-5">
                        <div class="row">

                            <div class="col-lg-4">
                                {{--                                                @foreach($MenuCategory as $MainCategory)--}}
                                {{--                                                    <li>{{$MainCategory->name}} {{$MainCategory->children_count}}</li>--}}
                                {{--                                                    @if($MainCategory->children_count > 0 )--}}

                                {{--                                                        @foreach($MainCategory->children  as $SubCategory)--}}
                                {{--                                                            @if($loop->index < 2)--}}

                                {{--                                                                <li class="mr-5" style="margin-right: 20px!important;">{{$SubCategory->name}} {{count($SubCategory->CatProduct)}}</li>--}}

                                {{--                                                                @if(count($SubCategory->CatProduct) > 0 )--}}
                                {{--                                                                    @foreach($SubCategory->CatProduct as $Product)--}}
                                {{--                                                                        <li class="mr-5" style="margin-right: 20px!important;">{{$Product->name}}</li>--}}
                                {{--                                                                    @endforeach--}}

                                {{--                                                                @endif--}}
                                {{--                                                            @endif--}}
                                {{--                                                        @endforeach--}}

                                {{--                                                    @endif--}}

                                {{--                                                @endforeach--}}
                            </div>

                            <div class="col-lg-8">
                                <div class="row mb-2">
                                    <div class="col-lg-12">
                                        <div class="icon_box icon_box_style2">
                                            <div class="icon faq_icon">
                                                <img src="{!! getPhotoPath($FaqCategory->photo_thum_1,"faq-icon") !!}">
                                            </div>
                                            <div class="icon_box_content">
                                                <h2> {{ $FaqCategory->name }}</h2>
                                                <p>{{ $FaqCategory->g_des }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row accordion accordion_style1" id="accordion"  >
                                    <div class="col-lg-12">
                                        @foreach($FaqCategory->FaqToCat as $Faq )
                                            <x-website.faq-slider :title="$Faq->name" :prefix="$Faq->id">
                                                {{$Faq->des}}
                                            </x-website.faq-slider>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div class="section small_pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_tab_header">
                        <div class="heading_s2">
                            <h2>{{ __('web/def.read_more') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="faq_logo carousel_slider owl-carousel owl-theme nav_style3" data-dots="false" data-nav="true" data-margin="30" data-loop="true" data-autoplay="false" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "6"}}'>
                        @foreach($FaqCategories as $FaqCategory)
                            @if($FaqCategory->photo)
                                <div class="item">
                                    <a href="{{route('Page_FaqCatView',$FaqCategory->slug)}}">
                                        <div class="cl_logoX">
                                            <img src="{{getPhotoPath($FaqCategory->photo)}}" alt="cl_logo"/>
                                        </div>
                                        <h3>{{$FaqCategory->name}}</h3>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

