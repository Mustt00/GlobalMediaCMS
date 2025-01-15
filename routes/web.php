<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

// Admin paneli rotaları
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth:admin'])->get('auth/dashboard', [AdminController::class, 'dashboard'])
        ->name('auth.dashboard');
});
