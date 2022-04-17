<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vaccinate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinate',function(Blueprint $table){
            $table->id();
            $table->string('chicken_id',20)->references('id')->on('chickens');
            $table->integer('vaccine_id')->references('id')->on('vaccines');
            $table->integer('user_id')->references('id')->on('users');
            $table->float('chicken_weight');
            $table->boolean('active')->default(1);
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
