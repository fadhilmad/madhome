<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortofolioController;
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

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('dologin', [AuthController::class, 'doLogin']);
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('doregister', [AuthController::class, 'doRegister']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::post('dologout', [AuthController::class, 'dologout'])->name('dologout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resources([
        'user' => UserController::class, 'setting' => SettingController::class, 'blog' => BlogController::class, 'portofolio' => PortofolioController::class, 'profil' => ProfilController::class

    ]);
    Route::get('user-export', [UserController::class, 'export']);
    Route::get('setting-export', [SettingController::class, 'export']);
    Route::get('blog-export', [BlogController::class, 'export']);
    Route::get('portofolio-export', [PortofolioController::class, 'export']);
    Route::get('profil-export', [ProfilController::class, 'export']);
});
