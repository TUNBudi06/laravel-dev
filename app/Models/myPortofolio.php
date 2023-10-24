<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myPortofolio
{
    public static function porto(){
        $lists = [
            [
                "foto"=>asset("aboutme/assets/img/python.png"),
                "alt-foto"=>"Python Developer Image",
                "judul"=>"Experienced Python Developer",
                "text"=>"I specialize in the art of Python development, crafting powerful and versatile applications. My experience spans the realm of Python, and I'm here to take your projects to the next level.",
                "button-text"=>"Explore Python Docs",
                "button-link"=>"https://docs.python.org/3/"
            ],
            [
                "foto"=>asset("aboutme/assets/img/cpp.png"),
                "alt-foto"=>"C/C++ Developer Image",
                "judul"=>"Seasoned C/C++ Developer",
                "text"=>"With a wealth of experience in C and C++ development, I bring precision and efficiency to every project. My expertise spans from optimizing code to crafting robust applications.",
                "button-text"=>"Explore My Github",
                "button-link"=>route("sosmed",[ 'tipe' => 'github'])
            ],
            [
                "foto"=>asset("aboutme/assets/img/IT-komputer.png"),
                "alt-foto"=>"IT and Computer Expertise",
                "judul"=>"Backend Developer & IT Enthusiast",
                "text"=>"'m not just a Backend Developer; I'm also your go-to expert for server management, computer assembly, and troubleshooting. Whether it's crafting efficient code or assembling the perfect computer setup, I've got you covered.",
                "button-text"=>"Explore My Instagram",
                "button-link"=>route("sosmed",[ 'tipe' => 'instagram'])
            ],
            [
                "foto"=>asset("aboutme/assets/img/android.png"),
                "alt-foto"=>"IT and Computer Expertise",
                "judul"=>"Experienced Android Modder and Opreker",
                "text"=>"I'm not just a Backend Developer; I'm also an Android enthusiast with over 7 years of experience in modding and tweaking Android devices. My passion lies in unlocking the full potential of Android, fixing and enhancing smartphones to meet your unique needs.",
                "button-text"=>"Explore My Telegram",
                "button-link"=>route("sosmed",[ 'tipe' => 'telegram'])
            ]
        ];
        return $lists;
    }
}
