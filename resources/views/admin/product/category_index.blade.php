@extends('admin.layouts.app')
@php
    $viewDataTable = \App\Helpers\AdminHelper::arrIsset($modelSettings,'category_datatable',0) ;
    if($viewDataTable){
        $tableHeader = ' id="MainDataTable" class="table table-bordered table-hover" ';
    }else{
        $tableHeader = ' class="table table-hover" ';
    }
@endphp

@section('StyleFile')
    @if($viewDataTable)
        <x-data-table-plugins :style="true"/>
    @endif

@endsection

@section('content')



    <x-breadcrumb-def :pageData="$pageData"/>



    <section class="div_data">
        <div class="container-fluid">
            @if($pageData['SubView'])
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <ol class="breadcrumb  text-md">
                            <li class="breadcrumb-item"><a href="{{route('category.index_Main')}}">{{__('admin/def.main_category')}}</a></li>
                            @foreach($trees as $tree)
                                <li class="breadcrumb-item"><a href="{{route('category.SubCategory',$tree->id)}}">{{ $tree->name }}</a></li>
                            @endforeach
                        </ol>
                    </div>
                </div>

            @else
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <ol class="breadcrumb  text-md">
                            <li class="breadcrumb-item"><a href="{{route('category.index_Main')}}">{{__('admin/def.main_category')}}</a></li>
                        </ol>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <x-ui-card  :page-data="$pageData" >
                        <x-mass.confirm-massage/>

                        @if(count($Categories)>0)
                            <div class="card-body table-responsive p-0">
                                <table {!! $tableHeader !!} >
                                    <thead>
                                    <tr>
                                        <th class="TD_20">#</th>
                                        <th class="TD_20"></th>
                                        <th>{{__('admin/def.form_name_ar')}}</th>
                                        <th>{{__('admin/def.form_name_en')}}</th>

                                        @if($pageData['ViewType'] == 'deleteList')
                                            <th>{{ __('admin/page.del_date') }}</th>
                                            <th></th>
                                            <th></th>
                                        @else

                                            @can('category_edit')
                                                <th class="tbutaction TD_50"></th>
                                                <th class="tbutaction TD_50"></th>
                                            @endcan
                                            @can('category_delete')
                                                <th class="tbutaction TD_50"></th>
                                            @endcan
                                        @endif



                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Categories as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td class="tc">{!! AdminHelper::printTableImage($row,'photo') !!} </td>
                                            <td>{!! ProCategory::print_count_name('ar',$row,"category.SubCategory") !!}</td>
                                            <td>{!! ProCategory::print_count_name('en',$row,"category.SubCategory") !!}</td>


                                            @if($pageData['ViewType'] == 'deleteList')
                                                <td>{{$row->deleted_at}}</td>
                                                <td class="tc"><x-action-button url="{{route('category.restore',$row->id)}}" type="restor" /></td>
                                                <td class="tc"><x-action-button url="#" id="{{route('category.force',$row->id)}}" type="deleteSweet"/></td>
                                            @else


                                                @can('category_edit')
                                                    <td class="tc"><x-action-button url="{{route('category.Table_list',$row->id)}}" count="{{$row->table_data_count}}"  print-lable="{{__('admin/def.table_info')}}"  icon="fas fa-info-circle" :tip="true" /></td>
                                                    <td class="tc"><x-action-button url="{{route('category.edit',$row->id)}}" type="edit" :tip="true" /></td>
                                                @endcan
                                                @can('category_delete')
                                                    <td class=""><x-action-button url="#" id="{{route('category.destroy',$row->id)}}" type="deleteSweet" :tip="true" /></td>
                                                @endcan
                                            @endif

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <x-alert-massage type="nodata" />
                        @endif
                    </x-ui-card>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            @if($Categories instanceof \Illuminate\Pagination\AbstractPaginator)
                {{ $Categories->links() }}
            @endif

        </div>


    </section>
@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
    <x-ajax-update-status-js-code url="{{ route('category.updateStatus') }}"/>
    @if($viewDataTable)
        <x-data-table-plugins :jscode="true" />
    @endif


@endpush

