@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    @if($pageData['ViewType'] == 'Edit')
        <div class="content mb-3">
            <div class="container-fluid">

                <div class="row col-12">
                    <div class="col-9">
                        <h1 class="def_h1">{{ $Category->name }}</h1>
                    </div>
                    <div class="col-3 text-left">
                        <x-action-button url="{{route('category.Table_list',$Category->id)}}"  bg="p"  print-lable="{{__('admin/def.table_info')}}"  icon="fas fa-info-circle"  />
                    </div>
                </div>
            </div>
        </div>
    @endif

    <x-ui-card :page-data="$pageData">
        <x-mass.confirm-massage />

        <form  class="mainForm" action="{{route('category.update',intval($Category->id))}}" method="post"  enctype="multipart/form-data">
            @csrf
            <x-form-select-category
                name="parent_id"
                label="المجموعات"
                :sendvalue="old('parent_id',$Category->parent_id)"
                :required-span="true"
                print-val-name="name"
                colrow="col-lg-6 "
                :send-arr="$Categories"
            />

{{--            @foreach($Categories as $CategoryList)--}}
{{--                <x-category-item :Category="$CategoryList" />--}}
{{--            @endforeach--}}



{{--            <div class="row">--}}
{{--                <x-form-input label="Slug" name="slug" :requiredSpan="true" colrow="col-lg-12 {{getColDir('en')}}"--}}
{{--                              value="{{old('slug',$Category->slug)}}"  dir="en" inputclass="dir_en"/>--}}
{{--            </div>--}}




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

                        <x-trans-text-area
                            label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"
                            name="{{ $key }}[des]"
                            dir="{{ $key }}"
                            reqname="{{ $key }}.des"
                            value="{!! old($key.'.des',$Category->translateOrNew($key)->des) !!}"
                        />

                    </div>
                @endforeach
            </div>

            <x-meta-tage-filde :old-data="$Category" :placeholder="false" />

            <hr>

            <div class="row">
                <x-form-check-active :row="$Category" name="is_active" page-view="{{$pageData['ViewType']}}"/>
            </div>

            <hr>

            <x-form-upload-file view-type="{{$pageData['ViewType']}}" :row-data="$Category"
                                :multiple="false"
                                thisfilterid="{{ \App\Helpers\AdminHelper::arrIsset($modelSettings,'category_filterid',0) }}"
                                emptyphotourl="category.emptyPhoto"  />

            <div class="container-fluid">
                <x-form-submit text="{{$pageData['ViewType']}}" />
            </div>
        </form>

    </x-ui-card>
@endsection


@push('JsCode')

    @if($pageData['ViewType'] == 'Add')
        <script type="text/javascript">
            var input1 = document.getElementById('name_ar');
            var input2 = document.getElementById('slug_ar');

            input1.addEventListener('change', function() {
                input2.value = input1.value;
            });

            var input3 = document.getElementById('name_en');
            var input4 = document.getElementById('slug_en');

            input3.addEventListener('change', function() {
                input4.value = input3.value;
            });
        </script>
    @endif

@endpush