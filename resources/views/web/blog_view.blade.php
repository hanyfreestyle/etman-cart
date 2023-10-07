@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb'],$Post) }}
    </x-website.breadcrumb>
@endsection
@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single_post latest_news_view">
                        <h1 class="blog_title">{{$Post->name}}</h1>
                        <ul class="list_none blog_meta">
                            <li><i class="far fa-calendar"></i>{{  $Post->getFormatteDate() }}</li>
                        </ul>
                        <div class="blog_img">
                            <img  class="def_img_border" src="{{ getPhotoPath($Post->photo, 'blog','photo_thum_1') }}" alt="blog_img1">
                        </div>
                        <div class="blog_content">
                            <div class="blog_text">
                                {!! $Post->des !!}
                                <div class="blog_post_footer">

                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-12">
                                            <ul class="social_icons text-md-end">
                                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="related_post">
                        <div class="content_title">
                            <h2 class="def_h2">{{__('web/def.read_more')}}</h2>
                        </div>
                        <div class="row latest_news_list">
                            @foreach($BlogPosts as $Post)
                                <div class="col-lg-6 col-md-6">
                                    <x-website.card-last-news  :post-data="$Post"/>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 mt-4 pt-2 mt-xl-0 pt-xl-0   d-none  d-lg-block">
                    @include('web.layouts.inc.sidebar')
                </div>
            </div>
        </div>
    </div>

@endsection

