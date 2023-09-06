@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb :meta="$PageMeta" :catid="$SinglePageView['CatId']" />
@endsection
@section('content')

    <div class="section">
        <div class="container latest_news_list">
            <div class="row">
                @foreach($BlogPosts as $Post)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog_post blog_style2 box_shadow1">
                            <div class="blog_img">
                                <a href="{{route('LatestNews_View',$Post->slug)}}">
                                    <img src="{{ getPhotoPath($Post->photo_thum_1) }}" alt="blog_small_img1">
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h2 class="blog_title crop_text_2"><a href="{{route('LatestNews_View',$Post->slug)}}">{{$Post->name}}</a></h2>
                                    <ul class="list_none blog_meta">
                                        <li><a href="#"><i class="ti-calendar"></i>{{ \Carbon\Carbon::parse($Post->published_at )->format('d/m/Y')}}</a></li>
                                    </ul>
                                    <p class="g_des crop_text_3"> {{$Post->g_des}}</p>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 mt-2 mt-md-4">
                    <ul class="pagination pagination_style1 justify-content-center">
                        {{ $BlogPosts->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

