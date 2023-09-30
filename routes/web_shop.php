<?php

use App\Http\Controllers\customer\ProfileController;
use App\Http\Controllers\UsersCustomersController;
use App\Http\Controllers\UsersProfilesController;
use App\Http\Controllers\web\ShopPageController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'EtmanShop'], function(){

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
    Route::get('/CartEmpty',
        [ShopPageController::class, 'CartEmpty'])->name('Shop_CartEmpty');
    Route::get('/CartView',
        [ShopPageController::class, 'CartView'])->name('Shop_CartView');



    Route::middleware(['guest:customer'])->group(function (){

        Route::get('/login',
            [UsersCustomersController::class, 'CustomerLogin'])->name('Customer_login');

        Route::post('/loginCheck',
            [UsersCustomersController::class, 'CustomerLoginCheck'])->name('Customer_loginCheck');

        Route::get('/sign-up',
            [UsersCustomersController::class, 'CustomerSignUp'])->name('Customer_Register');


        Route::post('/create',
            [UsersCustomersController::class,"CustomerCreate"])->name('Customer_Create');
    });


    Route::middleware('auth:customer')->group(function (){

        Route::post('/logout',
            [UsersCustomersController::class, 'CustomerLogout'])->name('Customer_logout');

        Route::get('/profile',
            [ProfileController::class, 'ProfileView'])->name('Customer_Profile');

        Route::post('/profile/update',
            [ProfileController::class, 'ProfileUpdate'])->name('Customer_Profile_Update');

        Route::get('/profile/address',
            [ProfileController::class, 'Profile_Address_List'])->name('Profile_Address');

        Route::get('/profile/address/add',
            [ProfileController::class, 'Profile_Address_Add'])->name('Profile_Address_Add');

        Route::post('/profile/address/save',
            [ProfileController::class, 'Profile_Address_Save'])->name('Profile_Address_Save');

        Route::get('/profile/address/edit/{uuid:uuid}',
            [ProfileController::class, 'Profile_Address_Edit'])->name('Profile_Address_Edit');

        Route::post('/profile/address/update/{uuid}',
            [ProfileController::class, 'Profile_Address_Update'])->name('Profile_Address_Update');

        Route::post('/profile/address/updatedef/{uuid}',
            [ProfileController::class, 'Profile_Address_UpdateDefault'])->name('Profile_Address_UpdateDefault');


        Route::get('/profile/password',
            [ProfileController::class, 'Profile_ChangePassword'])->name('Profile_ChangePassword');

        Route::post('/profile/password/update',
            [ProfileController::class, 'Profile_ChangePasswordUpdate'])->name('Profile_ChangePasswordUpdate');


        Route::get('/profile/order',
            [ProfileController::class, 'Profile_OrdersList'])->name('Profile_OrdersList');


        Route::get('/CartConfirm',
            [ShopPageController::class, 'CartConfirm'])->name('Shop_CartConfirm');

        Route::post('/CartOrderSave',
            [ShopPageController::class, 'CartOrderSave'])->name('Shop_CartOrderSave');


    });


});



