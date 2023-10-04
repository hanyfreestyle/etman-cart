<?php


use App\Helpers\AdminHelper;
use App\Http\Controllers\admin\AttributeTableController;
use App\Http\Controllers\admin\BannerCategoryController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BlogPostController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CategoryTableController;
use App\Http\Controllers\admin\FaqCategoryController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\OurClientController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductTableController;
use App\Http\Controllers\admin\shop\CustomerController;
use App\Http\Controllers\admin\ShopCategoryController;
use App\Http\Controllers\admin\ShopProductController;
use App\Http\Controllers\AdminMainController;




Route::get('/Customer',[CustomerController::class,'index'])->name('ShopCustomer.Customer.index');


Route::get('/Customer/create',[CustomerController::class,'create'])->name('ShopCustomer.Customer.create');
Route::get('/Customer/edit/{id}',[CustomerController::class,'edit'])->name('ShopCustomer.Customer.edit');
Route::get('/Customer/destroy/{id}',[CustomerController::class,'destroy'])->name('ShopCustomer.Customer.destroy');
Route::post('/Customer/update/{id}',[CustomerController::class,'storeUpdate'])->name('ShopCustomer.Customer.update');


Route::get('/Customer/AddAddress/{id}',[CustomerController::class,'AddAddress'])->name('ShopCustomer.Customer.add_Address');










Route::get('/ShopCategory/emptyPhoto/{id}', [ShopCategoryController::class,'emptyPhoto'])->name('Shop.shopCategory.emptyPhoto');
Route::get('/ShopCategory/emptyIcon/{id}', [ShopCategoryController::class,'emptyIcon'])->name('Shop.shopCategory.emptyIcon');
Route::get('/ShopCategory/Config',[ShopCategoryController::class,'config'])->name('Shop.shopCategoryConfig.Config');

Route::get('/ShopCategory/CatSort/{id}',[ShopCategoryController::class,'CategorySort'])->name('Shop.shopCategory.CatSort');
Route::post('/ShopCategory/SaveSort',[ShopCategoryController::class,'CategorySaveSort'])->name('Shop.shopCategory.CategorySaveSort');



Route::get('/Orders',[ShopCategoryController::class,'index'])->name('ShopOrders.Orders.index');
