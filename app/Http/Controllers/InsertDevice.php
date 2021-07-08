<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class InsertDevice extends Controller
{
    //
    function save(Request $req)
    {
        print_r($req->input());
        $Devices = new Device;
        $Devices ->name = $req->name;
        $Devices ->LocationX = $req->LocationX;
        $Devices ->LocationY = $req->LocationY;
        echo $Devices ->save();

    }
}
