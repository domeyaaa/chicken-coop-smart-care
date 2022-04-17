<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Breed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breed',function(Blueprint $table){
            $table->id();
            $table->string('chicken_id',20)->references('id')->on('chickens');
            $table->string('chicken_hen_id',20)->references('id')->on('chickens');
            $table->integer('egg_total');
            $table->integer('egg_infected_total');
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
