<?php

use App\Http\Controllers\User\IndexController;
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
Route::get('/', [IndexController::class, 'index'])->name('HomeIndex');
Route::get('chi_tiet_san_pham/{id}', [IndexController::class, 'detail'])->name('DetailProduct');
// Route::get('/', function () {
//     return view('welcome');
// });
