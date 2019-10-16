<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::truncate();
        Categorie::create([
            'category' => 'Category 1'
        ]);

        Categorie::create([
            'category' => 'Category 2'
        ]);

        Categorie::create([
            'category' => 'Category 3'
        ]);

        Categorie::create([
            'category' => 'Category 4'
        ]);

        Categorie::create([
            'category' => 'Category 5'
        ]);

        Categorie::create([
            'category' => 'Category 6'
        ]);
    }
}
