@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />

            <form  class="mainForm" action="{{route($PrefixRoute.'.update',intval($Banner->id))}}" method="post"  enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <x-form-select-arr name="category_id"
                                       label="{{__('admin/def.Category')}}"
                                       :sendvalue="old('category_id',$Banner->category_id)"
                                       :required-span="true" colrow="col-lg-3 " :send-arr="$BannerCategory"/>
                </div>

                <div class="row">
                    @foreach ( config('app.lang_file') as $key=>$lang )
                        <div class="col-lg-6 {{getColDir($key)}}">
                            <x-trans-input
                                label="{{__('admin/def.form_name_'.$key)}} ({{ $key}})"
                                name="{{ $key }}[name]"
                                inputid="name_{{ $key }}"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.name"
                                value="{{old($key.'.name',$Banner->translateOrNew($key)->name)}}"
                            />

                            <x-trans-text-area
                                label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"
                                name="{{ $key }}[des]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.des"
                                :reqspan="false"
                                value="{!! old($key.'.des',$Banner->translateOrNew($key)->des) !!}"
                            />

                            <x-trans-text-area
                                label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"
                                name="{{ $key }}[other]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.other"
                                :reqspan="false"
                                value="{!! old($key.'.other',$Banner->translateOrNew($key)->other) !!}"
                            />

                            <x-trans-input
                                label="{{__('admin/form.banner_url')}} ({{ $key}})"
                                name="{{ $key }}[url]"
                                dir="en"
                                :reqspan="false"
                                reqname="{{ $key }}.url"
                                value="{{old($key.'.url',$Banner->translateOrNew($key)->url)}}"
                            />

                            <x-trans-input
                                label="{{__('admin/form.banner_url_but')}} ({{ $key}})"
                                name="{{ $key }}[url_but]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.url_but"
                                value="{{old($key.'.url_but',$Banner->translateOrNew($key)->url_but)}}"
                            />

                        </div>
                    @endforeach
                </div>

                <hr>
                <div class="row">

                    <x-form-check-active :row="$Banner" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                    <x-form-check-active :row="$Banner" name="text_view" lable="{{__('admin/form.banner_text_view')}}" page-view="{{$pageData['ViewType']}}"/>
                    <x-form-check-active :row="$Banner" name="url_type"  :defstatus="false" lable="{{__('admin/form.banner_url_type')}}"  page-view="{{$pageData['ViewType']}}"/>
                </div>

                <hr>

                <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$Banner"
                                    :multiple="false"
                                    thisfilterid="{{ \App\Helpers\AdminHelper::arrIsset($modelSettings,$controllerName.'_filterid',0) }}"
                                    emptyphotourl="#"  />

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
