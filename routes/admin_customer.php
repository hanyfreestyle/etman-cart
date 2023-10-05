<?php
use App\Helpers\AdminHelper;
use App\Http\Controllers\admin\shop\CustomerController;
use App\Http\Controllers\admin\ShopCategoryController;





Route::get('/Customer',[CustomerController::class,'index'])->name('ShopCustomer.Customer.index');
Route::get('/Customer/create',[CustomerController::class,'create'])->name('ShopCustomer.Customer.create');
Route::get('/Customer/edit/{id}',[CustomerController::class,'edit'])->name('ShopCustomer.Customer.edit');
Route::get('/Customer/destroy/{id}',[CustomerController::class,'destroy'])->name('ShopCustomer.Customer.destroy');
Route::post('/Customer/update/{id}',[CustomerController::class,'update'])->name('ShopCustomer.Customer.update');
Route::post('/Customer/store',[CustomerController::class,'store'])->name('ShopCustomer.Customer.store');
Route::get('/Customer/Password/{id}',[CustomerController::class,'Password'])->name('ShopCustomer.Customer.Password');
Route::post('/Customer/PassUpdate/{id}',[CustomerController::class,'Password_Update'])->name('ShopCustomer.Customer.Password_Update');
Route::get('/Customer/SoftDelete/',[CustomerController::class,'SoftDeletes'])->name('ShopCustomer.Customer.SoftDelete');
Route::get('/Customer/restore/{id}',[CustomerController::class,'restored'])->name('ShopCustomer.Customer.restore');
Route::get('/Customer/force/{id}',[CustomerController::class,'ForceDeletes'])->name('ShopCustomer.Customer.force');
Route::get('/Customer/Config',[CustomerController::class,'config'])->name('ShopCustomer.Customer.Config');
Route::get('/Customer/Address/{id}',[CustomerController::class,'AddressList'])->name('ShopCustomer.Customer.Address');
Route::post('/Customer/AddressStore/{id}',[CustomerController::class,'AddressStore'])->name('ShopCustomer.Customer.AddressStore');
Route::get('/Customer/AddressEdit/{id}',[CustomerController::class,'AddressEdit'])->name('ShopCustomer.Customer.AddressEdit');
Route::post('/Customer/AddressUpdate/{id}',[CustomerController::class,'AddressUpdate'])->name('ShopCustomer.Customer.AddressUpdate');
Route::get('/Customer/AddressDelete/{id}',[CustomerController::class,'AddressDelete'])->name('ShopCustomer.Customer.AddressDelete');
Route::get('/Customer/AddressDelete/{id}',[CustomerController::class,'AddressDelete'])->name('ShopCustomer.Customer.AddressDelete');
Route::get('/Customer/ExportLogin',[CustomerController::class,'ExportLogin'])->name('ShopCustomer.Export.ExportLogin');




Route::get('/Orders',[ShopCategoryController::class,'index'])->name('ShopOrders.Orders.index');
