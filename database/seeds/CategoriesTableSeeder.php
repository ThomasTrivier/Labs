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
            'category' => 'Category1'
        ]);

        Categorie::create([
            'category' => 'Category2'
        ]);

        Categorie::create([
            'category' => 'Category3'
        ]);

        Categorie::create([
            'category' => 'Category4'
        ]);

        Categorie::create([
            'category' => 'Category5'
        ]);

        Categorie::create([
            'category' => 'Category6'
        ]);
    }
}
