<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function portofolio(){
        return view('portofolio');
    }
    
    public function kontak(){
        return view('kontak');
    }

    public function Dicoding(){
        return view('dicoding');
    }

    public function ats(){
        return view('ats');
    }

    public function webshop(){
        return view('webshop');
    }
}


