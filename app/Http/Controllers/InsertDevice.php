<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class InsertDevice extends Controller
{
    //This controller purpose is to request data from user home page and pass that data to database table Devices where it will be stored for further use.
    //Requested data has 3 input fields: Device Id Name which has requirements of at least 6 symbols, LocationX represents Longtitude of the device on the map
    //and it has requiret bond from -180 to 180 to the lenght of inputed number of max 10 charachters. LocationY represents Latitude of the device on the map
    //and it has requiret bond from -85.05112878 to 85.05112878 to the lenght of inputed number of max 9 charachters. Maximum bonds where picked accordingly to 
    //the maximum actual locations that could be picked on earth map. The last input field required has two options that would describe if device is for work or
    //home enviroment. Once all the fields have been provided to the function it will pass the data to database table Devices where it will autoincrement ID and
    //fill rest of the table with gained data and then save.
    //This controller is related to Device model, home page and database.
    function save(Request $req)
    {
        $req->validate([
            'DeviceIdName'=>'required | min:6',
            'LocationX'=>'required |between:-180,180 | max:10',
            'LocationY'=>'required |between:-85.05112878,85.05112878 | max:9'
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
