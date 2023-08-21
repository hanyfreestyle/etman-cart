<?php


use App\Helpers\AdminHelper;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CategoryTableController;
use App\Http\Controllers\AdminMainController;


Route::get('/Home',[AdminMainController::class,'Home'])->name('admin.Dashboard');
Route::get('/Home/Update',[AdminMainController::class,'Update'])->name('admin.Dashboard.Update');


Route::get('/Category',[CategoryController::class,'index'])->name('category.index');
Route::get('/Category/Main',[CategoryController::class,'index'])->name('category.index_Main');
Route::get('/Category/SubCategory/{id}',[CategoryController::class,'SubCategory'])->name('category.SubCategory');
Route::get('/Category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/Category/store/{id}',[CategoryController::class,'storeUpdate'])->name('category.store');
Route::get('/Category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/Category/update/{id}',[CategoryController::class,'storeUpdate'])->name('category.update');
Route::get('/Category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

Route::post('/Category/updateStatus', [CategoryController::class,'updateStatus'])->name('category.updateStatus');
Route::get('/Category/emptyPhoto/{id}', [CategoryController::class,'emptyPhoto'])->name('category.emptyPhoto');
Route::get('/Category/SoftDelete/',[CategoryController::class,'SoftDeletes'])->name('category.SoftDelete');
Route::get('/Category/restore/{id}',[CategoryController::class,'Restore'])->name('category.restore');
Route::get('/Category/force/{id}',[CategoryController::class,'ForceDeletes'])->name('category.force');


Route::get('/category/TableList/{id}',[CategoryTableController::class,'TableList'])->name('category.Table_list');
Route::get('/category/TableSoftDelete/{id}',[CategoryTableController::class,'TableSoftDelete'])->name('category.Table_SoftDelete');
Route::get('/category/TableRestore/{id}',[CategoryTableController::class,'TableRestore'])->name('category.Table_restore');
Route::get('/category/TableForce/{id}',[CategoryTableController::class,'TableForceDelete'])->name('category.Table_force');

Route::get('/category/Table/create/{project_id}',[CategoryTableController::class,'TableCreate'])->name('category.Table_create');
Route::get('/category/Table/edit/{id}',[CategoryTableController::class,'TableEdit'])->name('category.Table_edit');
Route::post('/category/Table/update/{id}',[CategoryTableController::class,'TableStoreUpdate'])->name('category.Table_update');
Route::get('/category/Table/destroy/{id}',[CategoryTableController::class,'TableDestroy'])->name('category.Table_destroy');

