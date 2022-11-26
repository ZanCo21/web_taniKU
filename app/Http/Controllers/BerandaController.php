<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    
    public function halamansatu(){
        return view('halaman.index');
    }

    public function halamandua(){
        return view('halaman.dashboard');
    }
}
