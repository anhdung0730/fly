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
            $table->integer('flight_class_id')->unsigned();
            $table->string('flight_code');
            $table->integer('flight_total_passenger')->default(0);
            $table->integer('flight_cost');
            $table->integer('flight_city_from_id')->unsigned();
            $table->integer('flight_city_to_id')->unsigned();
            $table->date('flight_departure_date');
            $table->date('flight_return_date')->nullable();
            $table->integer('flight_type')->unsigned();
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
