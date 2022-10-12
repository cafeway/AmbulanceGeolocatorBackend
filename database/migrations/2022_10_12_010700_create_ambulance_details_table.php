<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbulanceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulance_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("RegNo");
            $table->string("DriversName");
            $table->string("HospitalsName");
            $table->string("Id");
            $table->string("PhoneNumber");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambulance_details');
    }
}
