<?php

use Illuminate\Database\Seeder;
use App\SectionService;

class SectionServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionService::truncate();
        SectionService::create([
            'title_left' => 'Get in',
            'span' => 'the Lab',
            'title_right' => 'and see the services',
            'button_text' => 'Browse',
        ]);
    }
}
