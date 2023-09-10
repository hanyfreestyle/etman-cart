@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb>
        {{ Breadcrumbs::render($SinglePageView['breadcrumb']) }}
    </x-website.breadcrumb>

@endsection
@section('content')

    <div class="section">
        <div class="container latest_news_list">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="def_h1 text-center" >{{$PageMeta->body_h1}}</h1>
                    <p class="def_gdes text-center">{{$PageMeta->g_des}}</p>
                </div>
            </div>

            <div class="row">
                @foreach($BlogPosts as $Post)
                    <div class="col-lg-4 col-md-6">
                        <x-website.card-last-news  :post-data="$Post"/>
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

