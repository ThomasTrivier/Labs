<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::truncate();
        Team::create([
            'photo_path' => 'img/team/1.jpg',
            'member_name' => 'Christinne Williams',
            'member_function' => 'Project Manager',
        ]);

        Team::create([
            'photo_path' => 'img/team/2.jpg',
            'member_name' => 'Christinne Williams',
            'member_function' => 'Junior developer',
        ]);

        Team::create([
            'photo_path' => 'img/team/3.jpg',
            'member_name' => 'Christinne Williams',
            'member_function' => 'Digital designer',
        ]);
    }
}
