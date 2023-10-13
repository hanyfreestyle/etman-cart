<x-html-section>
    <div class="row ajexShow">
        <div class="col-lg-12">
            <h1>{{$category->name}}</h1>
        </div>
    </div>


    <input type="hidden" name="customer_id" id="customer_id" value="{{$customer_id}}">
    <div class="row">
        @foreach($products as $product)
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
                                <button class=" btn btn-block bg-gradient-primary btn-sm  save_but" id="{{$product->id}}"><i class="fas fa-upload"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-html-section>


<script src="{{defAdminAssets('plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".save_but").click(function(){
            var id = $(this).attr('id');
            var card = '#proCard_'+id;
            var customer_id = $('#customer_id').val();
            $(card).remove();
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '{{route('ShopCustomer.Customer.AddFavorite')}}',
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

