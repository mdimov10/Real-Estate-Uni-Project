<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'slug' => 'ednostaini',
            'name' => 'Едностайни',
        ]);

        DB::table('categories')->insert([
            'slug' => 'dvustaini',
            'name' => 'Двустайни',
        ]);

        DB::table('categories')->insert([
            'slug' => 'tristaini',
            'name' => 'Тристайни',
        ]);

        DB::table('categories')->insert([
            'slug' => 'garsonieri',
            'name' => 'Гарсониери',
        ]);

        DB::table('categories')->insert([
            'slug' => 'mezoneti',
            'name' => 'Мезонети',
        ]);
    }
}
