<div class="middle-header dark_skin">
    <div class="{{ $PageView['container'] }}">
        <div class="nav_block">
            <a class="navbar-brand" href="#">
                <img class="logo_dark header_logo" src="{{ defWebAssets('images/logo_dark.png') }}" alt="logo" />
            </a>

            @if($PageView['top_search_view'])
                <div class="product_search_form radius_input search_form_btn">
                    <form>
                        <div class="input-group">
                            @if($PageView['top_search_view_cat'])
                                <div class="input-group-prepend">
                                    <div class="custom_select">
                                        <select class="first_null not_chosen">
                                            <option value="">{{__('web/def.All_Category')}}</option>
                                            <option value="Dresses">Dresses</option>
                                            <option value="Shirt-Tops">Shirt &amp; Tops</option>
                                            <option value="T-Shirt">T-Shirt</option>
                                            <option value="Pents">Pents</option>
                                            <option value="Jeans">Jeans</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <input class="form-control" placeholder="{{__('web/header.Search_Product')}}" required="" type="text">
                            <button type="submit" class="search_btn3">{{__('web/def.but_search')}}</button>
                        </div>
                    </form>
                </div>
            @endif

            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">0</span></a></li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-bs-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                @foreach($CartList as $ProductCart)
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="{{getPhotoPath($ProductCart->photo,"blog")}}" alt="cart_thumb1">
                                        <span class="cart_item_name">
                                            {{$ProductCart->name}}
                                        </span>

                                        </a>
                                        <span class="cart_quantity forcDir"> 1 x <span class="cart_amount"></span>150</span>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>{{__('web/cart.Subtotal')}}</strong>
                                    <span class="cart_price"> <span class="price_symbole"></span></span>300.00</p>
                                <p class="cart_buttons">
                                    <a href="#" class="btn btn-fill-line rounded-0 view-cart">{{__('web/cart.View_Cart')}}</a>
                                    <a href="#" class="btn btn-fill-out rounded-0 checkout">{{__('web/cart.Confirm_Order')}}</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>


        </div>
    </div>
</div>
