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
                @if($pageData['ViewType'] == 'List')
                    <div class="col-3 text-left">
                        <x-action-button  url="{{route('category.Table_create', $Category->id)}}"  type="add"  size="s"  />
                        <x-action-button  url="{{route('category.edit', $Category->id)}}" print-lable="{{__('admin/form.button_back')}}" size="s"  bg="dark" icon="fas fa-hand-point-left"  />
                    </div>
                @endif
                @if($pageData['ViewType'] == 'deleteList')
                    <div class="col-3 text-left">
                        <x-action-button  url="{{route('category.Table_list', $Category->id)}}" print-lable="{{__('admin/form.button_back')}}" size="s"  bg="dark" icon="fas fa-hand-point-left"  />
                    </div>
                @endif

            </div>


        </div>
    </div>

    <section class="div_data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card pb-3">
                        <div class="card-header">
                            <h5>{{__('admin/form.content_ar')}}</h5>
                            @if($pageData['ViewType'] == 'List')
                                @if($Trashed > 0 )
                                    @can('category_restore')
                                        <a href="{{route('category.Table_SoftDelete',$Category->id)}}" class="btn btn-sm btn-danger float-left">{{ __('admin/page.del_restor_but') }}</a>
                                    @endcan
                                @endif
                            @endif
                        </div>

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

                                        @if($pageData['ViewType'] == 'deleteList')
                                            <th class="TD_250"></th>
                                            <th></th>
                                            <th></th>
                                        @else
                                            @can('category_edit')
                                                <th class="tbutaction"></th>
                                            @endcan
                                            @can('category_delete')
                                                <th class="tbutaction"></th>
                                            @endcan
                                        @endif





                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($CategoryTable as $Question)
                                        <tr>
                                            <td>{{$Question->id}}</td>
                                            <td>{{optional($Question->translate('ar'))->name}}</td>
                                            <td>{{optional($Question->translate('ar'))->des}}</td>
                                            <td>{{optional($Question->translate('en'))->name}}</td>
                                            <td>{{optional($Question->translate('en'))->des}}</td>

                                            @if($pageData['ViewType'] == 'deleteList')
                                                <td>{{$Question->deleted_at}}</td>
                                                <td class="tc"><x-action-button url="{{route('category.Table_restore',$Question->id)}}" type="restor" :tip="true" /></td>
                                                <td class="tc"><x-action-button url="#" id="{{route('category.Table_force',$Question->id)}}" type="deleteSweet" :tip="true"/></td>

                                            @else

                                                @can('category_edit')
                                                    <td class="tc"><x-action-button url="{{route('category.Table_edit',$Question->id)}}" type="edit" :tip="true" /></td>
                                                @endcan
                                                @can('category_delete')
                                                    <td class="tc"><x-action-button url="#" id="{{route('category.Table_destroy',$Question->id)}}" :tip="true" type="deleteSweet"/></td>
                                                @endcan
                                            @endif

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





@endsection


@push('JsCode')
    <x-sweet-delete-js-no-form/>
@endpush

