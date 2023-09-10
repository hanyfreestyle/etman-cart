<div class="product">
    <div class="product_img">
        <a href="#">
            <img src="{{getPhotoPath($product->photo,'categorie')}}" alt="product_img1">
        </a>
        <div class="product_action_box">
            <ul class="list_none pr_action_btn">
                <li><a href="{{route('Page_WebPro_Qview',$product->slug)}}" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="product_info">
        <h6 class="product_title"><a href="{{route('Page_WebProductView',$product->slug)}}">{{$product->name}}</a></h6>

        <div class="pr_desc">
            <p> {{$product->g_des}}</p>
        </div>
{{--        <div class="list_product_action_box">--}}
{{--            <a class="btn btn-danger btn-sm" href="{{route('Page_WebProductView',$product->slug)}}">{{__('web/def.View_Details')}}</a>--}}
{{--        </div>--}}
    </div>
</div>
