<?php

use Illuminate\Database\Seeder;

class PropertiesFloorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('floor_property')->insert([
            'property_id' => '1',
            'floor_id' => '1',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '2',
            'floor_id' => '2',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '3',
            'floor_id' => '3',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '4',
            'floor_id' => '1',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '5',
            'floor_id' => '2',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '6',
            'floor_id' => '5',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '7',
            'floor_id' => '4',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '8',
            'floor_id' => '2',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '9',
            'floor_id' => '1',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '10',
            'floor_id' => '3',
        ]);

         DB::table('floor_property')->insert([
            'property_id' => '11',
            'floor_id' => '2',
        ]);
    }
}
