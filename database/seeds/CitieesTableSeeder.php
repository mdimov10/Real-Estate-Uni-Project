<?php

use App\City;
use Illuminate\Database\Seeder;

class CitieesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            'slug' => 'varna',
            'name' => 'Варна'
        ]);

        City::insert([
            'slug' => 'sofia',
            'name' => 'София'
        ]);

        City::insert([
            'slug' => 'plovdiv',
            'name' => 'Пловдив'
        ]);

        City::insert([
            'slug' => 'burgas',
            'name' => 'Бургас'
        ]);

        City::insert([
            'slug' => 'ruse',
            'name' => 'Русе'
        ]);
    }
}
