@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>
    <section class="div_data">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <x-ui-card :page-data="$pageData">
                    <x-mass.confirm-massage />
                    <form  class="mainForm" action="{{route($PrefixRoute.'.update',intval($Attribute->id))}}" method="post"  enctype="multipart/form-data">
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
                                        value="{{old($key.'.name',$Attribute->translateOrNew($key)->name)}}"
                                    />
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        <div class="row">
                            <x-form-check-active :row="$Attribute" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                        </div>
                        <div class="container-fluid">
                            <x-form-submit text="{{$pageData['ViewType']}}" />
                        </div>
                    </form>

                </x-ui-card>

            </div>
        </div>
    </div>
    </section>

@endsection


@push('JsCode')
@endpush
