@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$FaqCategory) }}
    </x-website.breadcrumb>
@endsection


@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faqcat_list pb-5">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row mb-2">
                                    <div class="col-lg-12">
                                        <div class="icon_box icon_box_style2">
                                            <div class="icon faq_icon">
                                                <img src="{!! getPhotoPath($FaqCategory->photo_thum_1,"faq-icon") !!}">
                                            </div>
                                            <div class="icon_box_content">
                                                <h1 class="def_h1"> {{ $FaqCategory->name }}</h1>
                                                <p>{{ $FaqCategory->g_des }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row accordion accordion_style1" id="accordion"  >
                                    <div class="col-lg-12">
                                        @foreach($FaqCategory->faqs as $Faq )
                                            <x-website.faq-slider :title="$Faq->name" :prefix="$Faq->id">
                                                {{$Faq->des}}
                                            </x-website.faq-slider>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section mt-3 mt-lg-3 pb-5">
        <x-website.block-faq-carousel :faq-categories="$FaqCategories" lable="{{__('web/def.read_more')}}" url="Shop_FaqCatView" />
    </div>
@endsection

