<div class="col-xl-3 col-lg-4">
    <div class="sidebar">
        <div class="widget">
            <h3 class="widget_title def_h3">{{ __('web/def.Main_Categories') }}</h3>
            <ul class="widget_categories">

                @foreach($MenuCategory as $MainCategory)
                    @if($loop->index < 10)
                        <li><a href="{{route('Page_WebCategoryView',$MainCategory->slug)}}">
                                <span class="categories_name">{{$MainCategory->name}}</span>
                                <span class="categories_num"> @if( $MainCategory->children_count> 0) ({{$MainCategory->children_count}}) @endif  </span>
                            </a></li>

                    @endif
                @endforeach
            </ul>
        </div>

        @if($Category->children_count > 0 or $Category->table_data_count > 0)
            <div class="widget ">
                <h3 class="widget_title def_h3">{{__('web/def.Recent_Items')}}</h3>
                <ul class="widget_recent_post">
                    @foreach($RecentProduct as $RProduct)
                        <li>
                            <div class="post_img">
                                <a href="#"><img src="{{getPhotoPath($RProduct->photo)}}" alt="shop_small1"></a>
                            </div>
                            <div class="post_content">
                                <h6 class="product_title"><a href="#">{{$RProduct->name}}</a></h6>
                                <div class="product_price"><span class="price">$55.00</span><del>$95.00</del></div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</div>
