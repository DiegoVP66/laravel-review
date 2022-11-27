<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
class HomeController extends Controller
{
    public function home(Request $request){

        $options = [
            '1' => 'Dúvida',
            '2' => 'Elogio'
        ];

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
