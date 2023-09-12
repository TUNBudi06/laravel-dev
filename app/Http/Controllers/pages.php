<?php

namespace App\Http\Controllers;

class pages extends Controller {
    public function index()
    {
        return view('home');
    }

    public function aboutme(){
        return view('aboutme');
    }
    public function  contact(){
        return view('contact');
    }
}
