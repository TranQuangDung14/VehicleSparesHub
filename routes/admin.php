<?php

use App\Http\Controllers\Admin\auth\AuthController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\Testcontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('index', [Testcontroller::class, 'index']);

Route::prefix('admin')->group(function () {
    // Route::prefix('dashboard')->group(function () {
        Route::get('login', [AuthController::class, 'showLogin'])->name('showlogin');
        Route::post('login', [AuthController::class, 'login'])->name('login');

        Route::get('register', [AuthController::class, 'register'])->name('showregister');

        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    // });
    Route::prefix('dashboard')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboardIndex');
    });
    Route::prefix('Categories')->group(function () {
        Route::get('', [CategoriesController::class, 'index'])->name('categoryIndex');
        Route::get('add', [CategoriesController::class, 'create'])->name('categoryCreate');
        Route::post('add', [CategoriesController::class, 'store'])->name('categoryStore');
        Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('categoryEdit');
        Route::get('update/{id}', [CategoriesController::class, 'update'])->name('categoryUpdate');
    });
    Route::prefix('Products')->group(function () {
        Route::get('', [ProductsController::class, 'index'])->name('productIndex');
    });
});


?>
