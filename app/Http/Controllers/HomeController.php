<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
class HomeController extends Controller
{
    public function home(Request $request){
       /* echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('name');
        */

        // $person = new Home();

        //     $person->name = $request->input('name');
        //     $person->age = $request->input('age');

        // print_r($person->getAttributes());

       return view('site.home', ['title' => 'Home Test']);

    }

    public function save(Request $request){
        //Home::create($request->all());

        $request->validate([
            'name'=> 'required',
            'age'=> 'required',
            'email' => 'required',
            'message'=>'required'
        ]);
    }
}
