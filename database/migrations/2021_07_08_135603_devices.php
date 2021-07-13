<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Devices extends Migration
{
    /**
     * Run the migrations.
     * This migration purpose is to create table in database named Devices. It specifies column names: DeviceIdName for Device name,
     * LocationX for longtitude, LocationY for latitude and DeviceType for device enviroment
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('Devices', function (Blueprint $table) {
            $table->id();
            $table->string('DeviceIdName');
            $table->double('LocationX');
            $table->double('LocationY');
            $table->string('DeviceType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Devices');
    }
}
