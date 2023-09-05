<?php

namespace App\Http\Controllers;

class home extends Controller {
    public function index()
    {
        return view('home');
    }

    public function aboutme() {
        return view('home');
    }
    public function  contact(){
        return view('home');
    }
}
