<?php

use Illuminate\Database\Seeder;
use App\Navbar;

class NavbarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Navbar::truncate();
        Navbar::create([
            'nav1' => 'Home',
            'nav2' => 'Services',
            'nav3' => 'Blog',
            'nav4' => 'Contact',
        ]);
    }
}
