<?php

use App\Http\Controllers\Admin\auth\AuthController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\Testcontroller;
use App\Http\Controllers\Admin\WarehouseController;
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
    Route::prefix('account')->middleware('auth','admin')->group(function () {
        Route::get('', [AuthController::class, 'index'])->name('accountIndex');
        Route::post('lock_account', [AuthController::class, 'lock_account'])->name('lock_account');
    });
    Route::prefix('dashboard')->middleware('auth','admin')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboardIndex');
    });

    // danh mục
    Route::prefix('Categories')->middleware('auth','admin')->group(function () {
        Route::get('', [CategoriesController::class, 'index'])->name('categoryIndex');
        Route::get('add', [CategoriesController::class, 'create'])->name('categoryCreate');
        Route::post('add', [CategoriesController::class, 'store'])->name('categoryStore');
        Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('categoryEdit');
        Route::get('update/{id}', [CategoriesController::class, 'update'])->name('categoryUpdate');
        Route::delete('delete/{id}', [CategoriesController::class, 'delete'])->name('categoryDelete');
    });

    // sản phẩm
    Route::prefix('Products')->middleware('auth','admin')->group(function () {
        Route::get('', [ProductsController::class, 'index'])->name('productIndex');
        Route::get('add', [ProductsController::class, 'create'])->name('productCreate');
        Route::post('add', [ProductsController::class, 'store'])->name('productStore');
        Route::get('edit/{id}', [ProductsController::class, 'edit'])->name('productEdit');
        Route::put('update/{id}', [ProductsController::class, 'update'])->name('productUpdate');
        // Route::get('update/{id}', [ProductsController::class, 'update'])->name('productUpdate');
        Route::delete('delete/{id}', [ProductsController::class, 'delete'])->name('productDelete');
        Route::get('update_status', [ProductsController::class, 'UpdateStatus'])->name('productUpdateStatus');
    });

        // khách hàng
    Route::prefix('Customer')->middleware('auth','admin')->group(function () {
        Route::get('', [CustomerController::class, 'index'])->name('customerIndex');
        // Route::get('add', [CustomerController::class, 'create'])->name('customerCreate');
        // Route::post('add', [CustomerController::class, 'store'])->name('customerStore');
        Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('customerEdit');
        Route::get('update/{id}', [CustomerController::class, 'update'])->name('customerUpdate');
        // Route::delete('delete/{id}', [CustomerController::class, 'delete'])->name('customerDelete');
    });

            // đơn hàng
    Route::get('/export_order', [OrderController::class, 'export'])->name('ExportOrder');
    Route::get('/export_detail/{id}', [OrderController::class, 'export_detail'])->name('ExportDetailOrder');
    Route::get('/export_PDF/{id}', [OrderController::class, 'export_PDF'])->name('ExportPDFOrder');


    Route::prefix('order')->middleware('auth','admin')->group(function () {
        Route::get('', [OrderController::class, 'index'])->name('orderIndex');
        // Route::get('add', [CategoriesController::class, 'create'])->name('categoryCreate');
        Route::post('add', [OrderController::class, 'store'])->name('orderStore');
        // Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('categoryEdit');
        // Route::get('update/{id}', [CategoriesController::class, 'update'])->name('categoryUpdate');
        // Route::delete('delete/{id}', [CategoriesController::class, 'delete'])->name('categoryDelete');
    });

        // kho sản phẩm
        Route::prefix('warehouse')->middleware('auth','admin')->group(function () {
            Route::get('', [WarehouseController::class, 'index'])->name('warehouseIndex');
            // Route::get('add', [WarehouseController::class, 'create'])->name('productCreate');
            // Route::post('add', [WarehouseController::class, 'store'])->name('productStore');
            // Route::get('edit/{id}', [WarehouseController::class, 'edit'])->name('productEdit');
            // Route::put('update/{id}', [WarehouseController::class, 'update'])->name('productUpdate');
            // // Route::get('update/{id}', [ProductsController::class, 'update'])->name('productUpdate');
            Route::put('update_quantity/{id}', [WarehouseController::class, 'update_quantity'])->name('warehousequantityUpdate');
            // Route::get('update_status', [WarehouseController::class, 'UpdateStatus'])->name('productUpdateStatus');
        });
});


?>
