<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DivisionController;
use  App\Http\Controllers\EtablissementController;
use  App\Http\Controllers\DiplomeController;
use  App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ThematiqueController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EncadrantController;
use App\Http\Controllers\CertificatController;
// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
            
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    // Admin  Route
    Route::prefix('admin')->group(function () {
        Route::resource('users', UserController::class)->middleware('admin');
        Route::resource('divisions', DivisionController::class)->middleware('admin');
        //Diplome
        Route::resource('diplomes',DiplomeController::class)->middleware('admin');
       //Spécialité
        Route::resource('spécialité',SpecialiteController::class)->middleware('admin');
        Route::resource('etablissement',EtablissementController::class)->middleware('admin');
        Route::resource('projets',ProjetController::class)->middleware('admin');
        Route::resource('thematiques',ThematiqueController::class)->middleware('admin');
    });






















































































    
    // Responsable  Route
 
});
