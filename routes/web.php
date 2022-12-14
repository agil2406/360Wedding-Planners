<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateProfilController;
use App\Http\Controllers\UpdatePasswordController;


use App\Http\Controllers\WoController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfilController;
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


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Route::view('/profil-client', 'pages.client.profil-client');

Route::controller(ClientController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/detail-wo/{id}', 'detailwo');
    Route::get('/detail-paket/{id}', 'show');
    Route::get('/wedding', 'vendor');
    Route::get('/all-paket', 'store');
    Route::post('/detail-order', 'create_order');
});
Route::group(['middleware' => ['auth', 'level:superAdmin']], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index');
        Route::get('/create-admin', 'create');
        Route::post('/admin', 'store');
        Route::delete('/admin/{id}', 'destroy');
        Route::put('/admin/{id}', 'update');
        Route::get('/admin/{id}/edit', 'edit');
        Route::get('/admin/{id}', 'show');
    });
    Route::controller(WoController::class)->group(function () {
        Route::get('/wo', 'index');
        Route::get('/create-wo', 'create');
        Route::post('/wo', 'store');
        Route::delete('/wo/{id}', 'destroy');
        Route::put('/wo/{id}', 'update');
        Route::get('/wo/{id}/edit', 'edit');
        Route::get('/wo/{id}', 'show');
    });
});

Route::group(['middleware' => ['auth', 'level:client']], function () {

    Route::post('/create-order', [ClientController::class, 'create_order']);
    Route::post('/save_order', [ClientController::class, 'save_order']);
    Route::get('/order', [ClientController::class, 'order']);
    Route::get('/detail-order/{id}', [ClientController::class, 'detail_order']);
    Route::get('/upgrade/{id}', [ClientController::class, 'upgrade']);
    Route::put('/upgrade/{id}', [ClientController::class, 'save_upgrade']);
    Route::get('/invoice/{id}', [ClientController::class, 'invoice']);
    Route::get('/rating/{id}', [ClientController::class, 'rating']);
    Route::post('/rating', [ClientController::class, 'save_rating']);
});

Route::group(['middleware' => ['auth', 'level:Admin']], function () {

    Route::get('/profileUpdate', [UpdateProfilController::class, 'index'])->name('profileUpdate');
    Route::put('/profileUpdate', [UpdateProfilController::class, 'update']);

    Route::get('/passwordUpdate', [UpdatePasswordController::class, 'edit'])->name('passwordUpdate');
    Route::put('/passwordUpdate', [UpdatePasswordController::class, 'update']);

    Route::controller(PaketController::class)->group(function () {
        Route::get('/paketwo', 'index');
        Route::get('/paket', 'create');
        Route::post('/paket', 'store');
        Route::get('/paket/{id}', 'show');
        Route::put('/paketupdate/{id}', 'update');
        Route::get('/paket/{id}/edit', 'edit');
        Route::delete('/paket/{id}', 'destroy');
    });

    Route::controller(GaleryController::class)->group(function () {
        Route::get('/galery', 'index');
        Route::get('/galerytambah', 'create');
        Route::post('/galery', 'store');
        Route::get('/galery/{id}', 'show');
        Route::delete('/galery/{id}', 'destroy');
    });
    Route::controller(OrderController::class)->group(function () {
        Route::get('/pesanan', 'index');
        Route::delete('/pesanan/{id}', 'destroy');
        Route::get('/pesanan/{id}/setuju', 'setuju');
        Route::get('/pesanan/{id}/tolak', 'tolak');
    });



    Route::controller(ProfilController::class)->group(function () {
        Route::get('/profil-wo/{id}', 'index');
        Route::get('/edit-profil-wo/{id}', 'edit');
        Route::put('/profil-wo/{id}', 'update');
    });
});
