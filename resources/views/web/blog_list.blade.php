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

