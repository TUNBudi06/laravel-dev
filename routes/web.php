<?php

use App\Http\Controllers\home;
use App\Http\Controllers\sosmed_route;
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
Route::get('/home',[home::class,"index"])->name("home");
Route::get("/aboutme",[home::class,'aboutme'])->name("About");
Route::get("/contact",[home::class,"contact"])->name("contact");


//FOR ROUTING SOSMED
Route::get("/sosmed/{tipe}",[sosmed_route::class,"socialmedia"])->name("sosmed");
