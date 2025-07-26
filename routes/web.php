<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Business\DashboardController as BusinessDashboard;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboard;

Route::get('/', function () {
    return view('welcome');
});

// Admin routes
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
});

// Business routes
Route::prefix('business')->middleware('auth:business')->group(function () {
    Route::get('/dashboard', [BusinessDashboard::class, 'index'])->name('business.dashboard');
});

// Customer routes
Route::prefix('customer')->middleware('auth:customer')->group(function () {
    Route::get('/dashboard', [CustomerDashboard::class, 'index'])->name('customer.dashboard');
});

