<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);

    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::get('/order/create', [OrderController::class, 'create']);
    Route::post('/order/store', [OrderController::class, 'store']);
    Route::get('/order/edit/{id}', [OrderController::class, 'edit']);
    Route::post('/order/update/{id}', [OrderController::class, 'update']);
    Route::post('/order/delete/{id}', [OrderController::class, 'delete']);
    
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
    Route::get('/customer/create', [CustomerController::class, 'create']);
    Route::post('/customer/store', [CustomerController::class, 'store']);
    Route::get('/customer/edit/{id}', [CustomerController::class, 'edit']);
    Route::post('/customer/update/{id}', [CustomerController::class, 'update']);
    Route::post('/customer/delete/{id}', [CustomerController::class, 'delete']);
    
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
    Route::get('/supplier/create', [SupplierController::class, 'create']);
    Route::post('/supplier/store', [SupplierController::class, 'store']);
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit']);
    Route::post('/supplier/update/{id}', [SupplierController::class, 'update']);
    Route::post('/supplier/delete/{id}', [SupplierController::class, 'delete']);
});
require __DIR__.'/auth.php';
