<?php

use Illuminate\Database\Seeder;

class FlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([
            'flight_class_id' => '0',
            'flight_code' => 'MB001',
            'flight_cost' => '10000000',
            'flight_city_from_id' => '0',
            'flight_city_to_id' => '1',
            'flight_departure_date' => '2019-05-01',
            'flight_type' => '0',
        ]);

        DB::table('flights')->insert([
            'flight_class_id' => '1',
            'flight_code' => 'MB002',
            'flight_total_passenger' => '100',
            'flight_cost' => '20000000',
            'flight_city_from_id' => '1',
            'flight_city_to_id' => '0',
            'flight_departure_date' => '2019-05-15',
            'flight_return_date' => '2019-06-01',
            'flight_type' => '1',
        ]);
    }
}
