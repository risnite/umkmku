<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\OrderApiController;
use App\Http\Controllers\Api\CustomerApiController;
use App\Http\Controllers\Api\SupplierApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user', [UserApiController::class, 'index']);

// Order
Route::get('/order', [OrderApiController::class, 'index']);
Route::post('/order', [OrderApiController::class, 'store']);
Route::put('/order/{id}', [OrderApiController::class, 'update']);
Route::delete('/order/{id}', [OrderApiController::class, 'destroy']);

// Customer
Route::get('/customer', [CustomerApiController::class, 'index']);
Route::post('/customer', [CustomerApiController::class, 'store']);
Route::put('/customer/{id}', [CustomerApiController::class, 'update']);
Route::delete('/customer/{id}', [CustomerApiController::class, 'destroy']);

// Supplier
Route::get('/supplier', [SupplierApiController::class, 'index']);
Route::post('/supplier', [SupplierApiController::class, 'store']);
Route::put('/supplier/{id}', [SupplierApiController::class, 'update']);
Route::delete('/supplier/{id}', [SupplierApiController::class, 'destroy']);
