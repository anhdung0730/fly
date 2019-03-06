<?php

use Illuminate\Database\Seeder;

class AirportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports')->insert([
            'airport_name' => 'Noi Bai'
        ]);

        DB::table('airports')->insert([
            'airport_name' => 'Tan Son Nhat'
        ]);
    }
}
