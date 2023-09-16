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
    Route::prefix('CategoriesController')->group(function () {
        Route::get('', [CategoriesController::class, 'index'])->name('categoryIndex');
    });
    Route::prefix('ProductsController')->group(function () {
        Route::get('', [ProductsController::class, 'index'])->name('productIndex');
    });
});


?>
