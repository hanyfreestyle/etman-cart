@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />

    <div class="content mb-3">
        <div class="container-fluid">
            <div class="row col-12">
                <div class="col-9">
                    <h1 class="def_h1">{{ $Category->name }}</h1>
                </div>
                <div class="col-3 text-left">
                    <x-action-button  url="{{route('category.Table_Sort', $Category->id)}}"  print-lable="{{__('admin/form.button_sort')}}" size="s"  bg="i" icon="fas fa-sort-amount-up"  />
                    <x-action-button  url="{{route('category.edit', $Category->id)}}" print-lable="{{__('admin/form.button_back')}}" size="s"  bg="dark" icon="fas fa-hand-point-left"  />
                </div>
            </div>
        </div>
    </div>

    <section class="div_data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card pb-3">
                        @if(count($CategoryTable)>0)
                            <div class="card-body">
                                <table class="table table-hover" >
                                    <thead>
                                    <tr>
                                        <th class="TD_20">#</th>
                                        <th class="TD_350">{{__('admin/form.title_ar')}}</th>
                                        <th class="TD_350">{{__('admin/form.des_ar')}}</th>
                                        <th class="TD_350">{{__('admin/form.title_en')}}</th>
                                        <th class="TD_350">{{__('admin/form.des_en')}}</th>
                                        @can('category_edit')
                                            <th class="tbutaction"></th>
                                        @endcan
                                        @can('category_delete')
                                            <th class="tbutaction"></th>
                                        @endcan




                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($CategoryTable as $TableItem)
                                        <tr>
                                            <td>{{$TableItem->id}}</td>
                                            <td>{{optional($TableItem->attributeName->translate('ar'))->name}}</td>
                                            <td>{{optional($TableItem->translate('ar'))->des}}</td>
                                            <td>{{optional($TableItem->attributeName->translate('en'))->name}}</td>
                                            <td>{{optional($TableItem->translate('en'))->des}}</td>



                                            @can('category_edit')
                                                <td class="tc"><x-action-button url="{{route('category.Table_edit',$TableItem->id)}}" type="edit" :tip="true" /></td>
                                            @endcan
                                            @can('category_delete')
                                                <td class="tc"><x-action-button url="#" id="{{route('category.Table_destroy',$TableItem->id)}}" :tip="true" type="deleteSweet"/></td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="col-lg-12 pr-4 pl-4">
                                <x-alert-massage type="nodata" />
                            </div>
                        @endif
                    </div>


                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            @if($CategoryTable instanceof \Illuminate\Pagination\AbstractPaginator)
                {{ $CategoryTable->links() }}
            @endif
        </div>

    </section>

    @if(count($AttributeList) > 0)
        <section class="div_data">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card p-4">
                            <form  class="mainForm_x" action="{{route('category.Table_update',0)}}" method="post" >
                                @csrf
                                <x-form-select-arr name="attribute_id" label="{{__('admin/form.title_ar')}}" :sendvalue="old('attribute_id')" :required-span="true" colrow="col-lg-3 " :send-arr="$AttributeList"/>
                                <input type="hidden" name="category_id" value="{{ $Category->id }}">
                                <div class="row">
                                    @foreach ( config('app.lang_file') as $key=>$lang )
                                        <div class="col-lg-6 {{getColDir($key)}}">

                                            <x-trans-text-area
                                                label="{{ __('admin/form.des_'.$key)}} ({{ ($key) }})"
                                                name="{{ $key }}[des]"
                                                dir="{{ $key }}"
                                                reqname="{{ $key }}.des"
                                                value="{{ old($key.'.des') }}"
                                            />

                                        </div>
                                    @endforeach
                                </div>

                                <div class="container-fluid">
                                    <x-form-submit text="Add" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
@endpush

