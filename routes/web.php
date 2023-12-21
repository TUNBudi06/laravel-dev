<?php

use App\Http\Controllers\pages;
use App\Http\Controllers\sosmed_route;
use App\Http\Controllers\feedback;
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

//Route::get('/', function () {
//    return view('home');
//});

//FOR ROUTING WEB
Route::get('/',[sosmed_route::class,"home"]);

//listing web
Route::get('/home',[pages::class,"index"])->name("home");
Route::get("/about",[pages::class,'aboutme'])->name("aboutme");
Route::get("/contact",[pages::class,"contact"])->name("contact");


//FOR ROUTING SOSMED
Route::get("/sosmed/{tipe}",[sosmed_route::class,"socialmedia"])->name("sosmed");


//ROUTING FOR RECEIVING INPUT
Route::post("/post/feedback",[feedback::class,"urlFeedback"])->name("pFeedback");

Route::resource("komentar",\App\Http\Controllers\komentarManager::class)->middleware("authUser");


//routing for user
Route::get("/login",[\App\Http\Controllers\UserController::class,"login"])->name("login");
Route::post("/login",[\App\Http\Controllers\UserController::class,"doLogin"]);
Route::get("/logout",[\App\Http\Controllers\UserController::class,"doLogout"])->name("logout");
Route::get("/register",[\App\Http\Controllers\UserController::class,"register"])->name("register");
Route::post("/register",[\App\Http\Controllers\UserController::class,"buatAkun"]);

Route::get("/forgot-password",[\App\Http\Controllers\UserController::class,"forgotpw"])->name("password.request");
Route::post("/pw-request",[\App\Http\Controllers\UserController::class,"reqpw"])->name("pw-reset");
Route::get("/pw-change/{id}",[\App\Http\Controllers\UserController::class,"pwView"])->name("pw-view");
Route::post("/pw-change/{id}",[\App\Http\Controllers\UserController::class,"pwChange"])->name("pw-view");
