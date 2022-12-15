<?php

use Illuminate\Http\Request;
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
Route::get('/order', [OrderApiController::class, 'index']);
Route::get('/customer', [CustomerApiController::class, 'index']);
Route::get('/supplier', [SupplierApiController::class, 'index']);
