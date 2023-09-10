<?php

use App\Http\Controllers\HomeController;
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
    Route::get('/web/Qview/{slug}', [WebPageController::class, 'WebPro_Qview'])->name('Page_WebPro_Qview');

});


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localize' ]], function () {

    Route::get(LaravelLocalization::transRoute('routes.AboutUs'),[WebPageController::class, 'AboutUs'])
        ->name('Page_AboutUs');

    Route::get(LaravelLocalization::transRoute('routes.OurClient'),[WebPageController::class, 'OurClient'])
        ->name('Page_OurClient');

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


