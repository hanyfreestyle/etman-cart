@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb :meta="$PageMeta" :catid="$SinglePageView['CatId']" />
@endsection
@section('content')

    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row mb-5">
                {{$SinglePageView['CatId']}}
            </div>
        </div>
    </div>

@endsection

