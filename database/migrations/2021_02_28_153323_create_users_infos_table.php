<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_infos', function (Blueprint $table) {
            $table->id();
            $table->string('dp')->nullable();
            $table->string('contact');
            $table->string('profession');
            $table->string('yeargrad');
            $table->string('workingstatus');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('zip')->nullable();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('users_infos');
    }
}
