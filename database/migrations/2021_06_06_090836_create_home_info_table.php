<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_id');
            $table->unsignedBigInteger('info_id');
            $table->foreign('home_id')->references('id')->on('homes');
            $table->foreign('info_id')->references('id')->on('infos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_info');
    }
}
