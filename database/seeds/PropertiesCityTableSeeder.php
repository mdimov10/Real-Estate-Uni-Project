<?php

use Illuminate\Database\Seeder;

class PropertiesCityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('city_property')->insert([
            'property_id' => '1',
            'city_id' => '1',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '2',
            'city_id' => '2',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '3',
            'city_id' => '3',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '4',
            'city_id' => '1',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '5',
            'city_id' => '2',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '6',
            'city_id' => '3',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '7',
            'city_id' => '4',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '8',
            'city_id' => '4',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '9',
            'city_id' => '5',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '10',
            'city_id' => '5',
        ]);

         DB::table('city_property')->insert([
            'property_id' => '11',
            'city_id' => '3',
        ]);
    }
}
