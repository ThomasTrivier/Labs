<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => "Administrator",
            'role' => "admin",
            'email' => "ratchethomas@outlook.com",
            'password' => bcrypt("password"),
            'photo_path' => '/img/avatar/03.jpg',
            'description' => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique."
        ]);
    }
}
