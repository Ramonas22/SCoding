<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceList extends Controller
{
    //This Controller purpose is to pass data from database device table to home page where it will be represented in a table for user.
    //It is related to Device model, Database and home page.
    function show()
    {
        $Deviceslist =Device::all();
        return view('home', ['Deviceslist'=>$Deviceslist]);
    }
}
