<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class,'loginProcess']);
Route::get('logout', [AuthController::class,'logout']);




Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('beranda', [HomeController::class, 'showBeranda']);
    Route::get('kategori', [HomeController::class, 'showKategori']);
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('promo', PromoController::class);
    Route::resource('user', UserController::class);
});
