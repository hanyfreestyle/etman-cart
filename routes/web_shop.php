<?php

use App\Http\Controllers\shopping\ShoppingCartController;
use App\Http\Controllers\web\ShopPageController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'EtmanShop'], function(){

    Route::middleware(['EtmanShopEnsure'])->group(function (){

        Route::get('/',
            [ShopPageController::class, 'Shop_HomePage'])->name('Shop_HomePage');

        Route::get(__('routes.ShopMainCategory'),
            [ShopPageController::class, 'MainCategory'])->name('Shop_MainCategory');

        Route::get(__('routes.ShopCategoryView'),
            [ShopPageController::class, 'ShopCategoryView'])->name('Shop_CategoryView');

        Route::get(__('routes.ShopProductView'),
            [ShopPageController::class, 'ShopProductView'])->name('Shop_ProductView');

        Route::get(__('routes.Recently'),
            [ShopPageController::class, 'Recently'])->name('Shop_Recently');

        Route::get(__('routes.WeekOffers'),
            [ShopPageController::class, 'WeekOffers'])->name('Shop_WeekOffers');

        Route::get(__('routes.BestDeals'),
            [ShopPageController::class, 'BestDeals'])->name('Shop_BestDeals');

        Route::get(LaravelLocalization::transRoute('routes.FaqList'),
            [ShopPageController::class, 'FaqList'])->name('Shop_FaqList');

        Route::get(LaravelLocalization::transRoute('routes.FaqCatView'),
            [ShopPageController::class, 'FaqCatView'])->name('Shop_FaqCatView');

        Route::get('/CartView',
            [ShoppingCartController::class, 'CartView'])->name('Shop_CartView');

        Route::get('/CartEmpty',
            [ShoppingCartController::class, 'CartEmpty'])->name('Shop_CartEmpty');

    });







});



