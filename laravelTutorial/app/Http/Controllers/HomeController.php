<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
         $data = "Sample data";
         $data_array = [
            'fname' => "Aira",
            'lname' => "Simeon",
           ];
    return view('home')->with('datas',[$data,$data_array]);
    }
}
