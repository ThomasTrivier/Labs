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
        ]);
    }
}
