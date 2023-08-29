@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <x-ui-card :page-data="$pageData">

            <x-mass.confirm-massage/>

            <form class="mainForm" action="{{route('config.meta.update',intval($MetaTag->id))}}" method="post"  enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <x-form-input label="# CatId" name="cat_id" :requiredSpan="true" colrow="col-lg-4"
                                  value="{{old('cat_id',$MetaTag->cat_id)}}" inputclass="dir_en"/>

                    <x-form-select-arr name="banner_id"
                                       label="{{__('admin/menu.web_banner')}}"
                                       :sendvalue="old('banner_id',$MetaTag->banner_id)"
                                       :required-span="false" colrow="col-lg-3 " :send-arr="$BannerCategory"/>
                </div>


                <x-meta-tage-filde :body-h1="true" :breadcrumb="true"  :old-data="$MetaTag" :placeholder="false"  />
                <hr>
                <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$MetaTag"
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
