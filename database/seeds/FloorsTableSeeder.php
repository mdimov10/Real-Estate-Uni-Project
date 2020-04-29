<?php

use App\Floor;
use Illuminate\Database\Seeder;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Floor::insert([
            'slug' => 'purvi-etaj',
            'name' => 'Етаж първи'
        ]);

        Floor::insert([
            'slug' => 'vtori-etaj',
            'name' => 'Етаж втори'
        ]);

        Floor::insert([
            'slug' => 'treti-etaj',
            'name' => 'Етаж трети'
        ]);

        Floor::insert([
            'slug' => 'chetvurti-etaj',
            'name' => 'Етаж четвърти'
        ]);

        Floor::insert([
            'slug' => 'peti-etaj',
            'name' => 'Етаж пети'
        ]);
    }
}
