<div class="col-xl-3 col-lg-4">
    <div class="sidebar">
        <div class="widget">
            <h3 class="widget_title def_h3">{{ __('web/def.Main_Categories') }}</h3>
            <ul class="widget_categories">

                @foreach($ShopMenuCategory as $MainCategory)
                    <li><a href="{{route('Shop_CategoryView',$MainCategory->slug)}}">
                            <span class="categories_name">{{$MainCategory->name}}</span>
                            <span class="categories_num"> @if( count($MainCategory->recursive_product_shop) > 0) ({{ count($MainCategory->recursive_product_shop) }}) @endif  </span>
                        </a></li>
                @endforeach
            </ul>
        </div>


        <div class="widget ">
            <h3 class="widget_title def_h3">{{__('web/def.Recent_Items')}}</h3>
            <ul class="widget_recent_post">
                @foreach($RecentProduct as $RProduct)
                    <li>
                        <div class="post_img">
                            <a href="#"><img src="{{getPhotoPath($RProduct->photo_thum_1)}}" alt="shop_small1"></a>
                        </div>
                        <div class="post_content">
                            <h6 class="product_title"><a href="#">{{$RProduct->name}}</a></h6>
                            <x-shop.print-product-price :product="$RProduct"/>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>


    </div>
</div>
