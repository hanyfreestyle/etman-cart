@extends('web.layouts.app')
@section('breadcrumb')
    <x-website.breadcrumb :meta="$PageMeta" :catid="$SinglePageView['CatId']" />
@endsection
@section('content')

    <div class="section pb_20 small_pt">
        <div class="container PrivacyList">
            <div class="row mb-5">
                @foreach($Terms as $Term)
                    <h2>{!! $Term->h1 !!}</h2>
                    <h3>{!! $Term->h2 !!}</h3>
                    <p>{!! ChangeText($Term->des) !!}</p>
                    @if($Term->lists)
                        <ul>
                            @foreach(explode(PHP_EOL, $Term->lists) as $list)
                                <li>{{$list}}</li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection

