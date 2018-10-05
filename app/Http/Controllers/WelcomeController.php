<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //method acessed by routes
   public function example(){
       $name = 'JOÃO';
       return view('example')->with('name', $name);
   }
}
