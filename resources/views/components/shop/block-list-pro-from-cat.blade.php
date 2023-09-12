
<div class="product">

    <div class="product_img">
        <a href="{{route('Shop_ProductView',$product->slug)}}">
            <img src="{{getPhotoPath($product->photo,'categorie')}}" alt="product_img3">
        </a>
        <div class="product_action_box">
            <ul class="list_none pr_action_btn">
                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i>{{__('web/cart.Add To Cart')}}</a></li>
                <li><a href="{{route('Shop_Pro_Qview',$product->slug)}}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="product_info">
        <h6 class="product_title"><a href="{{route('Shop_ProductView',$product->slug)}}">{{$product->name}}</a></h6>


        @if(intval($product->g_title) > 0 )
            <div class="product_price">
                <span class="price">{{number_format(intval($product->g_title))}} {{__('web/cart.EGP')}}</span>
                <del>{{intval($product->g_title)+10}} {{__('web/cart.EGP')}}</del>
            </div>
        @else
            <div class="product_price">
                @php
                    $thisprice = rand(100,500)
                @endphp
                <span class="price">{{ $thisprice }}{{__('web/cart.EGP')}} </span>
                <del>{{ $thisprice + 50 }}{{__('web/cart.EGP')}}</del>
            </div>
        @endif



        <div class="rating_wrap">

        </div>



            @if($agent->isMobile() == false)
            <div class="pr_desc">
                <p>{{$product->des}}</p>
            </div>
            @endif



        <div class="list_product_action_box">
            <ul class="list_none pr_action_btn">
                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i></a></li>

                <li><a href="{{route('Shop_Pro_Qview',$product->slug)}}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>

            </ul>
        </div>
    </div>
</div>
