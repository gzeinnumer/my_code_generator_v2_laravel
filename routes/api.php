<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Generated By GZeinNumerCodeGenerator
 * www.github.com/gzeinnumer
 * at 2022-04-01 15:22:13
 * zip name 20220401152117_CpAJr2y0irM.zip
 */

use App\Http\Controllers\API\ProductController;

Route::prefix('product')->group(function () {
    Route::post('/insert', [ProductController::class, 'insert'])->name('product.insert');
    Route::get('/all', [ProductController::class, 'all'])->name('product.all');
    Route::get('/paging', [ProductController::class, 'paging'])->name('product.paging');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/find/{id}', [ProductController::class, 'find'])->name('product.find');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
});