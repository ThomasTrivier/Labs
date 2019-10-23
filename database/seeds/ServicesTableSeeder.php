<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();
        Service::create([
            'service_icon' => 'flaticon-023-flask',
            'service_title' => 'Get in the lab',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Service::create([
            'service_icon' => 'flaticon-011-compass',
            'service_title' => 'Projects online',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Service::create([
            'service_icon' => 'flaticon-037-idea',
            'service_title' => 'SMART MARKETING',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Service::create([
            'service_icon' => 'flaticon-039-vector',
            'service_title' => 'Social Media',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Service::create([
            'service_icon' => 'flaticon-036-brainstorming',
            'service_title' => 'Brainstorming',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Service::create([
            'service_icon' => 'flaticon-026-search',
            'service_title' => 'Documented',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Service::create([
            'service_icon' => 'flaticon-018-laptop-1',
            'service_title' => 'Responsive',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Service::create([
            'service_icon' => 'flaticon-043-sketch',
            'service_title' => 'Retina ready',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Service::create([
            'service_icon' => 'flaticon-012-cube',
            'service_title' => 'Ultra modern',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);

        Service::create([
            'service_icon' => 'flaticon-012-cube',
            'service_title' => 'Ultra modern',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.',
        ]);
    }
}
