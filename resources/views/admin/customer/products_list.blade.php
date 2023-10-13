@extends('admin.layouts.app')

@section('content')

    <x-breadcrumb-def :pageData="$pageData"/>
    <x-mass.confirm-massage />
    <x-html-section>
        <div class="row mb-2">
            <div class="col-9">
                <h1 class="def_h1">{{ $customer->name }}</h1>
            </div>
            <div class="col-3 text-left">
                <x-action-button  url="{{route($PrefixRoute.'.FavListRemove', $customer->id)}}"  print-lable="حذف المنتجات"  bg="d" />
            </div>
        </div>
    </x-html-section>




    <x-html-section>
        <div class="card min_card_h p-4">
            <input type="hidden" id="customer_id" value="{{$customer->id}}">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="def_form_label col-form-label font-weight-light">مجموعة المنتجات<span class="required_Span">*</span></label>
                        <select class="form-control select2 custom-select is-invalid " id="sel_category" style="width: 100%;" >
                            <option value="0">برجاء تحديد المجموعة</option>
                            @foreach ($categories as  $category)
                                @if($category->product_shop_admin_count > 0 )
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                                @if (count($category->children) > 0)
                                    @include('admin.form_loop.subcategories_livewire', ['subcategories' => $category->children, 'parent' => $category->name])
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="loading_gif" class="text-center">
                        <img src="{{defAdminAssets('img/loading_2.gif')}}">
                    </div>
                    <div id="dialogDiv"></div>
                </div>
            </div>
        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <script>
        $(document).ready(function() {
            $('#sel_category').on('change', function(e) {
                var category_id = $(this).val();
                var customer_id = $('#customer_id').val();
                $("#dialogDiv").hide();
                //alert(customer_id);
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: '{{route('FavListProductsAjax')}}',
                    type: 'POST',
                    dataType: 'text',
                    data: {
                        category_id: category_id,
                        customer_id: customer_id,
                    },
                    beforeSend: function() {
                        $("#loading_gif").show();
                    },
                    success: function (response) {
                        //console.log(response);
                         $("#loading_gif").hide();
                         $("#dialogDiv").show();
                         $('#dialogDiv').html(response);
                    }
                });
            });
        })
    </script>
@endpush

