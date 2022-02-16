<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chicken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chickens',function(Blueprint $table){
            $table->string('id',20)->primary();
            $table->integer('chickenspecies_id')->references('id')->on('chickenspecies');
            $table->integer('chicken_phase_id')->references('id')->on('chickenphases');
            $table->string('father_id',20)->references('id')->on('chickens');
            $table->string('mother_id',20)->references('id')->on('chickens');;
            $table->string('expect_sex',10);
            $table->string('sex',10)->nullable();
            $table->float('temp_born');
            $table->date('birthday');
            $table->date('first_egg_date')->nullable();
            $table->float('first_egg_weight')->nullable();
            $table->integer('first_egg_age')->nullable();
            $table->float('weight_first_egg')->nullable();
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
