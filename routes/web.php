<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

// --=== Página de Inicio ===--
Route::get('/index', [IndexController::class, 'index'])->name('index');

// --=== Perfil de usuario ===--
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/settings',  [SettingsController::class, 'index'])->name('profile.settings'); // <=== Ajustes de perfil