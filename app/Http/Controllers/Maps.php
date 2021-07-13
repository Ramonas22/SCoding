<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maps extends Controller
{
     public function LoadMap(){
        $response = \GoogleMaps::load('geocoding')
        ->setParam (['address' =>'santa cruz'])
        ->get();

         return view('map', compact('resposne') );
     }
}
    
