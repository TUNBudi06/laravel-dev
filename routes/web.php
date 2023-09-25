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
