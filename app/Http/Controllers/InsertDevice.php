<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class InsertDevice extends Controller
{
    //
    function save(Request $req)
    {
        $req->validate([
            'DeviceIdName'=>'required | min:6',
            'LocationX'=>'required',
            'LocationY'=>'required'
        ]);

        $Devices = new Device;
        $Devices ->DeviceIdName = $req->DeviceIdName;
        $Devices ->LocationX = $req->LocationX;
        $Devices ->LocationY = $req->LocationY;
        $Devices ->DeviceType = $req->DeviceType;
        echo $Devices ->save();
        return back();
    }
}
