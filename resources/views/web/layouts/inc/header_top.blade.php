<div class="top-header light_skin bg_dark d-none d-md-block">
    <div class="{{ $PageView['container'] }}">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="header_topbar_info">
                    <div class="header_offer">
                        <span>Free Ground Shipping Over $250</span>
                    </div>
                    <div class="download_wrap">
                        <span class="me-3">Download App</span>
                        <ul class="icon_list text-center text-lg-start">
                            <li><a href="#"><i class="fab fa-apple"></i></a></li>
                            <li><a href="#"><i class="fab fa-android"></i></a></li>
                            <li><a href="#"><i class="fab fa-windows"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <a class="text-white lang_text " href="{{ LaravelLocalization::getLocalizedURL(webChangeLocale(), null, [], true) }}">
                            <span class="lang_icon"> <img src="{{ defWebAssets('img/'.webChangeLocale().'.png') }}" alt=""></span>
                            {{webChangeLocaletext()}}
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
