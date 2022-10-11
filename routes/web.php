<?php

use Illuminate\Support\Facades\Route;
/**
 * Route authentification user
 */
Route::get("/Login",[App\Http\Controllers\Auth\LoginController::class,"index"])->name('login');
Route::post("/auth",[App\Http\Controllers\Auth\LoginController::class,"authenticate"])->name('auth');
Route::get("/logout",[App\Http\Controllers\Auth\LogoutController::class,"logout"])->name("logout");

/**
 * Route Home return view index
 */

Route::get("/",[App\Http\Controllers\Home\HomeController::class,"index"])->name("acceuil");

/**
 * Route Admin Menu return view indexAdmin
 *
 */

 Route::get("/Home",[App\Http\Controllers\Admin\AdminController::class,"index"])->name("Home");

 /**
  * Route Admin filiere list
  */

Route::get("/Home/Configuration/{key}",[App\Http\Controllers\Admin\AdminController::class,"configuration"])->name("configuration");

/**
 * Route admin users
 */
Route::get("/Home/Users",[App\Http\Controllers\Admin\AdminController::class,"user"])->name("users");
Route::get('/Home/Users/Register',[App\Http\Controllers\Admin\AdminController::class,"register_view"])->name("register_view");

/**
 * Route store register
 */

 Route::post("Home/Users/register",[App\Http\Controllers\Admin\MethodController::class,'register'])->name('register');

/**
 * Route user_group
 */

Route::get("/Home/UserGroup",[App\Http\Controllers\Admin\AdminController::class,'usergroup'])->name("usergroup");

/**
 * Route save configuration
 */
Route::post('/Home/Configuration/Add',[App\Http\Controllers\Admin\MethodController::class,"sv"])->name("save.configuration");

/**
 * Route Attribution
 */
Route::get("Home/Configuration/Attribution/{key}/{key2}",[App\Http\Controllers\Admin\AdminController::class,'attribution'])->name("attribution");

/**
 * Route store configuration attribution
 */

Route::post("/Home/Configuration/Attribution/Add",[App\Http\Controllers\Admin\MethodController::class,"store_attribution"])->name("attribution.store");

/*
    route cours
*/
Route::get("/Home/Configurations/Cours",[App\Http\Controllers\Admin\AdminController::class,"cours"])->name("Cours");

/**
 * Route post cours
 */
Route::post("/Home/configurations/Add",[App\Http\Controllers\Admin\MethodController::class,"save_cours"])->name("save.cours");