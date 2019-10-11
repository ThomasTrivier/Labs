<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::truncate();
        Media::create([
            'placement' => 'navbar',
            'media_path' => 'img/logo.png',
        ]);

        Media::create([
            'placement' => 'carousel',
            'media_path' => 'img/01.jpg',
        ]);

        Media::create([
            'placement' => 'carousel',
            'media_path' => 'img/02.jpg',
        ]);
    }
}
