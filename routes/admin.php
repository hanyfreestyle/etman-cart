<?php


use App\Helpers\AdminHelper;
use App\Http\Controllers\admin\AttributeTableController;
use App\Http\Controllers\admin\BannerCategoryController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BlogPostController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CategoryTableController;
use App\Http\Controllers\admin\OurClientController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductTableController;
use App\Http\Controllers\AdminMainController;



Route::get('/Home',[AdminMainController::class,'Home'])->name('admin.Dashboard');
Route::get('/Home/Update',[AdminMainController::class,'Update'])->name('admin.Dashboard.Update');

Route::get('/OurClient',[OurClientController::class,'index'])->name('OurClient.index');
Route::get('/OurClient/create',[OurClientController::class,'create'])->name('OurClient.create');
Route::get('/OurClient/edit/{id}',[OurClientController::class,'edit'])->name('OurClient.edit');
Route::get('/OurClient/destroy/{id}',[OurClientController::class,'destroy'])->name('OurClient.destroy');
Route::post('/OurClient/update/{id}',[OurClientController::class,'storeUpdate'])->name('OurClient.update');
Route::get('/OurClient/emptyPhoto/{id}', [OurClientController::class,'emptyPhoto'])->name('OurClient.emptyPhoto');
Route::get('/OurClient/Sort',[OurClientController::class,'Sort'])->name('OurClient.Sort');
Route::post('/OurClient/SaveSort', [OurClientController::class,'SaveSort'])->name('OurClient.SaveSort');
Route::get('/OurClient/Config',[OurClientController::class,'config'])->name('OurClient.Config');

Route::get('/Category',[CategoryController::class,'index'])->name('webPro.category.index');
Route::get('/Category/Main',[CategoryController::class,'index'])->name('webPro.category.index_Main');
Route::get('/Category/SubCategory/{id}',[CategoryController::class,'SubCategory'])->name('webPro.category.SubCategory');
Route::get('/Category/create',[CategoryController::class,'create'])->name('webPro.category.create');
Route::get('/Category/edit/{id}',[CategoryController::class,'edit'])->name('webPro.category.edit');
Route::get('/Category/destroy/{id}',[CategoryController::class,'destroy'])->name('webPro.category.destroy');
Route::post('/Category/update/{id}',[CategoryController::class,'storeUpdate'])->name('webPro.category.update');
Route::get('/Category/emptyPhoto/{id}', [CategoryController::class,'emptyPhoto'])->name('webPro.category.emptyPhoto');
Route::get('/Category/Config',[CategoryController::class,'config'])->name('webPro.categoryConfig.Config');

Route::get('/Category/TableList/{id}',[CategoryTableController::class,'TableList'])->name('webPro.category.Table_list');
Route::get('/Category/Table/edit/{id}',[CategoryTableController::class,'TableEdit'])->name('webPro.category.Table_edit');
Route::post('/Category/Table/update/{id}',[CategoryTableController::class,'TableStoreUpdate'])->name('webPro.category.Table_update');
Route::get('/Category/Table/destroy/{id}',[CategoryTableController::class,'TableDestroy'])->name('webPro.category.Table_destroy');
Route::get('/Category/Table/Sort/{project_id}',[CategoryTableController::class,'TableSort'])->name('webPro.category.Table_Sort');
Route::post('/Category/Table/SaveSort', [CategoryTableController::class,'TableSortSave'])->name('webPro.category.TableSortSave');


Route::get('/Product',[ProductController::class,'index'])->name('webPro.Product.index');
Route::get('/Product/ListCategory/{Categoryid}',[ProductController::class,'ListCategory'])->name('webPro.Product.ListCategory');
Route::get('/Product/create',[ProductController::class,'create'])->name('webPro.Product.create');
Route::get('/Product/edit/{id}',[ProductController::class,'edit'])->name('webPro.Product.edit');
Route::get('/Product/destroy/{id}',[ProductController::class,'destroy'])->name('webPro.Product.destroy');
Route::post('/Product/update/{id}',[ProductController::class,'storeUpdate'])->name('webPro.Product.update');
Route::get('/Product/emptyPhoto/{id}', [ProductController::class,'emptyPhoto'])->name('webPro.Product.emptyPhoto');

Route::get('/Product/photos/{id}',[ProductController::class,'ListMorePhoto'])->name('webPro.Product.More_Photos');
Route::post('/Product/saveSort', [ProductController::class,'sortPhotoSave'])->name('webPro.Product.sortPhotoSave');
Route::post('/Product/AddMore',[ProductController::class,'AddMorePhotos'])->name('webPro.Product.More_PhotosAdd');
Route::get('/Product/PhotoDel/{id}',[ProductController::class,'More_PhotosDestroy'])->name('webPro.Product.More_PhotosDestroy');


Route::get('/Product/TableList/{id}',[ProductTableController::class,'TableList'])->name('webPro.Product.Table_list');
Route::get('/Product/Table/edit/{id}',[ProductTableController::class,'TableEdit'])->name('webPro.Product.Table_edit');
Route::post('/Product/Table/update/{id}',[ProductTableController::class,'TableStoreUpdate'])->name('webPro.Product.Table_update');
Route::get('/Product/Table/destroy/{id}',[ProductTableController::class,'TableDestroy'])->name('webPro.Product.Table_destroy');
Route::get('/Product/Table/Sort/{project_id}',[ProductTableController::class,'TableSort'])->name('webPro.Product.Table_Sort');
Route::post('/Product/Table/SaveSort', [ProductTableController::class,'TableSortSave'])->name('webPro.Product.TableSortSave');



