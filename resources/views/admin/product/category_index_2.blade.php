@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <ol class="breadcrumb breadcrumb_menutree">
            <li class="breadcrumb-item"><a href="{{route('category.index_Main')}}">{{__('admin/def.main_category')}}</a></li>
            @if($pageData['SubView'])
                @foreach($trees as $tree)
                    <li class="breadcrumb-item"><a href="{{route('category.SubCategory',$tree->id)}}">{{ $tree->name }}</a></li>
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

                            @if($pageData['ViewType'] == 'deleteList')
                                <th>{{ __('admin/page.del_date') }}</th>
                                <th></th>
                                <th></th>
                            @else
                                <th class="tbutaction TD_50"></th>
                                <th class="tbutaction TD_50"></th>

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
                                <td class="tc">{!!  \App\Helpers\AdminHelper::printTableImage($row,'photo') !!} </td>
                                <td>{!! \App\Helpers\AdminHelper::print_count_name('ar',$row,"category.SubCategory") !!}</td>
                                <td>{!!  \App\Helpers\AdminHelper::print_count_name('en',$row,"category.SubCategory") !!}</td>
                                @if($pageData['ViewType'] == 'deleteList')
                                    <td>{{$row->deleted_at}}</td>
                                    <td class="tc"><x-action-button url="{{route('category.restore',$row->id)}}" type="restor" /></td>
                                    <td class="tc"><x-action-button url="#" id="{{route('category.force',$row->id)}}" type="deleteSweet"/></td>
                                @else
                                    <td>{!! is_active($row->is_active) !!}</td>
                                    <td class="tc"><x-action-button url="{{route('category.edit99',$row->id)}}" type="edit" :tip="true" /></td>
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
        <div class="d-flex justify-content-center">
            @if($viewDataTable == false)
                {{ $Categories->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
{{--    <x-ajax-update-status-js-code url="{{ route('category.updateStatus') }}"/>--}}
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
