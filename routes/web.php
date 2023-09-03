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
  //  Route::get('/{slug}', [WebPageController::class, 'PageView'])->name('WebPageView');
//    Route::get('/', [WebPageController::class, 'index'])->name('Web_Home_Page');
//    Route::get('/AboutUs', [WebPageController::class, 'About'])->name('Web_About_Us');
//
//
//        Route::get('/contact-us', [PageController::class, 'contactUs'])->name('menu-contact-us');
//
//        Route::get('/developers', [PageController::class, 'DevelopersPage'])->name('menu-developers');
//        Route::get('/developers/{slug}', [PageController::class, 'DeveloperView'])->name('page-developer-view');
//
//
//        Route::get('/blog', [PageController::class, 'BlogPageList'])->name('menu-blog');
//        Route::get('/blog/{catSlug}', [PageController::class, 'BlogCatList'])->name('blogCatList');
//        Route::get('/blog/{catSlug}/{postSlug}', [PageController::class, 'BlogView'])->name('blogView');

});


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localize' ]], function () {

    Route::get(LaravelLocalization::transRoute('routes.AboutUs'),[WebPageController::class, 'AboutUs'])
        ->name('Page_AboutUs');

    Route::get(LaravelLocalization::transRoute('routes.OurClient'),[WebPageController::class, 'OurClient'])
        ->name('Page_OurClient');


    Route::get(LaravelLocalization::transRoute('routes.LatestNews'),[WebPageController::class, 'LatestNews'])
        ->name('Page_LatestNews');

    Route::get(LaravelLocalization::transRoute('routes.FaqList'),[WebPageController::class, 'FaqList'])
        ->name('Page_FaqList');

    Route::get(LaravelLocalization::transRoute('routes.TermsConditions'),[WebPageController::class, 'TermsConditions'])
        ->name('Page_TermsConditions');

    Route::get(LaravelLocalization::transRoute('routes.ContactUs'),[WebPageController::class, 'ContactUs'])
        ->name('Page_ContactUs');




});


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     text



