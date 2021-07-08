<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceList extends Controller
{
    //
    function show()
    {
        $data= Devices::all();
        return view('list',['Devices'=>$data]);
    }
}
