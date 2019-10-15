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
            'photo_path' => 'images/clients/yvphU695DcMgBJoH7Ok01B6Z1GrbCJkUmTTZShAr.jpeg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'images/clients/lQXwywvovXlrp2Z8sVOeYmqyMOezn2c6ChnZ5chZ.jpeg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'images/clients/yvphU695DcMgBJoH7Ok01B6Z1GrbCJkUmTTZShAr.jpeg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'images/clients/lQXwywvovXlrp2Z8sVOeYmqyMOezn2c6ChnZ5chZ.jpeg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'images/clients/yvphU695DcMgBJoH7Ok01B6Z1GrbCJkUmTTZShAr.jpeg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);

        Testimonial::create([
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo_path' => 'images/clients/lQXwywvovXlrp2Z8sVOeYmqyMOezn2c6ChnZ5chZ.jpeg',
            'client_name' => 'Michael Smith',
            'client_function' => 'CEO Company',
        ]);
    }
}
