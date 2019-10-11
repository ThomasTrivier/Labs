<?php

use Illuminate\Database\Seeder;
use App\SectionInfo;

class SectionInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionInfo::truncate();
        SectionInfo::create([
            'testimonial_title' => 'What our clients say',
            'service_title_left' => 'Get in',
            'service_span' => 'the Lab',
            'service_title_right' => 'and see the services',
            'button_text' => 'Browse',
        ]);
    }
}
