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
                        <x-action-button  url="{{route('category.Table_Sort', $Category->id)}}"  print-lable="{{__('admin/form.button_sort')}}" size="s"  bg="i" icon="fas fa-sort-amount-up"  />
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



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @if(count($CategoryTable)>0)
                    <div class="row col-lg-12 hanySort">
                        @foreach($CategoryTable as $row)
                            <div class="col-lg-12"  data-index="{{$row->id}}" data-position="{{$row->postion}}" >
                                <p class="ListItem-12">{{$row->name}}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="col-lg-12">
                        <x-alert-massage type="nodata" />
                    </div>
                @endif
            </div>
        </div>
    </div>







@endsection


@push('JsCode')
    <script src="{{defAdminAssets('plugins/bootstrap/js/jquery-ui.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('.hanySort').sortable({

                update: function (event, ui) {
                    $(this).children().each(function (index) {
                        if ($(this).attr('data-position') != (index+1)) {
                            $(this).attr('data-position', (index+1)).addClass('updated');
                        }
                    });

                    var positions = [];
                    $('.updated').each(function () {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        $(this).removeClass('updated');
                    });

                    $.ajax({
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        url: '{{ route('category.TableSortSave') }}',
                        type: 'POST',
                        dataType: 'text',
                        data: {
                            update: 1,
                            positions: positions
                        },
                        success: function (response) {
                            console.log(response);
                        }
                    });
                }
            });
        });
    </script>
@endpush

