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
use App\Http\Controllers\admin\ShopCategoryController;
use App\Http\Controllers\admin\ShopProductController;
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
Route::get('/Category/AddToWeb',[CategoryController::class,'AddCatToWeb'])->name('webPro.category.AddCatToWeb');

Route::get('/Category/Main',[CategoryController::class,'index'])->name('webPro.category.index_Main');
Route::get('/Category/SubCategory/{id}',[CategoryController::class,'SubCategory'])->name('webPro.category.SubCategory');
Route::get('/Category/create',[CategoryController::class,'create'])->name('webPro.category.create');
Route::get('/Category/edit/{id}',[CategoryController::class,'edit'])->name('webPro.category.edit');
Route::get('/Category/destroy/{id}',[CategoryController::class,'destroy'])->name('webPro.category.destroy');
Route::post('/Category/update/{id}',[CategoryController::class,'storeUpdate'])->name('webPro.category.update');
Route::get('/Category/emptyPhoto/{id}', [CategoryController::class,'emptyPhoto'])->name('webPro.category.emptyPhoto');
Route::get('/Category/emptyIcon/{id}', [CategoryController::class,'emptyIcon'])->name('webPro.category.emptyIcon');
Route::get('/Category/Config',[CategoryController::class,'config'])->name('webPro.categoryConfig.Config');

Route::get('/Category/CatSort/{id}',[CategoryController::class,'CategorySort'])->name('webPro.category.CatSort');
Route::post('/Category/SaveSort',[CategoryController::class,'CategorySaveSort'])->name('webPro.category.CategorySaveSort');



Route::get('/Category/TableList/{id}',[CategoryTableController::class,'TableList'])->name('webPro.category.Table_list');
Route::get('/Category/Table/edit/{id}',[CategoryTableController::class,'TableEdit'])->name('webPro.category.Table_edit');
Route::post('/Category/Table/update/{id}',[CategoryTableController::class,'TableStoreUpdate'])->name('webPro.category.Table_update');
Route::get('/Category/Table/destroy/{id}',[CategoryTableController::class,'TableDestroy'])->name('webPro.category.Table_destroy');
Route::get('/Category/Table/Sort/{project_id}',[CategoryTableController::class,'TableSort'])->name('webPro.category.Table_Sort');
Route::post('/Category/Table/SaveSort', [CategoryTableController::class,'TableSortSave'])->name('webPro.category.TableSortSave');


Route::get('/Product',[ProductController::class,'index'])->name('webPro.Product.index');
Route::get('/Product/AddToWeb',[ProductController::class,'AddProToWeb'])->name('webPro.Product.AddProToWeb');

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
Route::get('/Banner/Sort/{Categoryid}',[BannerController::class,'Sort'])->name('Banners.Banner.Sort');
Route::post('/Banner/SaveSort', [BannerController::class,'SaveSort'])->name('Banners.Banner.SaveSort');





Route::get('/Faq/Config',[FaqCategoryController::class,'config'])->name('FAQ.Config');
Route::get('/Faq/Category',[FaqCategoryController::class,'index'])->name('FAQ.FaqCat.index');
Route::get('/Faq/Category/create',[FaqCategoryController::class,'create'])->name('FAQ.FaqCat.create');
Route::get('/Faq/Category/edit/{id}',[FaqCategoryController::class,'edit'])->name('FAQ.FaqCat.edit');
Route::get('/Faq/Category/destroy/{id}',[FaqCategoryController::class,'destroy'])->name('FAQ.FaqCat.destroy');
Route::post('/Faq/Category/update/{id}',[FaqCategoryController::class,'storeUpdate'])->name('FAQ.FaqCat.update');
Route::get('/Faq/Category/SoftDelete/',[FaqCategoryController::class,'SoftDeletes'])->name('FAQ.FaqCat.SoftDelete');
Route::get('/Faq/Category/restore/{id}',[FaqCategoryController::class,'restored'])->name('FAQ.FaqCat.restore');
Route::get('/Faq/Category/force/{id}',[FaqCategoryController::class,'ForceDeletes'])->name('FAQ.FaqCat.force');
Route::get('/Faq/emptyPhoto/{id}', [FaqCategoryController::class,'emptyPhoto'])->name('FAQ.FaqCat.emptyPhoto');
Route::get('/Faq/Sort/{Categoryid}',[FaqController::class,'Sort'])->name('FAQ.FaqCat.Sort');


