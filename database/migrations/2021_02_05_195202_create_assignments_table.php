<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('driver_id');
            $table->foreign('driver_id')->references('id')->on('persons');

            $table->integer('owner_id');
            $table->foreign('owner_id')->references('id')->on('persons');

            $table->integer('type_id');
            $table->foreign('type_id')->references('id')->on('type_vehicles');

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
        Schema::dropIfExists('assignments');
    }
}
