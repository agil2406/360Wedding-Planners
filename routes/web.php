<?php

use App\Http\Controllers\PaketController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\WoController;
use App\Http\Controllers\GaleryController;
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

Route::controller(PaketController::class)->group(function () {
    Route::get('/paketwo', 'index');
    Route::get('/paket', 'create');
    Route::post('/paket', 'store');
    Route::get('/paket/{id}', 'show');
    Route::put('/paket/{id}/update', 'update');
    Route::get('/paket/{id}/edit', 'edit');
    Route::delete('/paket/{id}', 'destroy');
});
Route::controller(WoController::class)->group(function () {
    Route::get('/wo', 'index');
    Route::get('/paket/{id}', 'show');
    Route::put('/paket/{id}/update', 'update');
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

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::view('/wedding', 'pages.wedding-org');
Route::view('/dashboard', 'pages.dashboard');
Route::view('/dashboardAdmin', 'pages.admin.dashboardAdmin');


Route::view('/profil-wo', 'pages.admin.profil-wo');
Route::view('/edit-profil-wo', 'pages.admin.edit-profil-wo');

Route::view('/belanjur-wo', 'pages.belanjur.benjalur-wo');
Route::view('/paket-akad', 'pages.benjalur.paket-akad');
Route::view('/ayodiya-wo', 'pages.ayodiya.ayodiya-wo');
Route::view('/janur-kuning-wo', 'pages.janur kuning.janur-kuning-wo');
