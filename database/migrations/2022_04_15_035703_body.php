<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Body extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body',function(Blueprint $table){
            $table->id();
            $table->float('volume');
            $table->string('chicken_id',20)->references('id')->on('chickens');
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('bodytype_id')->references('id')->on('bodytype');
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
