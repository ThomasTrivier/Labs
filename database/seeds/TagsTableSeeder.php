<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        Tag::create([
            'tag' => 'tag 1'
        ]);

        Tag::create([
            'tag' => 'tag 2'
        ]);

        Tag::create([
            'tag' => 'tag 3'
        ]);

        Tag::create([
            'tag' => 'tag 4'
        ]);

        Tag::create([
            'tag' => 'tag 5'
        ]);

        Tag::create([
            'tag' => 'tag 6'
        ]);

        Tag::create([
            'tag' => 'tag 7'
        ]);

        Tag::create([
            'tag' => 'tag 8'
        ]);
    }
}
