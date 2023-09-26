<?php

namespace App\Http\Controllers;

use App\Models\myPortofolio;

class pages extends Controller {
    public function index()
    {
        return view('home');
    }

    public function aboutme(){
        return view('aboutme',["posts"=>myPortofolio::porto()]);
    }
    public function  contact(){
        return view('contact');
    }
}
