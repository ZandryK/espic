<?php

use Illuminate\Support\Facades\Route;
/**
 * Route authentification user
 */
Route::get("/Login",[App\Http\Controllers\Auth\LoginController::class,"index"])->name('login');
Route::post("/auth",[App\Http\Controllers\Auth\LoginController::class,"authenticate"])->name('auth');
