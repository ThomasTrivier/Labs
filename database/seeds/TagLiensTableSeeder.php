<?php

use Illuminate\Database\Seeder;
use App\TagLien;

class TagLiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TagLien::truncate();
        TagLien::create([
            'article' => 1,
            'tag' => 1
        ]);

        TagLien::create([
            'article' => 2,
            'tag' => 2
        ]);

        TagLien::create([
            'article' => 2,
            'tag' => 3
        ]);

        TagLien::create([
            'article' => 3,
            'tag' => 4
        ]);
    }
}
