<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'link_name' => str_random(10),
            'link_title' => str_random(10),
            'link_url' => 'www.'.str_random(10).'.com',
            'link_order' => random_int(1,10),
        ];
        DB::table('links')->insert($data);
    }
}
