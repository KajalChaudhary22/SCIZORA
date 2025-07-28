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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('business')->group(function () {
    Route::post('login', [BusinessApiController::class, 'login'])->name('business.login');
    Route::post('register', [BusinessApiController::class, 'register'])->name('business.register');
});

Route::prefix('customer')->group(function () {
    Route::post('login', [CustomerApiController::class, 'login'])->name('customer.login');
    Route::post('register', [CustomerApiController::class, 'register'])->name('customer.register');
});
