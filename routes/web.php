<?php

use App\Http\Controllers\User\auth\authController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\Order_UserController;
use Illuminate\Support\Facades\Route;
include __DIR__.'/admin.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('login', [authController::class, 'showLogin'])->name('showlogin_User');
Route::post('login', [authController::class, 'login'])->name('login_User');

Route::get('register', [authController::class, 'showRegistration'])->name('showregister_User');
Route::post('register', [authController::class, 'register'])->name('register_User');

Route::post('logout', [authController::class, 'logout'])->name('logout_User');



//

Route::get('/', [IndexController::class, 'index'])->name('HomeIndex');

Route::get('chi_tiet_san_pham/{id}', [IndexController::class, 'detail'])->name('DetailProduct');

Route::get('danh_muc_san_pham/{id}', [IndexController::class, 'category_product'])->name('CategoryProduct');



Route::get('gioi_thieu',  [IndexController::class, 'Introduce'])->name('Introduce');

Route::get('Chinh_sach_hop_tac', [IndexController::class, 'Cooperation_policy'])->name('Cooperation_policy');

Route::get('Lien_he',[IndexController::class, 'Contact'])->name('Contact');

Route::get('Tin_tuc',[IndexController::class, 'News'])->name('News');


// chức năng giỏ hàng
Route::get('gio_hang', [CartController::class, 'index'])->name('Cart');

Route::post('/cart-add', [CartController::class, 'addProduct'])->name('AddCart');
Route::delete('/cart-remove/{cartDetail}', [CartController::class, 'removeProduct'])->name('DeleteCart');

Route::post('/cart-edit-quantity', [CartController::class, 'updateQuantity'])->name('UpdateQuantityCart');

// thanh toán
Route::get('thanh_toan', [Order_UserController::class, 'index'])->name('Order');
Route::post('/checkout', [Order_UserController::class, 'store'])->name('checkout');