Route::get('/AttributeTables',[AttributeTableController::class,'index'])->name('webPro.AttributeTables.index');
Route::get('/AttributeTables/create',[AttributeTableController::class,'create'])->name('webPro.AttributeTables.create');
Route::get('/AttributeTables/edit/{id}',[AttributeTableController::class,'edit'])->name('webPro.AttributeTables.edit');
Route::post('/AttributeTables/update/{id}',[AttributeTableController::class,'storeUpdate'])->name('webPro.AttributeTables.update');
Route::get('/AttributeTables/destroy/{id}',[AttributeTableController::class,'destroy'])->name('webPro.AttributeTables.destroy');
Route::get('/AttributeTables/SoftDelete/',[AttributeTableController::class,'SoftDeletes'])->name('webPro.AttributeTables.SoftDelete');
Route::get('/AttributeTables/restore/{id}',[AttributeTableController::class,'restored'])->name('webPro.AttributeTables.restore');
Route::get('/AttributeTables/force/{id}',[AttributeTableController::class,'ForceDeletes'])->name('webPro.AttributeTables.force');


Route::get('/Blog',[BlogPostController::class,'index'])->name('BlogPost.index');
Route::get('/Blog/create',[BlogPostController::class,'create'])->name('BlogPost.create');
Route::get('/Blog/edit/{id}',[BlogPostController::class,'edit'])->name('BlogPost.edit');
Route::get('/Blog/destroy/{id}',[BlogPostController::class,'destroy'])->name('BlogPost.destroy');
Route::post('/Blog/update/{id}',[BlogPostController::class,'storeUpdate'])->name('BlogPost.update');
Route::get('/Blog/emptyPhoto/{id}', [BlogPostController::class,'emptyPhoto'])->name('BlogPost.emptyPhoto');
Route::get('/Blog/Config',[BlogPostController::class,'config'])->name('BlogPost.Config');

Route::get('/Blog/SoftDelete/',[BlogPostController::class,'SoftDeletes'])->name('BlogPost.SoftDelete');
Route::get('/Blog/restore/{id}',[BlogPostController::class,'restored'])->name('BlogPost.restore');
Route::get('/Blog/force/{id}',[BlogPostController::class,'ForceDeletes'])->name('BlogPost.force');

Route::get('/Blog/photos/{id}',[BlogPostController::class,'ListMorePhoto'])->name('BlogPost.More_Photos');
Route::post('/Blog/saveSort', [BlogPostController::class,'sortPhotoSave'])->name('BlogPost.sortPhotoSave');
Route::post('/Blog/AddMore',[BlogPostController::class,'AddMorePhotos'])->name('BlogPost.More_PhotosAdd');
Route::get('/Blog/PhotoDel/{id}',[BlogPostController::class,'More_PhotosDestroy'])->name('BlogPost.More_PhotosDestroy');

Route::get('/Banner/Config',[BannerCategoryController::class,'config'])->name('Banners.Config');
Route::get('/Banner/Category',[BannerCategoryController::class,'index'])->name('Banners.BannerCat.index');
Route::get('/Banner/Category/create',[BannerCategoryController::class,'create'])->name('Banners.BannerCat.create');
Route::get('/Banner/Category/edit/{id}',[BannerCategoryController::class,'edit'])->name('Banners.BannerCat.edit');
Route::get('/Banner/Category/destroy/{id}',[BannerCategoryController::class,'destroy'])->name('Banners.BannerCat.destroy');
Route::post('/Banner/Category/update/{id}',[BannerCategoryController::class,'storeUpdate'])->name('Banners.BannerCat.update');
Route::get('/Banner/Category/SoftDelete/',[BannerCategoryController::class,'SoftDeletes'])->name('Banners.BannerCat.SoftDelete');
Route::get('/Banner/Category/restore/{id}',[BannerCategoryController::class,'restored'])->name('Banners.BannerCat.restore');
Route::get('/Banner/Category/force/{id}',[BannerCategoryController::class,'ForceDeletes'])->name('Banners.BannerCat.force');

Route::get('/Banner',[BannerController::class,'index'])->name('Banners.Banner.index');
Route::get('/Banner/ListCategory/{Categoryid}',[BannerController::class,'ListCategory'])->name('Banners.Banner.ListCategory');
Route::get('/Banner/create',[BannerController::class,'create'])->name('Banners.Banner.create');
Route::get('/Banner/edit/{id}',[BannerController::class,'edit'])->name('Banners.Banner.edit');
Route::get('/Banner/destroy/{id}',[BannerController::class,'destroy'])->name('Banners.Banner.destroy');
Route::post('/Banner/update/{id}',[BannerController::class,'storeUpdate'])->name('Banners.Banner.update');
//Route::get('/Banner/emptyPhoto/{id}', [BannerController::class,'emptyPhoto'])->name('Banners.Banner.emptyPhoto');

//Route::get('/Banner/SoftDelete/',[BannerController::class,'SoftDeletes'])->name('Banners.Banner.SoftDelete');
//Route::get('/Banner/restore/{id}',[BannerController::class,'restored'])->name('Banners.Banner.restore');
//Route::get('/Banner/force/{id}',[BannerController::class,'ForceDeletes'])->name('Banners.Banner.force');
//
//
Route::get('/Banner/Sort/{Categoryid}',[BannerController::class,'Sort'])->name('Banners.Banner.Sort');
Route::post('/Banner/SaveSort', [BannerController::class,'SaveSort'])->name('Banners.Banner.SaveSort');






