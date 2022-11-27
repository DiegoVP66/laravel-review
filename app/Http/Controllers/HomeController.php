<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Options;
class HomeController extends Controller
{
    public function home(Request $request){

        $options = Options::all();
        return view('site.home', ['title' => 'Home', 'options'=> $options]);


    }

    public function save(Request $request){
        //Home::create($request->all());

        $request->validate([
            'name'=> 'required|min:3|max:40',
            'age'=> 'required',
            'email' => 'required',
            'options'=>'required',
            'message'=>'required|max:2000'
        ]);
    }
}
