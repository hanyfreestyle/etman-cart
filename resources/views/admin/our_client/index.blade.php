@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <div class="row mb-3">
            <div class="col-12 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.Sort')}}" type="sort" />
            </div>
        </div>
    </x-html-section>


    <x-html-section>
        <x-ui-card  :page-data="$pageData" >
            <x-mass.confirm-massage/>

            @if(count($OurClients)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_20"></th>
                            <th>{{__('admin/def.form_name_ar')}}</th>
                            <th>{{__('admin/def.form_name_en')}}</th>

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
                        @foreach($OurClients as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td class="tc">{!!  \App\Helpers\AdminHelper::printTableImage($row,'photo') !!} </td>
                                <td>{{ $row->translate('ar')->name}}</td>
                                <td>{{ $row->translate('en')->name}}</td>
                                <td class="tc" >{!! is_active($row->is_active) !!}</td>
                                @can($PrefixRole.'_edit')
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$row->id)}}" type="edit" :tip="true" /></td>
                                @endcan

                                @can($PrefixRole.'_delete')
                                    <td class=""><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$row->id)}}" type="deleteSweet" :tip="true" /></td>
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
                {{ $OurClients->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
