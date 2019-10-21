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
            'email' => "admin@admin.com",
            'password' => bcrypt("admin"),
            'photo_path' => 'images/users/OlhTE5G7M4mbN8jxeafxk7SlqkZOghtebhcHND8l.jpeg',
            'description' => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique."
        ]);

        User::create([
            'name' => "John Doe",
            'role' => "editor",
            'email' => "editor@editor.com",
            'password' => bcrypt("editor"),
            'photo_path' => 'images/users/fDqWnDeJhKbuyXwh8KAlc8U6viMEK4ZcZsg44p9k.jpeg',
            'description' => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique."
        ]);

        User::create([
            'name' => "Marie Jane",
            'email' => "guest@guest.com",
            'password' => bcrypt("guest"),
            'photo_path' => 'images/users/R9HhtkZbiX7qcOfcE2P8GsYaKY7s0BNG4wmNCmtB.jpeg',
            'description' => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique."
        ]);
    }
}
