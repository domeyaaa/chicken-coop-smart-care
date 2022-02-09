<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('titlename',10);
            $table->string('firstname',100);
            $table->string('lastname',100);
            $table->string('std_id',11)->nullable()->unique();
            $table->string('email',200)->unique();
            $table->boolean('role',1)->default(0);
            $table->boolean('active',1)->default(0);
            $table->string('password',200);
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
        Schema::dropIfExists('users');
    }
}
