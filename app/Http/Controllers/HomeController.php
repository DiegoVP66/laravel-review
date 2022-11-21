<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('name');
        return view('site.home', ['title' => 'Home Test']);
    }
}
