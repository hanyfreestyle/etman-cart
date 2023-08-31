<div class="categories_wrap">
    <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn categories_menu">
        <span> {{__('web/menu.All_Categories')}}</span><i class="linearicons-menu"></i>
    </button>
    <div id="navCatContent" class="navbar collapse">
        <ul>



{{--            @foreach($MenuCategory as $MainCategory)--}}
{{--                <li>{{$MainCategory->name}} {{$MainCategory->children_count}}</li>--}}
{{--                @if($MainCategory->children_count > 0 )--}}
{{--                    @foreach($MainCategory->children  as $SubCategory)--}}
{{--                        @if($loop->index < 2)--}}

{{--                            <li class="mr-5" style="margin-right: 100px!important;">{{$SubCategory->name}} {{count($SubCategory->CatProduct)}}</li>--}}

{{--                            @if(count($SubCategory->CatProduct) > 0 )--}}
{{--                                @foreach($SubCategory->CatProduct as $Product)--}}
{{--                                    <li class="mr-5" style="margin-right: 100px!important;">{{$Product->name}}</li>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            @endforeach--}}


            @foreach($MenuCategory as $MainCategory)
                @if($MainCategory->children_count <= 0 )
                    <li><a class="dropdown-item nav-link nav_item" href="#"><i class="flaticon-printer"></i> <span>{{$MainCategory->name}}</span></a></li>
                @else
                    <li class="dropdown dropdown-mega-menu">
                        <a class="dropdown-item nav-link dropdown-toggler" href="#" data-bs-toggle="dropdown"><i class="flaticon-tv"></i> <span>{{$MainCategory->name}}</span></a>
                        <div class="dropdown-menu">
                            <ul class="mega-menu d-lg-flex">
                                <li class="mega-menu-col col-lg-7">

                                    @if($MainCategory->children_count > 0 )
                                        <ul class="d-lg-flex">

                                            @foreach($MainCategory->children  as $SubCategory)
                                                @if($loop->index < 2)
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li class="dropdown-header">{{$SubCategory->name}}</li>
                                                            @if(count($SubCategory->CatProduct) > 0 )
                                                                @foreach($SubCategory->CatProduct as $Product)

                                                                    <li><a class="dropdown-item nav-link nav_item" href="#">{{$Product->name}}</a></li>
                                                                @endforeach
                                                            @endif
                                                        </ul>
                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    @endif
                                </li>
                                <li class="mega-menu-col col-lg-5">
                                    <div class="header-banner2">
                                        <img src="{{getPhotoPath($MainCategory->photo,"blog")}}" class="rounded" alt="menu_banner1">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif



            @endforeach

{{--            <li>--}}
{{--                <ul class="more_slide_open">--}}
{{--                    <li><a class="dropdown-item nav-link nav_item" href="login.html"><i class="flaticon-fax"></i> <span>Fax Machine</span></a></li>--}}
{{--                    <li><a class="dropdown-item nav-link nav_item" href="register.html"><i class="flaticon-mouse"></i> <span>Mouse</span></a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
{{--        <div class="more_categories">More Categories</div>--}}
    </div>
</div>
