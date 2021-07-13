<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//This Model purpose is to establish communication between database tabel Devices and application.
//Model is related to Devicelist controller, InsertDevice controller.
class Device extends Model
{
    use HasFactory;
    protected $table ='Devices';
    //Function below prevents timestamps
    public $timestamps = false;
}
