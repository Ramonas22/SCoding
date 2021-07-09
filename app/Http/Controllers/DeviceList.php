<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceList extends Controller
{
    //
    function show()
    {
        $Deviceslist =Device::all();
        return view('home', ['Deviceslist'=>$Deviceslist]);
    }
}
