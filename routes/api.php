<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\Auth\AuthenticationController as CustomerAuth;
use App\Http\Controllers\Business\Auth\AuthenticationController as BusinessAuth;

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
    Route::post('login', [BusinessAuth::class, 'login'])->name('business.login.validate');
    Route::post('register', [BusinessAuth::class, 'register'])->name('business.register');
});

Route::prefix('customer')->group(function () {
    Route::post('login', [CustomerAuth::class, 'login'])->name('customer.login.validate');
    Route::post('register', [CustomerAuth::class, 'register'])->name('customer.register');
});
