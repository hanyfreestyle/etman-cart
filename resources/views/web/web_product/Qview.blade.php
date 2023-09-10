
<div class="ajax_quick_view">
    <div class="row ProductViewPage" >

        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
            <div class="product-image">



                <div class="product_img_box">
                    @foreach($Product->more_photos as $photo)
                        @if($loop->index == 0)
                            <img id="product_img" src='{{getPhotoPath($photo->photo_thum_1)}}' data-zoom-image="{{getPhotoPath($photo->photo_thum_1)}}" alt="product_img1" />
                        @endif
                    @endforeach
                </div>
                <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                    @foreach($Product->more_photos as $photo)
                        <div class="item">
                            <a href="#" class="product_gallery_item  @if($loop->index == 0) active @endif" data-image="{{getPhotoPath($photo->photo_thum_1)}}" data-zoom-image="{{getPhotoPath($photo->photo_thum_1)}}">
                                <img src="{{getPhotoPath($photo->photo_thum_1)}}" alt="product_small_img1" />
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="pr_detail">
                <div class="product_description">
                    <h4 class="product_title">{{$Product->name}}</h4>
                    <div class="pro_des">
                        <p class="addReadMore showlesscontent" >{{$Product->des}}</p>
                    </div>
                </div>

                @if($Product->table_data_count)
                    <x-website.block-additional-table :row-data="$Product->table_data" />
                @endif


                <hr />
                <ul class="product-meta">
                    <li> {{__('web/def.lable_SKU')}} <a href="#">  <span>5041315101040</span> </a></li>
                    <li> {{__('web/def.lable_Category')}}<a href="{{ route('Page_WebCategoryView',$Product->categoryName->slug)}}"><span> {{$Product->categoryName->name}}</span></a></li>
                </ul>


            </div>
        </div>
    </div>
</div>


<script src="{{ defWebAssets('js/scripts.js') }}"></script>
<script>
    $(function() {
        AddReadMore("250","عرض المزيد","عرض اقل");
    });
</script>
