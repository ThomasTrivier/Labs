<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(NavbarsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(InfosTableSeeder::class);
    }
}
