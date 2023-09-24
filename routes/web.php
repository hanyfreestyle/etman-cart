<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\web\ShopPageController;
use App\Http\Controllers\web\TestController;
use App\Http\Controllers\web\WebPageController;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Auth::viaRemember();



Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
    Route::get('/', [WebPageController::class, 'HomePage'])->name('Page_HomePage');
    Route::get('/Test', [TestController::class, 'Test'])->name('Page_HomePageTest');

    Route::get('/web/Qview/{slug}', [WebPageController::class, 'WebPro_Qview'])->name('Page_WebPro_Qview');
    Route::get('/shop/Qview/{slug}', [ShopPageController::class, 'Pro_Qview'])->name('Shop_Pro_Qview');

});


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localize' ]], function () {

    Route::get(LaravelLocalization::transRoute('routes.AboutUs'),[WebPageController::class, 'AboutUs'])
        ->name('Page_AboutUs');

    Route::get(LaravelLocalization::transRoute('routes.OurClient'),[WebPageController::class, 'OurClient'])
        ->name('Page_OurClient');

    Route::get(LaravelLocalization::transRoute('routes.Careers'),[WebPageController::class, 'Careers'])
        ->name('Page_Careers');


    Route::get(LaravelLocalization::transRoute('routes.ContactUs'),[WebPageController::class, 'ContactUs'])
        ->name('Page_ContactUs');

    Route::get(LaravelLocalization::transRoute('routes.TermsConditions'),[WebPageController::class, 'TermsConditions'])
        ->name('Page_TermsConditions');


    Route::get(LaravelLocalization::transRoute('routes.FaqList'),[WebPageController::class, 'FaqList'])
        ->name('Page_FaqList');

    Route::get(LaravelLocalization::transRoute('routes.FaqCatView'),[WebPageController::class, 'FaqCatView'])
        ->name('Page_FaqCatView');


    Route::get(LaravelLocalization::transRoute('routes.LatestNews'),[WebPageController::class, 'LatestNews'])
        ->name('Page_LatestNews');

    Route::get(LaravelLocalization::transRoute('routes.LatestNews_View'),[WebPageController::class, 'LatestNews_View'])
        ->name('LatestNews_View');


    Route::get(LaravelLocalization::transRoute('routes.MainCategory'),[WebPageController::class, 'MainCategory'])
        ->name('Page_MainCategory');

    Route::get(LaravelLocalization::transRoute('routes.WebCategoryView'),[WebPageController::class, 'WebCategoryView'])
        ->name('Page_WebCategoryView');

    Route::get(LaravelLocalization::transRoute('routes.WebProductView'),[WebPageController::class, 'WebProductView'])
        ->name('Page_WebProductView');




});


Route::group(['prefix' => 'EtmanShop'], function(){
    Route::get('/', [ShopPageController::class, 'Shop_HomePage'])->name('Shop_HomePage');

    Route::get(__('routes.ShopMainCategory'),[ShopPageController::class, 'MainCategory'])
        ->name('Shop_MainCategory');


    Route::get(__('routes.ShopCategoryView'),[ShopPageController::class, 'ShopCategoryView'])
        ->name('Shop_CategoryView');

    Route::get(__('routes.ShopProductView'),[ShopPageController::class, 'ShopProductView'])
        ->name('Shop_ProductView');





    Route::get(__('routes.Recently'),[ShopPageController::class, 'Recently'])
        ->name('Shop_Recently');

    Route::get(__('routes.WeekOffers'),[ShopPageController::class, 'WeekOffers'])
        ->name('Shop_WeekOffers');

    Route::get(__('routes.BestDeals'),[ShopPageController::class, 'BestDeals'])
        ->name('Shop_BestDeals');



    Route::get(LaravelLocalization::transRoute('routes.FaqList'),[ShopPageController::class, 'FaqList'])
        ->name('Shop_FaqList');

    Route::get(LaravelLocalization::transRoute('routes.FaqCatView'),[ShopPageController::class, 'FaqCatView'])
        ->name('Shop_FaqCatView');


    Route::get('/test',[ShopPageController::class, 'Test'])
        ->name('Shop_Test');


    Route::get('/CartEmpty',[ShopPageController::class, 'CartEmpty'])
        ->name('Shop_CartEmpty');

    Route::get('/CartView',[ShopPageController::class, 'CartView'])
        ->name('Shop_CartView');

});



