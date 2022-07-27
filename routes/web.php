<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateProfilController;
use App\Http\Controllers\UpdatePasswordController;


use App\Http\Controllers\WoController;
use App\Http\Controllers\GaleryController;
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
    
    Route::view('/wedding', 'pages.client.wedding-org');
    Route::view('/all-paket', 'pages.client.all-paket');
    Route::view('/detail-wo', 'pages.client.detail-wo');
    Route::view('/paket-akad', 'pages.client.paket-akad');
    Route::view('/profil-client', 'pages.client.profil-client');
    Route::view('/upgrade', 'pages.client.upgrade');
    Route::get('/', function () {
        return view('pages.dashboard');
    });


   

Route::group(['middleware' => ['auth','level:superAdmin']],function(){
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index');
        Route::get('/create-admin', 'create');
        Route::post('/admin', 'store');
        Route::delete('/admin/{id}', 'destroy');
        Route::put('/admin/{id}', 'update');
        Route::get('/admin/{id}/edit', 'edit');
        Route::get('/admin/{id}', 'show');
    });
});

Route::group(['middleware' => ['auth','level:client']],function(){

    Route::view('/detail-order', 'pages.client.detail-order');
    Route::view('/invoice', 'pages.client.invoice');
    
    
});


Route::group(['middleware' => ['auth','level:Admin']],function(){
        
    Route::get('/profileUpdate',[UpdateProfilController::class,'index'])->name('profileUpdate');
    Route::put('/profileUpdate',[UpdateProfilController::class, 'update']);

    Route::get('/passwordUpdate', [UpdatePasswordController::class, 'edit'])->name('passwordUpdate');
    Route::put('/passwordUpdate', [UpdatePasswordController::class, 'update']);

    Route::view('/pesanan', 'pages.admin.pesanan');
    Route::controller(PaketController::class)->group(function () {
        Route::get('/paketwo', 'index');
        Route::get('/paket', 'create');
        Route::post('/paket', 'store');
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
    

    Route::view('/dashboardAdmin', 'pages.admin.dashboardAdmin');
    
    Route::controller(ProfilController::class)->group(function () {
        Route::get('/profil-wo/{id}', 'index');
        Route::get('/edit-profil-wo/{id}', 'edit');
        Route::put('/profil-wo/{id}', 'update');
    });

});

