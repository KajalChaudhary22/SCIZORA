<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Business\DashboardController as BusinessDashboard;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboard;
use App\Http\Controllers\Customer\Auth\AuthenticationController as CustomerAuth;
use App\Http\Controllers\Business\Auth\AuthenticationController as BusinessAuth;

Route::get('/', function () {
    return view('welcome');
});

// Admin routes
// Route::get('admin/login', [AdminDashboard::class, 'create'])->name('admin.login');
// Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
// });

// Business routes
Route::get('business/login', [BusinessAuth::class, 'create'])->name('business.login');
// Route::prefix('business')->middleware('auth:business')->group(function () {
    Route::get('/dashboard', [BusinessDashboard::class, 'index'])->name('business.dashboard');
// });

// Customer routes
Route::get('customer/login', [CustomerAuth::class, 'create'])->name('customer.login');
// Route::prefix('customer')->middleware('auth:customer')->group(function () {
    Route::get('/dashboard', [CustomerDashboard::class, 'index'])->name('customer.dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// require __DIR__.'/auth.php';
