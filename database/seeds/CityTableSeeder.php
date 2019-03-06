<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cities')->insert([
          'city_name' => 'Ha Noi',
          'city_code' => 'HN',
          'airport_id' => '0'
      ]);

      DB::table('cities')->insert([
          'city_name' => 'Ho Chi Minh',
          'city_code' => 'HCM',
          'airport_id' => '1'
      ]);
    }
}
