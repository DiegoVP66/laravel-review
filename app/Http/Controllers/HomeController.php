<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        var_dump($_POST);
        return view('site.home', ['title' => 'Home Test']);
    }
}
