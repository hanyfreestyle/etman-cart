@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    @if($pageData['ViewType'] == 'Edit')
        <x-html-section>
            <div class="row mb-3">
                <div class="col-9">
                    <h1 class="def_h1">{{ $BlogPost->name }}</h1>
                </div>
                <div class="col-3 text-left">
                    <x-action-button url="{{route($PrefixRoute.'.More_Photos',$BlogPost->id)}}" type="morePhoto"/>
                </div>
            </div>
        </x-html-section>
    @endif

    <x-html-section>
        <x-ui-card :page-data="$pageData">
            <x-mass.confirm-massage />



            <form  class="mainForm" action="{{route($PrefixRoute.'.update',intval($BlogPost->id))}}" method="post"  enctype="multipart/form-data">
                @csrf

            <div class="row"  >
                <x-form-input-date value="{{old('published_at',$BlogPost->published_at)}}" />
            </div>

                <div class="row">
                    @foreach ( config('app.lang_file') as $key=>$lang )
                        <div class="col-lg-6 {{getColDir($key)}}">
                            <x-trans-input
                                label="{{__('admin/form.title_'.$key)}} ({{ $key}})"
                                name="{{ $key }}[name]"
                                inputid="name_{{ $key }}"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.name"
                                value="{{old($key.'.name',$BlogPost->translateOrNew($key)->name)}}"
                            />

                            <x-trans-text-area
                                label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"
                                name="{{ $key }}[des]"
                                dir="{{ $key }}"
                                reqname="{{ $key }}.des"
                                newstyle="big_text"
                                value="{!! old($key.'.des',$BlogPost->translateOrNew($key)->des) !!}"
                            />
                        </div>
                    @endforeach
                </div>

                <x-meta-tage-filde :old-data="$BlogPost" :placeholder="false" :page-data="$pageData" />

                <hr>

                <div class="row">
                    <x-form-check-active :row="$BlogPost" name="is_active" page-view="{{$pageData['ViewType']}}"/>
                </div>

                <hr>

                <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$BlogPost"
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


@push('JsCode')
    @if($viewEditor)
        <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.config.height = 450;
            //  CKEDITOR.config.contentsCss = "https://realestate.eg/css/bootstrap.min.css";
            CKEDITOR.replace('en[des]');
            CKEDITOR.replace('ar[des]', {
                contentsLangDirection: 'rtl',
            });
        </script>

    @endif
    <x-google-seo-script/>
    <x-slug-name-script :pagetype="$pageData['ViewType']" />
@endpush
