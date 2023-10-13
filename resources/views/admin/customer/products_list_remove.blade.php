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
                <x-action-button  url="{{route($PrefixRoute.'.FavList', $customer->id)}}"  print-lable="اضافة المنتجات"  bg="dark" />
            </div>
        </div>
    </x-html-section>
    <x-html-section>
        <div class="card p-4">
            <input type="hidden" id="customer_id" value="{{$customer->id}}">
            @foreach($FavProduct as  $x => $val )

                <div class="row ajexRemove">
                    <div class="col-lg-12">
                        <h1> {{$x}}</h1>
                    </div>
                </div>


                <div class="row">
                    @foreach($val as $product)
                        <div class="col-lg-4"  id="proCard_{{$product->id}}" >
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-10">
                                            <div class="FavoriteProName">
                                                {{$product->name}}
                                            </div>

                                        </div>
                                        <div class="col-2">
                                            <button class=" btn btn-block bg-gradient-danger btn-sm save_but" id="{{$product->id}}"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            @endforeach

        </div>
    </x-html-section>

@endsection

@push('JsCode')
    <script>
        $(document).ready(function(){
            $(".save_but").click(function(){
                var id = $(this).attr('id');
                var card = '#proCard_'+id;
                var customer_id = $('#customer_id').val();
                $(card).remove();

                // alert(customer_id);
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: '{{route('ShopCustomer.Customer.RemoveFavorite')}}',
                    type: 'POST',
                    dataType: 'text',
                    data: {
                        product_id: id,
                        customer_id:customer_id
                    },
                    success: function (response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endpush

