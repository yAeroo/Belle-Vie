<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::get('/index', [IndexController::class, 'index'])->name('index');

//| Definiendo|La ruta en| El controller asignado| El nombre|   Apodo interno
//| el método| que actua| ejecuta una función   |de la función|  para la misma ruta
Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('/register', [RegisterController::class, 'index'])->name('register');


//|Ruta al  Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

//Ruta del Profile hacia el settings
Route::get('/profile/settings',  [SettingsController::class, 'index'])->name('profile.settings');