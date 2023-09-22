<div class="product">
    <a href="{{route('Shop_ProductView',[$category->id,$product->slug])}}">
        <div class="product_img">
            <img src="{{getPhotoPath($product->photo_thum_1,'categorie')}}" alt="product_img3">
        </div>
    </a>
    <div class="product_info">
        <h6 class="product_title"><a href="{{route('Shop_ProductView',[$category->id,$product->slug])}}">{{$product->name}}</a></h6>
        <x-shop.print-product-price :product="$product"/>

        <div class="rating_wrap rating_wrap_new">
            <div class="add_to_cart_new quantity_new" >

                <input type="button" value="-" class="minus">
                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                <input type="button" value="+" class="plus">

            </div>
            <span class="add_to_cart_new"><a href="#" ><i class="icon-basket-loaded"></i></a></span>

        </div>



        @if($agent->isMobile() == false)
            <div class="pr_desc">
                <p>{{$product->des}}</p>
            </div>
        @endif
    </div>
</div>
