@extends('web.layouts.app')

@section('content')
{{--    <div class="section pb_20 small_pt">--}}


{{--        {{getDefPhotoPath($DefPhotoList,'dark-logo')}}--}}
{{--    </div>--}}
{{--    <div class="section pb_20 small_pt">--}}
{{--        <div class="container">--}}
{{--            <div class="row mb-5">--}}

{{--                @foreach($MenuCategory as $MainCategory)--}}
{{--                    <li>{{$MainCategory->name}} {{$MainCategory->children_count}}</li>--}}
{{--                    @if($MainCategory->children_count > 0 )--}}

{{--                        @foreach($MainCategory->children  as $SubCategory)--}}
{{--                            @if($loop->index < 2)--}}

{{--                                <li class="mr-5" style="margin-right: 100px!important;">{{$SubCategory->name}} {{count($SubCategory->CatProduct)}}</li>--}}

{{--                                @if(count($SubCategory->CatProduct) > 0 )--}}
{{--                                    @foreach($SubCategory->CatProduct as $Product)--}}
{{--                                        <li class="mr-5" style="margin-right: 100px!important;">{{$Product->name}}</li>--}}
{{--                                    @endforeach--}}

{{--                                @endif--}}
{{--                            @endif--}}
{{--                        @endforeach--}}

{{--                    @endif--}}

{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



@endsection

