<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\CasillaController;
use App\Http\Controllers\EleccionController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('plantilla');
  
});
Route::get('candidato/pdf', [CandidatoController::class, 'generatepdf'])->name("candidato.pdf");
Route::get('casilla/pdf', [CasillaController::class, 'generatepdf'])->name("casilla.pdf");
Route::get('eleccion/pdf', [EleccionController::class, 'generatepdf'])->name("eleccion.pdf");
Route::get('voto/pdf', [VotoController::class, 'generatepdf'])->name("voto.pdf");

Route::resource('candidato', CandidatoController::class);
Route::resource('casilla', CasillaController::class);
Route::resource('eleccion', EleccionController::class);
//Route::resource('voto', VotoController::class);


// Route::get('preview', [PDFController::class, 'preview']);
// Route::get('download', [PDFController::class, 'download'])->name("download");

#--- Socialite facebook
Route::get('login', [LoginController::class, 'index'])->name("login");
Route::get('login/facebook', [LoginController::class, 'redirectToFacebookProvider']);
Route::get('login/facebook/callback', [LoginController::class, 'handleProviderFacebookCallback']);
Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth']) ->group(function(){
    Route::resource('voto', VotoController::class);
});
