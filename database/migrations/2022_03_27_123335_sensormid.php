<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sensormid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensormid',function(Blueprint $table){
            $table->id();
            $table->float('sm_temperature')->nullable();
            $table->float('sm_humudity')->nullable();
            $table->float('sm_ammonia')->nullable();
            $table->float('sm_light_intensity')->nullable();
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
        //
    }
}
