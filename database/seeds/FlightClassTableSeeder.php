<?php

use Illuminate\Database\Seeder;

class FlightClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flight_classes')->insert([
            'flight_classes_name' => 'Economy',
        ]);

        DB::table('flight_classes')->insert([
            'flight_classes_name' => 'Business',
        ]);

        DB::table('flight_classes')->insert([
            'flight_classes_name' => 'Premium Economy',
        ]);
    }
}
