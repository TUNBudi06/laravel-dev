<?php

namespace App\Http\Controllers;

use App\Http\Requests\feedbackContact;
use Illuminate\Http\Request;

class feedback extends Controller
{
    public function urlFeedback(feedbackContact $fbData){
        $validatedData = $fbData->validate(feedbackContact::rules());
        return back()
            ->withInput($validatedData) // Mengembalikan data yang telah divalidasi kembali ke form
            ->with("success", "Success message here");
    }
}
