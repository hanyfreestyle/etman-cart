@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection


@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>
    <x-html-section>


        <x-ui-card  :page-data="$pageData" >
            <x-mass.confirm-massage/>

            @if(count($Attributes)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>

                            <th>{{__('admin/def.form_name_ar')}}</th>
                            <th>{{__('admin/def.form_name_en')}}</th>

                            @if($pageData['ViewType'] == 'deleteList')
                                <th>{{ __('admin/page.del_date') }}</th>
                                <th></th>
                                <th></th>
                            @else
                                <th class="tbutaction TD_50"></th>
                                <th class="tbutaction TD_50"></th>
                                <th class="tbutaction TD_50"></th>
                                @can($PrefixRole.'_edit')
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                                @can($PrefixRole.'_delete')
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                            @endif



                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Attributes as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->translate('ar')->name}}</td>
                                <td>{{$row->translate('en')->name}}</td>
                                @if($pageData['ViewType'] == 'deleteList')
                                    <td>{{$row->deleted_at}}</td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.restore',$row->id)}}" type="restor" /></td>
                                    <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.force',$row->id)}}" type="deleteSweet"/></td>
                                @else
                                    <td class="tc">{{$row->get_category_table_count}}</td>
                                    <td class="tc">{{$row->get_product_table_count}}</td>
                                    <td class="tc">{!! is_active($row->is_active) !!}</td>
                                    @can($PrefixRole.'_edit')
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$row->id)}}" type="edit" :tip="true" /></td>
                                    @endcan
                                    @can($PrefixRole.'_delete')
                                        <td class=""><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$row->id)}}" type="deleteSweet" :tip="true" /></td>
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
                {{ $Attributes->links() }}
            @endif
        </div>

    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush

