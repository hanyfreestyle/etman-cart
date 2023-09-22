@extends('shop.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb >
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>
@endsection
@section('content')


    <div class="section faqcat_list pt-0 pt-lg-3">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="def_h1 text-center" >{{$PageMeta->body_h1}}</h1>
                    <p class="text-center def_gdes">{{$PageMeta->g_des}}</p>
                </div>
            </div>


            <div class="row mt-3 mt-lg-4">
                <div class="col-12">
                    <div class=" pb-5">
                        <div class="row">
                            @foreach($FaqCategories as $Category )
                                <div class="col-md-4 mb-lg-3">
                                    <div class="icon_box icon_box_style2">

                                        <div class="icon faq_icon">
                                            <a href="{{route('Shop_FaqCatView',$Category->slug)}}">
                                                <img src="{!! getPhotoPath($Category->photo_thum_1,"faq-icon") !!}">
                                            </a>
                                        </div>

                                        <div class="icon_box_content">
                                            <h2><a href="{{route('Shop_FaqCatView',$Category->slug)}}">{{ $Category->name }}</a>
                                                <span class="cat_count">({{$Category->faqs_count}})</span></h2>
                                            <p>{{ $Category->g_des }}</p>
                                            <span class="readmore">
                                                <a href="{{route('Shop_FaqCatView',$Category->slug)}}">{{__('web/def.read_more')}}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                            <div class="row">
                                <div class="col-12 mt-0 mt-md-4">
                                    <ul class="pagination pagination_style1 justify-content-center">
                                        {{ $FaqCategories->links() }}
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

