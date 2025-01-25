<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\PerpanjangController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TypeProjekController;
use App\Http\Controllers\StatusProjekController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::get("/", function () {
    return view("landing.index");
});

Route::get("/login", [AuthController::class, "index"])->name("login");
Route::get("/logout", [AuthController::class, "logout"])->name("logout");
Route::post("/authenticate", [AuthController::class, "authenticate"])->name(
    "authenticate"
);

Route::prefix("/admin")
    ->middleware("auth")
    ->group(function () {
        // Dashboard
        Route::get("dashboard", [DashboardController::class, "index"])->name(
            "dashboard"
        );

        // Profile
        Route::get("profile", [ProfileController::class, "index"])->name(
            "profile.index"
        );
        Route::get("profile/edit", [ProfileController::class, "edit"])->name(
            "profile.edit"
        );
        Route::post("profile", [ProfileController::class, "save"])->name(
            "profile.update"
        );

        // User
        Route::resource("user", UserController::class);
        Route::post("user/fetch", [UserController::class, "fetch"]);

        // TentangKami
        Route::get("tentang_kami", [
            TentangKamiController::class,
            "index",
        ])->name("tentang_kami.index");
        Route::get("tentang_kami/edit", [
            TentangKamiController::class,
            "edit",
        ])->name("tentang_kami.edit");
        Route::post("tentang_kami", [
            TentangKamiController::class,
            "save",
        ])->name("tentang_kami.update");

        // Projek
        Route::resource("projek", ProjekController::class);
        Route::post("projek/fetch", [ProjekController::class, "fetch"]);

        // Perpanjang
        Route::resource("perpanjang", PerpanjangController::class);
        Route::post("perpanjang/fetch", [PerpanjangController::class, "fetch"]);

        // Setting
        Route::get("setting", [SettingController::class, "index"])->name(
            "setting.index"
        );
        Route::get("setting/edit", [SettingController::class, "edit"])->name(
            "setting.edit"
        );
        Route::post("setting", [SettingController::class, "save"])->name(
            "setting.update"
        );

        // TypeProjek
        Route::resource("type_projek", TypeProjekController::class);
        Route::post("type_projek/fetch", [
            TypeProjekController::class,
            "fetch",
        ]);

        // StatusProjek
        Route::resource("status_projek", StatusProjekController::class);
        Route::post("status_projek/fetch", [
            StatusProjekController::class,
            "fetch",
        ]);
    });
