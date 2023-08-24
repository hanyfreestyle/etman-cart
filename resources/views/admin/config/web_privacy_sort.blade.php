@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>

    <x-html-section>
        <div class="row mb-3">
            <div class="col-9">

            </div>

            <div class="col-3 text-left">
                <x-action-button  url="{{route('config.webPrivacy.index')}}" print-lable="{{__('admin/form.button_back')}}" size="s"  bg="dark" icon="fas fa-hand-point-left"  />
            </div>

        </div>
    </x-html-section>

    <x-html-section>

        <div class="row mt-3">
            @if(count($WebPrivacy)>0)
                <div class="row col-lg-12 hanySort">
                    @foreach($WebPrivacy as $row)
                        <div class="col-lg-12"  data-index="{{$row->id}}" data-position="{{$row->postion}}" >
                            <p class="ListItem-12">{{$row->h1}}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="col-lg-12">
                    <x-alert-massage type="nodata" />
                </div>
            @endif
        </div>
    </x-html-section>

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
                        url: '{{ route('config.webPrivacy.SaveSort') }}',
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

