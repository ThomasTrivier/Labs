<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();
        Project::create([
            'photo_path' => 'images/projects/rf0WQeum1dJWnHDCIAM974l8rge40BgadwWwdQLJ.jpeg',
            'title' => 'Get in the lab',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Project::create([
            'photo_path' => 'images/projects/8WzwX6HPmvSuyBudUdUMUFkG3vlSBDueQgqBXkuH.jpeg',
            'title' => 'Projects online',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Project::create([
            'photo_path' => 'images/projects/DL0lKIYhHticPrMAErHZnMjJOXzzcgHIioBWYFkI.jpeg',
            'title' => 'SMART MARKETING',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);
    }
}
