<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CitieesTableSeeder::class);
        $this->call(FloorsTableSeeder::class);
        $this->call(PropertySeeder::class);
        $this->call(PropertiesCityTableSeeder::class);
        $this->call(PropertiesCatTableSeeder::class);
        $this->call(PropertiesFloorTableSeeder::class);
    }
}