Route::get('/Faq',[FaqController::class,'index'])->name('FAQ.FaqList.index');
Route::get('/Faq/ListCategory/{Categoryid}',[FaqController::class,'ListCategory'])->name('FAQ.FaqList.ListCategory');
Route::get('/Faq/create',[FaqController::class,'create'])->name('FAQ.FaqList.create');
Route::get('/Faq/edit/{id}',[FaqController::class,'edit'])->name('FAQ.FaqList.edit');
Route::get('/Faq/destroy/{id}',[FaqController::class,'destroy'])->name('FAQ.FaqList.destroy');
Route::post('/Faq/update/{id}',[FaqController::class,'storeUpdate'])->name('FAQ.FaqList.update');
//Route::get('/Faq/Sort/{Categoryid}',[FaqController::class,'Sort'])->name('FAQ.FaqList.Sort');
Route::post('/Faq/SaveSort', [FaqController::class,'SaveSort'])->name('FAQ.FaqList.SaveSort');


Route::get('/Pages', [PageController::class,'index'])->name('Pages.pageList.index');
Route::get('/Pages/create', [PageController::class,'create'])->name('Pages.pageList.create');
Route::get('/Pages/edit/{id}', [PageController::class,'edit'])->name('Pages.pageList.edit');
Route::post('/Pages/Update/{id}', [PageController::class,'storeUpdate'])->name('Pages.pageList.update');
Route::get('/Pages/delete/{id}', [PageController::class,'delete'])->name('Pages.pageList.destroy');
Route::get('/Pages/config', [PageController::class,'config'])->name('Pages.pageList.config');
Route::get('/Pages/SoftDelete/',[PageController::class,'SoftDeletes'])->name('Pages.pageList.SoftDelete');
Route::get('/Pages/restore/{id}',[PageController::class,'restored'])->name('Pages.pageList.restore');
Route::get('/Pages/force/{id}',[PageController::class,'ForceDeletes'])->name('Pages.pageList.force');
Route::get('/Pages/emptyPhoto/{id}', [PageController::class,'emptyPhoto'])->name('Pages.pageList.emptyPhoto');
Route::get('/Pages/Sort',[PageController::class,'Sort'])->name('Pages.pageList.Sort');
Route::post('/Pages/SaveSort', [PageController::class,'SaveSort'])->name('Pages.pageList.SaveSort');








Route::get('/ShopCategory',[ShopCategoryController::class,'index'])->name('Shop.shopCategory.index');
Route::get('/ShopCategory/Main',[ShopCategoryController::class,'index'])->name('Shop.shopCategory.index_Main');
Route::get('/ShopCategory/SubCategory/{id}',[ShopCategoryController::class,'index'])->name('Shop.shopCategory.SubCategory');
Route::get('/ShopCategory/AddToShop',[ShopCategoryController::class,'AddCatToShop'])->name('Shop.shopCategory.AddCatToShop');
Route::get('/ShopCategory/create',[ShopCategoryController::class,'create'])->name('Shop.shopCategory.create');
Route::get('/ShopCategory/edit/{id}',[ShopCategoryController::class,'edit'])->name('Shop.shopCategory.edit');
Route::get('/ShopCategory/destroy/{id}',[ShopCategoryController::class,'destroy'])->name('Shop.shopCategory.destroy');
Route::post('/ShopCategory/update/{id}',[ShopCategoryController::class,'storeUpdate'])->name('Shop.shopCategory.update');
Route::get('/ShopCategory/emptyPhoto/{id}', [ShopCategoryController::class,'emptyPhoto'])->name('Shop.shopCategory.emptyPhoto');
Route::get('/ShopCategory/emptyIcon/{id}', [ShopCategoryController::class,'emptyIcon'])->name('Shop.shopCategory.emptyIcon');
Route::get('/ShopCategory/Config',[ShopCategoryController::class,'config'])->name('Shop.shopCategoryConfig.Config');

