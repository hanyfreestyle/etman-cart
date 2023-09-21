

<div class="product">

    <div class="product_img">
        <a href="{{route('Shop_ProductView',$product->slug)}}">
            <img src="{{getPhotoPath($product->photo,'categorie')}}" alt="product_img3">
        </a>

    </div>
    <div class="product_info">
        <h6 class="product_title"><a href="{{route('Shop_ProductView',[$product->slug,$category->id])}}">{{$product->name}}</a></h6>

        @if(intval($product->price) > 0 )
            <div class="product_price">
                <span class="price">{{number_format($product->price)}} <span class="currency">{{__('web/cart.EGP')}}</span></span>
                @if(intval($product->discount_price) > 0 and  $product->discount_price < $product->price )

                    <del>{{number_format($product->discount_price)}} <span class="currency">{{__('web/cart.EGP')}}</span></del>
                @endif

            </div>
        @endif


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



        {{--        <div class="list_product_action_box">--}}
        {{--            <ul class="list_none pr_action_btn">--}}
        {{--                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i></a></li>--}}

        {{--                <li><a href="{{route('Shop_Pro_Qview',$product->slug)}}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>--}}

        {{--            </ul>--}}
        {{--        </div>--}}
    </div>
</div>
