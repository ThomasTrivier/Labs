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
            'placement' => 'navbar',
            'media_path' => 'img/logo.png',
        ]);

        Image::create([
            'placement' => 'carousel',
            'media_path' => 'img/01.jpg',
        ]);

        Image::create([
            'placement' => 'carousel',
            'media_path' => 'img/02.jpg',
        ]);
    }
}
