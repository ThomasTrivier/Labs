<?php

use Illuminate\Database\Seeder;
use App\Testimonial;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::truncate();
        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'img/avatar/01.jpg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'img/avatar/02.jpg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'img/avatar/01.jpg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'img/avatar/02.jpg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'img/avatar/01.jpg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'img/avatar/02.jpg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);
    }
}
