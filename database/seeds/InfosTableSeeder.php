<?php

use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            'title' => 'Contact us',
            'description' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'building_name' => 'Main Office',
            'adress_part_1' => 'C/ Libertad, 34',
            'adress_part_2' => '05200 Arévalo',
            'tel' => '0034 37483 2445 322',
            'email' => 'hello@company.com',
        ]);
    }
}
