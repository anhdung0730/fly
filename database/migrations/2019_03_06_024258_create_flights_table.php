<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('flight_class_id');
            $table->string('flight_code');
            $table->integer('flight_total');
            $table->integer('flight_cost');
            $table->integer('flight_city_from_id');
            $table->integer('flight_city_to_id');
            $table->date('flight_departure_date');
            $table->date('flight_return_date');

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
        Schema::dropIfExists('flights');
    }
}
