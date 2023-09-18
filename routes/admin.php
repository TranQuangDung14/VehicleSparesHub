<?php

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
    Route::prefix('dashboard')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboardIndex');
    });
    Route::prefix('Categories')->group(function () {
        Route::get('', [CategoriesController::class, 'index'])->name('categoryIndex');
        Route::get('add', [CategoriesController::class, 'create'])->name('categoryCreate');
        Route::post('add', [CategoriesController::class, 'store'])->name('categoryStore');
    });
    Route::prefix('Products')->group(function () {
        Route::get('', [ProductsController::class, 'index'])->name('productIndex');
    });
});


?>
