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
            'photo_path' => 'images/teams/3QpmUuQ0Y8LnVsDwUlOYccp6dkP0oZ8tqEIR3JAj.jpeg',
            'member_name' => 'Christinne Williams',
            'member_function' => 'Project Manager',
        ]);

        Team::create([
            'photo_path' => 'images/teams/Meg0zb0qNrpKzQfWxgHBGgHjgTTMi0PHAtk2fhLI.jpeg',
            'member_name' => 'Christinne Williams',
            'member_function' => 'Junior developer',
            'leader' => 'Oui',
        ]);

        Team::create([
            'photo_path' => 'images/teams/BF5XZFMguPsw5vp7URuqfITYgq3YE5UXOoe8YWNC.jpeg',
            'member_name' => 'Christinne Williams',
            'member_function' => 'Digital designer',
        ]);
    }
}
