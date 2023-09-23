<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\PurchaseOrderItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('purchase-orders', PurchaseOrderController::class);
Route::apiResource('payments', PaymentsController::class);
Route::apiResource('items', ItemController::class);
Route::apiResource('purchase-order-items', PurchaseOrderItemController::class);
