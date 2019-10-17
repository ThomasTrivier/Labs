<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();
        Comment::create([
            'user_name' => 'Michael Smith',
            'photo_path' => '/img/avatar/01.jpg',
            'comment' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article' => 1
        ]);

        Comment::create([
            'user_name' => 'Michelle Smith',
            'photo_path' => '/img/avatar/02.jpg',
            'comment' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article' => 1
        ]);

        Comment::create([
            'user_name' => 'Michael Smith',
            'photo_path' => '/img/avatar/01.jpg',
            'comment' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article' => 2
        ]);

        Comment::create([
            'user_name' => 'Michelle Smith',
            'photo_path' => '/img/avatar/02.jpg',
            'comment' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'article' => 3
        ]);
    }
}
