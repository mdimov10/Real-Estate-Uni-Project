<?php

use App\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'slug' => 'imot1',
            'title' =>'Имот 1',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'price' => '400',
            'image_name' => 'apartament1.jpg'
        ]);

        Property::create([
            'slug' => 'imot2',
            'title' =>'Имот 2',
            'description' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500',
            'price' => '500',
            'image_name' => '2.jpg'
        ]);

        Property::create([
            'slug' => 'imot3',
            'title' =>'Имот 3',
            'description' => 'hen an unknown printer took a galley of type and scrambled it to make a typ',
            'price' => '550',
            'image_name' => 'apartament3.jpg'
        ]);

        Property::create([
            'slug' => 'imot4',
            'title' =>'Имот 4',
            'description' => 'specimen book. It has survived not only five centuries, but also the leap into elec',
            'price' => '650',
            'image_name' => '4.jpg'
        ]);

        Property::create([
            'slug' => 'imot5',
            'title' =>'Имот 5',
            'description' => 'specimen book. It has survived not only five centuries, but also the leap into elec',
            'price' => '400',
            'image_name' => '5.jpg'
        ]);

        Property::create([
            'slug' => 'imot 6',
            'title' =>'Имот 6',
            'description' => 'specimen book. It has survived not only five centuries',
            'price' => '750',
            'image_name' => 'apartament1.jpg'
        ]);

        Property::create([
            'slug' => 'imot7',
            'title' =>'Имот 7',
            'description' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500',
            'price' => '525',
            'image_name' => '2.jpg'
        ]);

        Property::create([
            'slug' => 'imot8',
            'title' =>'Имот 8',
            'description' => 'hen an unknown printer took a galley of type and scrambled it to make a typ',
            'price' => '458',
            'image_name' => 'apartament3.jpg'
        ]);

        Property::create([
            'slug' => 'imot9',
            'title' =>'Имот 9',
            'description' => 'It has survived not only five centuries, but also the leap into elec',
            'price' => '666',
            'image_name' => '4.jpg'
        ]);

        Property::create([
            'slug' => 'imot10',
            'title' =>'Имот 10',
            'description' => 'specimen book, but also the leap into elec',
            'price' => '900',
            'image_name' => '5.jpg'
        ]);

        Property::create([
            'slug' => 'imot11',
            'title' =>'Имот 11',
            'description' => 'specimen book. It has survived not only five centuries',
            'price' => '1250',
            'image_name' => 'apartament1.jpg'
        ]);
    }
}
