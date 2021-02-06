<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_plate');
            $table->string('color');
            $table->string('brand');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('persons');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('persons');
            $table->boolean('status');
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
        Schema::dropIfExists('vehicles');
    }
}
