<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('accueil');
    }
    
    public function authentification(){
        return view('authentification');
    }
}
