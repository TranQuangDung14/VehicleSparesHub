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

        Route::get('register', [AuthController::class, 'showRegistration'])->name('showregister');
        Route::post('register', [AuthController::class, 'register'])->name('register');

        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    // });
    // bảng điều khiển
    Route::prefix('dashboard')->middleware('auth')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboardIndex');
    });

    // danh mục
    Route::prefix('Categories')->middleware('auth')->group(function () {
        Route::get('', [CategoriesController::class, 'index'])->name('categoryIndex');
        Route::get('add', [CategoriesController::class, 'create'])->name('categoryCreate');
        Route::post('add', [CategoriesController::class, 'store'])->name('categoryStore');
        Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('categoryEdit');
        Route::get('update/{id}', [CategoriesController::class, 'update'])->name('categoryUpdate');
        Route::delete('delete/{id}', [CategoriesController::class, 'delete'])->name('categoryDelete');
    });

    // sản phẩm
    Route::prefix('Products')->middleware('auth')->group(function () {
        Route::get('', [ProductsController::class, 'index'])->name('productIndex');
        Route::get('add', [ProductsController::class, 'create'])->name('productCreate');
        Route::post('add', [ProductsController::class, 'store'])->name('productStore');
        Route::get('edit/{id}', [ProductsController::class, 'edit'])->name('productEdit');
        Route::put('update/{id}', [ProductsController::class, 'update'])->name('productUpdate');
        // Route::get('update/{id}', [ProductsController::class, 'update'])->name('productUpdate');
        Route::delete('delete/{id}', [ProductsController::class, 'delete'])->name('productDelete');
        Route::put('update/{id}/status', [ProductsController::class, 'UpdateStatus'])->name('productUpdateStatus');
    });
});


?>
