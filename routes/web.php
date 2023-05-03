<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SearchController;

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

// --=== Página de bienvenida ===--
Route::get('/', [HomepageController::class, 'index'])->name('homepage');

// --=== Inicio de sesión y registro ===--
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// --=== Página de Inicio ===--
Route::get('/index', [IndexController::class, 'index'])->name('index');

// --=== Perfil de usuario ===--
Route::get('/profile/{user:username}', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/{user:username}/config',  [SettingsController::class, 'index'])->name('profile.settings'); // <=== Ajustes de perfil
Route::get('/profile/{user:username}/configTest',  [SettingsController::class, 'index2'])->name('profile.settings2'); // <=== Ajustes de perfil
Route::post('/profile/{user:username}/config/store',  [SettingsController::class, 'store'])->name('config.store'); // <=== Guardando ajustes    

// --=== Página de Buesquedas ===--
Route::get('/index/search', [SearchController::class, 'index'])->name('search');