@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <x-ui-card :page-data="$pageData">

            <x-mass.confirm-massage/>

            <form class="mainForm" action="{{route($PrefixRoute.'.update',intval($Page->id))}}" method="post"  enctype="multipart/form-data" >
                @csrf

                <div class="row">
                    <x-form-input label="# CatId" name="cat_id" :requiredSpan="true" colrow="col-lg-3"
                                  value="{{old('cat_id',$Page->cat_id)}}" inputclass="dir_en"/>

                    <x-form-select-arr name="banner_id"
                                       label="{{__('admin/menu.web_banner')}}"
                                       :sendvalue="old('banner_id',$Page->banner_id)"
                                       :required-span="false" colrow="col-lg-3 " :send-arr="$BannerCategory"/>
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
                                value="{{old($key.'.name',$Page->translateOrNew($key)->name)}}"
                            />
                        </div>
                    @endforeach
                </div>



                <x-meta-tage-filde :body-h1="true" :breadcrumb="true"  :old-data="$Page" :placeholder="false" :page-data="$pageData"  />
                <hr>

                <div class="row">
                    <x-form-check-active :row="$Page" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                    <x-form-check-active :row="$Page" name="menu_main" lable="{{__('admin/page.menu_footer')}}" page-view="{{$pageData['ViewType']}}"/>
                    <x-form-check-active :row="$Page" name="menu_footer" lable="{{__('admin/page.menu_main')}}" page-view="{{$pageData['ViewType']}}"/>
                </div>
                <hr>
                <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$Page"
                                    :multiple="false"
                                    thisfilterid="{{ \App\Helpers\AdminHelper::arrIsset($modelSettings,$controllerName.'_filterid',0) }}"
                                    :emptyphotourl="$PrefixRoute.'.emptyPhoto'"  />


                <div class="container-fluid">
                    <x-form-submit text="{{$pageData['ViewType']}}" />
                </div>
            </form>

        </x-ui-card>
    </x-html-section>

@endsection
