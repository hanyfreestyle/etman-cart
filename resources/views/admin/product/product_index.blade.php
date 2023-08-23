@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    {{--    <x-html-section>--}}
    {{--        <ol class="breadcrumb breadcrumb_menutree">--}}
    {{--            <li class="breadcrumb-item"><a href="{{route('category.index_Main')}}">{{__('admin/def.main_category')}}</a></li>--}}
    {{--            @if($pageData['SubView'])--}}
    {{--                @foreach($trees as $tree)--}}
    {{--                    <li class="breadcrumb-item"><a href="{{route('category.SubCategory',$tree->id)}}">{{ $tree->name }}</a></li>--}}
    {{--                @endforeach--}}
    {{--            @endif--}}
    {{--        </ol>--}}
    {{--    </x-html-section>--}}

    <x-html-section>
        <x-ui-card  :page-data="$pageData" >
            <x-mass.confirm-massage/>

            @if(count($Products)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_20"></th>
                            <th>{{__('admin/def.form_name_ar')}}</th>
                            <th>{{__('admin/def.form_name_en')}}</th>
                            <th>{{__('admin/def.form_name_en')}}</th>

                            <th class="tbutaction TD_50"></th>
                            <th class="tbutaction TD_50"></th>

                            @can('category_edit')
                                <th class="tbutaction TD_50"></th>
                            @endcan
                            @can('category_delete')
                                <th class="tbutaction TD_50"></th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Products as $Product)
                            <tr>
                                <td>{{$Product->id}}</td>
                                <td class="tc">{!!  \App\Helpers\AdminHelper::printTableImage($Product,'photo') !!} </td>
                                <td>{{ $Product->translate('ar')->name}}</td>
                                <td>{{ $Product->translate('en')->name}}</td>
                                <td><a href="{{route('product.ListCategory',$Product->categoryName->id)}}">{{ $Product->categoryName->name }}</a></td>

                                <td class="tc" >{!! is_active($Product->is_active) !!}</td>
                                @can('category_edit')
                                    <td class="tc"><x-action-button url="{{route('product.More_Photos',$Product->id)}}"  count="{{$Product->more_photos_count}}" type="morePhoto" :tip="true" /></td>
                                    <td class="tc"><x-action-button url="{{route('product.edit',$Product->id)}}" type="edit" :tip="true" /></td>
                                @endcan

                                @can('category_delete')
                                    <td class=""><x-action-button url="#" id="{{route('product.destroy',$Product->id)}}" type="deleteSweet" :tip="true" /></td>
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
                {{ $Products->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    {{--    <x-ajax-update-status-js-code url="{{ route('product.updateStatus') }}"/>--}}
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
