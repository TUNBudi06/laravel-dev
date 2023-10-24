<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class sosmed_route extends Controller
{
    public function home(): RedirectResponse
    {
        return redirect()->route('home');
    }

    public function socialmedia($tipe) {
        if($tipe === "instagram"){
            return redirect("https://www.instagram.com/tunbudi06");
        } elseif ($tipe === "github"){
            return redirect("https://github.com/tunbudi06");
        } elseif ($tipe === "telegram"){
            return redirect("http://t.me/TheUnknownName06");
        } elseif ($tipe === "youtube"){
            return redirect("https://www.youtube.com/channel/UC9OSZtQZIM89ujl8L5Q9dxA");
        }
    }
}
