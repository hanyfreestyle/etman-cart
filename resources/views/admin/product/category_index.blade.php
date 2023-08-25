@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <ol class="breadcrumb breadcrumb_menutree">
            <li class="breadcrumb-item"><a href="{{route($PrefixRoute.'.index_Main')}}">{{__('admin/def.main_category')}}</a></li>
            @if($pageData['SubView'])
                @foreach($trees as $tree)
                    <li class="breadcrumb-item"><a href="{{route($PrefixRoute.'.SubCategory',$tree->id)}}">{{ $tree->name }}</a></li>
                @endforeach
            @endif
        </ol>
    </x-html-section>

    <x-html-section>
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

                            <th class="tbutaction TD_50"></th>
                            <th class="tbutaction TD_50"></th>

                            @can($PrefixRole.'_edit')
                                <th class="tbutaction TD_50"></th>
                            @endcan
                            @can($PrefixRole.'_delete')
                                <th class="tbutaction TD_50"></th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Categories as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td class="tc">{!!  \App\Helpers\AdminHelper::printTableImage($row,'photo') !!} </td>
                                <td>{!! \App\Helpers\AdminHelper::print_count_name('ar',$row,$PrefixRoute.".SubCategory") !!}</td>
                                <td>{!!  \App\Helpers\AdminHelper::print_count_name('en',$row,$PrefixRoute.".SubCategory") !!}</td>
                                <td class="tc" >{!! is_active($row->is_active) !!}</td>
                                @can($PrefixRole.'_edit')
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.Table_list',$row->id)}}" count="{{$row->table_data_count}}"  print-lable="{{__('admin/def.table_info')}}"  icon="fas fa-info-circle" :tip="true" /></td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$row->id)}}" type="edit" :tip="true" /></td>
                                @endcan

                                @can($PrefixRole.'_delete')
                                    @if($row->children_count == 0)
                                        <td class=""><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$row->id)}}" type="deleteSweet" :tip="true" /></td>
                                    @else
                                        <td class=""><x-action-button url="#" id="sometext" type="deleteSweet_err" :tip="true" /></td>
                                    @endif
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <x-alert-massage type="nodata" />
            @endif
        </x-ui-card>
        <div class="d-flex justify-content-center">
            @if($viewDataTable == false)
                {{ $Categories->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