Route::get('/ShopCategory/CatSort/{id}',[ShopCategoryController::class,'CategorySort'])->name('Shop.shopCategory.CatSort');
Route::post('/ShopCategory/SaveSort',[ShopCategoryController::class,'CategorySaveSort'])->name('Shop.shopCategory.CategorySaveSort');


Route::get('/ShopCategory/TableList/{id}',[ShopCategoryController::class,'TableList'])->name('Shop.shopCategory.Table_list');
Route::get('/ShopCategory/Table/edit/{id}',[ShopCategoryController::class,'TableEdit'])->name('Shop.shopCategory.Table_edit');
Route::post('/ShopCategory/Table/update/{id}',[ShopCategoryController::class,'TableStoreUpdate'])->name('Shop.shopCategory.Table_update');
Route::get('/ShopCategory/Table/destroy/{id}',[ShopCategoryController::class,'TableDestroy'])->name('Shop.shopCategory.Table_destroy');
Route::get('/ShopCategory/Table/Sort/{project_id}',[ShopCategoryController::class,'TableSort'])->name('Shop.shopCategory.Table_Sort');
Route::post('/ShopCategory/Table/SaveSort', [ShopCategoryController::class,'TableSortSave'])->name('Shop.shopCategory.TableSortSave');





Route::get('/ShopProduct',[ShopProductController::class,'index'])->name('Shop.ShopProduct.index');
Route::get('/ShopProduct/AddToShop',[ShopProductController::class,'AddProToShop'])->name('Shop.ShopProduct.AddProToShop');
Route::get('/ShopProduct/ListCategory/{Categoryid}',[ShopProductController::class,'ListCategory'])->name('Shop.ShopProduct.ListCategory');
Route::get('/ShopProduct/create',[ShopProductController::class,'create'])->name('Shop.ShopProduct.create');
Route::get('/ShopProduct/edit/{id}',[ShopProductController::class,'edit'])->name('Shop.ShopProduct.edit');
Route::get('/ShopProduct/destroy/{id}',[ShopProductController::class,'destroy'])->name('Shop.ShopProduct.destroy');
Route::post('/ShopProduct/update/{id}',[ShopProductController::class,'storeUpdate'])->name('Shop.ShopProduct.update');
Route::get('/ShopProduct/emptyPhoto/{id}', [ShopProductController::class,'emptyPhoto'])->name('Shop.ShopProduct.emptyPhoto');

Route::get('/ShopProduct/photos/{id}',[ShopProductController::class,'ListMorePhoto'])->name('Shop.ShopProduct.More_Photos');
Route::post('/ShopProduct/saveSort', [ShopProductController::class,'sortPhotoSave'])->name('Shop.ShopProduct.sortPhotoSave');
Route::post('/ShopProduct/AddMore',[ShopProductController::class,'AddMorePhotos'])->name('Shop.ShopProduct.More_PhotosAdd');
Route::get('/ShopProduct/PhotoDel/{id}',[ShopProductController::class,'More_PhotosDestroy'])->name('Shop.ShopProduct.More_PhotosDestroy');

//Route::get('/ShopProduct/TableList/{id}',[ShopProductController::class,'TableList'])->name('Shop.ShopProduct.Table_list');
//Route::get('/ShopProduct/Table/edit/{id}',[ShopProductController::class,'TableEdit'])->name('Shop.ShopProduct.Table_edit');
//Route::post('/ShopProduct/Table/update/{id}',[ShopProductController::class,'TableStoreUpdate'])->name('Shop.ShopProduct.Table_update');
//Route::get('/ShopProduct/Table/destroy/{id}',[ShopProductController::class,'TableDestroy'])->name('Shop.ShopProduct.Table_destroy');
//Route::get('/ShopProduct/Table/Sort/{project_id}',[ShopProductController::class,'TableSort'])->name('Shop.ShopProduct.Table_Sort');
//Route::post('/ShopProduct/Table/SaveSort', [ShopProductController::class,'TableSortSave'])->name('Shop.ShopProduct.TableSortSave');
//


