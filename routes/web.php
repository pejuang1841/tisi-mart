<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/input-customer',[CustomerController::class,"create"]);
Route::get('/input-product',[ProductController::class,"create"]);
Route::get('/input-staff',[StaffController::class,"create"]);
Route::get('/input-supplier',[SupplierController::class,"create"]);
Route::get('/show-customer',[CustomerController::class,"index"]);
Route::get('/show-product',[ProductController::class,"index"]);
Route::get('/show-staff',[StaffController::class,"index"]);
Route::get('/show-supplier',[SupplierController::class,"index"]);