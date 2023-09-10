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
                <div class="col-xl-9">
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
                <div class="col-xl-3 mt-4 pt-2 mt-xl-0 pt-xl-0">
                    {{--                    <div class="sidebar">--}}
                    {{--                        <div class="widget">--}}
                    {{--                            <div class="search_form">--}}
                    {{--                                <form>--}}
                    {{--                                    <input required="" class="form-control" placeholder="Search..." type="text">--}}
                    {{--                                    <button type="submit" title="Subscribe" class="btn icon_search" name="submit" value="Submit">--}}
                    {{--                                        <i class="ion-ios-search-strong"></i>--}}
                    {{--                                    </button>--}}
                    {{--                                </form>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="widget">--}}
                    {{--                            <h5 class="widget_title">Recent Posts</h5>--}}
                    {{--                            <ul class="widget_recent_post">--}}
                    {{--                                <li>--}}
                    {{--                                    <div class="post_footer">--}}
                    {{--                                        <div class="post_img">--}}
                    {{--                                            <a href="#"><img src="assets/images/letest_post1.jpg" alt="letest_post1"></a>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="post_content">--}}
                    {{--                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>--}}
                    {{--                                            <p class="small m-0">April 14, 2018</p>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </li>--}}
                    {{--                                <li>--}}
                    {{--                                    <div class="post_footer">--}}
                    {{--                                        <div class="post_img">--}}
                    {{--                                            <a href="#"><img src="assets/images/letest_post2.jpg" alt="letest_post2"></a>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="post_content">--}}
                    {{--                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>--}}
                    {{--                                            <p class="small m-0">April 14, 2018</p>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </li>--}}

                    {{--                                <li>--}}
                    {{--                                    <div class="post_footer">--}}
                    {{--                                        <div class="post_img">--}}
                    {{--                                            <a href="#"><img src="assets/images/letest_post3.jpg" alt="letest_post3"></a>--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="post_content">--}}
                    {{--                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>--}}
                    {{--                                            <p class="small m-0">April 14, 2018</p>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="widget">--}}
                    {{--                            <h5 class="widget_title">Archive</h5>--}}
                    {{--                            <ul class="widget_archive">--}}
                    {{--                                <li><a href="#"><span class="archive_year">June 2019</span><span class="archive_num">(12)</span></a></li>--}}
                    {{--                                <li><a href="#"><span class="archive_year">May 2019</span><span class="archive_num">(5)</span></a></li>--}}
                    {{--                                <li><a href="#"><span class="archive_year">March 2018</span><span class="archive_num">(6)</span></a></li>--}}
                    {{--                                <li><a href="#"><span class="archive_year">January 2018</span><span class="archive_num">(7)</span></a></li>--}}
                    {{--                                <li><a href="#"><span class="archive_year">April 2017</span><span class="archive_num">(10)</span></a></li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="widget">--}}
                    {{--                            <div class="shop_banner">--}}
                    {{--                                <div class="banner_img overlay_bg_20">--}}
                    {{--                                    <img src="assets/images/sidebar_banner_img.jpg" alt="sidebar_banner_img">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="shop_bn_content2 text_white">--}}
                    {{--                                    <h5 class="text-uppercase shop_subtitle">New Collection</h5>--}}
                    {{--                                    <h3 class="text-uppercase shop_title">Sale 30% Off</h3>--}}
                    {{--                                    <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="widget">--}}
                    {{--                            <h5 class="widget_title">tags</h5>--}}
                    {{--                            <div class="tags">--}}
                    {{--                                <a href="#">General</a>--}}
                    {{--                                <a href="#">Design</a>--}}
                    {{--                                <a href="#">jQuery</a>--}}
                    {{--                                <a href="#">Branding</a>--}}
                    {{--                                <a href="#">Modern</a>--}}
                    {{--                                <a href="#">Blog</a>--}}
                    {{--                                <a href="#">Quotes</a>--}}
                    {{--                                <a href="#">Advertisement</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection

