<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::truncate();
        Image::create([
            'placement' => 'logo',
            'media_path' => 'images/logo/Tf3wo4rFjIIAY1ldfOiXJgzjcPgAfWRXhjzxDKFN.png',
        ]);

        Image::create([
            'placement' => 'carousel',
            'media_path' => 'images/carousel/9f7V6Pdgj8zOhrFZZUmqx4jaaZQoXUEqqBKiJs1c.jpeg',
        ]);

        Image::create([
            'placement' => 'carousel',
            'media_path' => 'images/carousel/drXnwHGKRPse4eggf7df7PPKzA7BTNOdAwreRuC8.jpeg',
        ]);
    }
}
