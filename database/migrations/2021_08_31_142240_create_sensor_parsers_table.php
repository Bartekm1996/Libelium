<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorParsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensorParser', function (Blueprint $table) {
	    $table->id();
            $table->string('id_wasp');
	    $table->string('id_secret');
	    $table->string('frame_type');
	    $table->string('frame_number');
	    $table->string('sensor');
	    $table->string('value');
	    $table->string('timestamp');
	    $table->string('sync');
	    $table->string('raw');
	    $table->string('parser_type');
	    $table->string('MeshliumDB');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensorParser');
    }
}
