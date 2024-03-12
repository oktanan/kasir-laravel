<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('temp', TempController::class);
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('produk', ProdukController::class);

    Route::group(['middleware' => 'level:1'], function () {
        Route::resource('user', UserController::class);
    });

    // Additional route groups for other levels as needed
});

// //DASHBOARD
// Route::resource('/', DashboardController::class);

// //PRODUK
// Route::resource('produk', ProdukController::class);

// //PELANGGAN
// Route::resource('pelanggan', PelangganController::class);

// //TEMP
// Route::resource('temp', TempController::class);

// //TRANSAKSI
// Route::resource('transaksi', TransaksiController::class);

// //USER
// Route::resource('user', UserController::class);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


