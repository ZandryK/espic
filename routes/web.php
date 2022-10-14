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
Route::get("/Home/Configurations/Cours",[App\Http\Controllers\Admin\AdminController::class,"cours"])->name("view.cours");

/**
 * Route post cours
 */
Route::post("/Home/configurations/Add",[App\Http\Controllers\Admin\MethodController::class,"save_cours"])->name("save.cours");
/**
 * Route personnels
 */
Route::get("/Home/Personnels/{key}",[App\Http\Controllers\Admin\AdminController::class,"personnels"])->name("view.personnels");
/**
 * Route Ajout personnels
 */

Route::get("/Home/Personnel/Add/{key}",[App\Http\Controllers\Admin\AdminController::class,"ajout_pers"])->name("ajout.personnels");
/**
 * Store personnels
 */

Route::post("/Home/Personnel/Add",[App\Http\Controllers\Admin\MethodController::class,"save_personnel"])->name("store.personnel");

/**
 * Route add user_pers
 */

 Route::get("/Home/Personnel/Users/{key}/{id}",[App\Http\Controllers\Admin\AdminController::class,"pers_to_user"])->name("add.pers.user");
/**
 * Route user profil
 */
Route::get("/Home/Users/profil",[App\Http\Controllers\Admin\AdminController::class,"profil"])->name("user.profil");

Route::get("/Home/Cours/{id}",[App\Http\Controllers\RedirectionController::class,'formateur_redirection'])->name("formateur.cours");

Route::get('Home/Videos',[App\Http\Controllers\RedirectionController::class,'view_video'])->name('view.video');

Route::post('/Home/Videos/Store',[App\Http\Controllers\RedirectionController::class,'store_video'])->name("store.video");

Route::get('/Home/playlist/{cour_id}/{vague_id}',[App\Http\Controllers\RedirectionController::class,'etudiant_playlist'])->name('playlist');

/**
 * Route Post attribution video
 */

Route::post('/Home/videos/Attribution',[App\Http\Controllers\RedirectionController::class,'video_attribution'])->name('store.video.attribution');