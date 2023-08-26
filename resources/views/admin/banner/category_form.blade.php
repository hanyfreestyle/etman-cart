@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />

            <form  class="mainForm" action="{{route($PrefixRoute.'.update',intval($Category->id))}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @foreach ( config('app.lang_file') as $key=>$lang )
                        <div class="col-lg-6 {{getColDir($key)}}">
                            <x-trans-input
                                label="{{__('admin/def.form_name_'.$key)}} ({{ $key}})"
                                name="{{ $key }}[name]"
                                inputid="name_{{ $key }}"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.name"
                                value="{{old($key.'.name',$Category->translateOrNew($key)->name)}}"
                            />

{{--                            <x-trans-text-area--}}
{{--                                label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"--}}
{{--                                name="{{ $key }}[des]"--}}
{{--                                dir="{{ $key }}"--}}
{{--                                reqname="{{ $key }}.des"--}}
{{--                                :reqspan="false"--}}
{{--                                value="{!! old($key.'.des',$Category->translateOrNew($key)->des) !!}"--}}
{{--                            />--}}
                        </div>
                    @endforeach
                </div>


                <div class="container-fluid">
                    <x-form-submit text="{{$pageData['ViewType']}}" />
                </div>
            </form>
        </x-ui-card>

    </x-html-section>

@endsection


@push('JsCode')
    <x-google-seo-script/>
    <x-slug-name-script :pagetype="$pageData['ViewType']" />
@endpush
