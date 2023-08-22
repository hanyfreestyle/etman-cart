<?php


use App\Helpers\AdminHelper;
use App\Http\Controllers\admin\AttributeTableController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CategoryTableController;
use App\Http\Controllers\AdminMainController;



Route::get('/Home',[AdminMainController::class,'Home'])->name('admin.Dashboard');
Route::get('/Home/Update',[AdminMainController::class,'Update'])->name('admin.Dashboard.Update');


Route::get('/Category',[CategoryController::class,'index'])->name('category.index');
Route::get('/Category/Main',[CategoryController::class,'index'])->name('category.index_Main');
Route::get('/Category/SubCategory/{id}',[CategoryController::class,'SubCategory'])->name('category.SubCategory');
Route::get('/Category/create',[CategoryController::class,'create'])->name('category.create');
//Route::post('/Category/store/{id}',[CategoryController::class,'storeUpdate'])->name('category.store');
Route::get('/Category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/Category/update/{id}',[CategoryController::class,'storeUpdate'])->name('category.update');
Route::get('/Category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');
//
//Route::post('/Category/updateStatus', [CategoryController::class,'updateStatus'])->name('category.updateStatus');
Route::get('/Category/emptyPhoto/{id}', [CategoryController::class,'emptyPhoto'])->name('category.emptyPhoto');
Route::get('/Category/SoftDelete/',[CategoryController::class,'SoftDeletes'])->name('category.SoftDelete');
Route::get('/Category/restore/{id}',[CategoryController::class,'Restore'])->name('category.restore');
Route::get('/Category/force/{id}',[CategoryController::class,'ForceDeletes'])->name('category.force');


Route::get('/category/TableList/{id}',[CategoryTableController::class,'TableList'])->name('category.Table_list');
//Route::get('/category/Table/edit/{id}',[CategoryTableController::class,'TableEdit'])->name('category.Table_edit');
//Route::post('/category/Table/update/{id}',[CategoryTableController::class,'TableStoreUpdate'])->name('category.Table_update');
//Route::get('/category/Table/destroy/{id}',[CategoryTableController::class,'TableDestroy'])->name('category.Table_destroy');
//Route::get('/category/Table/Sort/{project_id}',[CategoryTableController::class,'TableSort'])->name('category.Table_Sort');
//Route::post('/category/Table/SaveSort', [CategoryTableController::class,'TableSortSave'])->name('category.TableSortSave');
//
//



Route::get('/AttributeTables',[AttributeTableController::class,'index'])->name('AttributeTables.index');
Route::get('/AttributeTables/create',[AttributeTableController::class,'create'])->name('AttributeTables.create');
Route::get('/AttributeTables/edit/{id}',[AttributeTableController::class,'edit'])->name('AttributeTables.edit');
Route::post('/AttributeTables/update/{id}',[AttributeTableController::class,'storeUpdate'])->name('AttributeTables.update');
Route::get('/AttributeTables/destroy/{id}',[AttributeTableController::class,'destroy'])->name('AttributeTables.destroy');
Route::get('/AttributeTables/SoftDelete/',[AttributeTableController::class,'SoftDeletes'])->name('AttributeTables.SoftDelete');
Route::get('/AttributeTables/restore/{id}',[AttributeTableController::class,'Restore'])->name('AttributeTables.restore');
Route::get('/AttributeTables/force/{id}',[AttributeTableController::class,'ForceDeletes'])->name('AttributeTables.force');
