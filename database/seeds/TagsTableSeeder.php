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
            'tag' => 'tag1'
        ]);

        Tag::create([
            'tag' => 'tag2'
        ]);

        Tag::create([
            'tag' => 'tag3'
        ]);

        Tag::create([
            'tag' => 'tag4'
        ]);

        Tag::create([
            'tag' => 'tag5'
        ]);

        Tag::create([
            'tag' => 'tag6'
        ]);

        Tag::create([
            'tag' => 'tag7'
        ]);

        Tag::create([
            'tag' => 'tag8'
        ]);
    }
}
