@extends('admin.layouts.app')
@section('StyleFile')
    <x-data-table-plugins :style="true" :is-active="$viewDataTable"/>
@endsection

@section('content')
    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <x-ui-card  :page-data="$pageData" >
            <x-mass.confirm-massage/>

            @if(count($BlogPosts)>0)
                <div class="card-body table-responsive p-0">
                    <table {!! $tableHeader !!} >
                        <thead>
                        <tr>
                            <th class="TD_20">#</th>
                            <th class="TD_20"></th>
                            <th class="TD_150">{{__('admin/def.published_at')}}</th>
                            <th class="TD_250">{{__('admin/form.title_ar')}}</th>
                            <th class="TD_250">{{__('admin/form.title_en')}}</th>
                            @if($pageData['ViewType'] == 'deleteList')
                                <th>{{ __('admin/page.del_date') }}</th>
                                <th></th>
                                <th></th>
                            @else
                                <th class="tbutaction TD_50"></th>
                                @can($PrefixRole.'_edit')
                                    <th class="tbutaction TD_50"></th>
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                                @can($PrefixRole.'_delete')
                                    <th class="tbutaction TD_50"></th>
                                @endcan
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($BlogPosts as $Post)
                            <tr>
                                <td>{{$Post->id}}</td>
                                <td class="tc">{!!  \App\Helpers\AdminHelper::printTableImage($Post,'photo') !!} </td>
                                <td>{{$Post->getFormatteDate()}}</td>
                                <td>{{ $Post->translate('ar')->name}}</td>
                                <td>{{ $Post->translate('en')->name}}</td>


                                @if($pageData['ViewType'] == 'deleteList')
                                    <td>{{$Post->deleted_at}}</td>
                                    <td class="tc"><x-action-button url="{{route($PrefixRoute.'.restore',$Post->id)}}" type="restor" /></td>
                                    <td class="tc"><x-action-button url="#" id="{{route($PrefixRoute.'.force',$Post->id)}}" type="deleteSweet"/></td>
                                @else
                                    <td class="tc" >{!! is_active($Post->is_active) !!}</td>
                                    @can($PrefixRole.'_edit')
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.More_Photos',$Post->id)}}"  count="{{$Post->more_photos_count}}" type="morePhoto" :tip="true" /></td>
                                        <td class="tc"><x-action-button url="{{route($PrefixRoute.'.edit',$Post->id)}}" type="edit" :tip="true" /></td>
                                    @endcan

                                    @can($PrefixRole.'_delete')
                                        <td class=""><x-action-button url="#" id="{{route($PrefixRoute.'.destroy',$Post->id)}}" type="deleteSweet" :tip="true" /></td>
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
                {{ $BlogPosts->links() }}
            @endif
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <x-sweet-delete-err/>
    <x-sweet-delete-js-no-form/>
    <x-data-table-plugins :jscode="true" :is-active="$viewDataTable" />
@endpush
