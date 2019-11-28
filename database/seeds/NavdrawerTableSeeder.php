<?php

use Illuminate\Database\Seeder;

class NavdrawerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nav_array = [
            [
                'name' => 'Abc',
                'order' => 1,
                'page_id' => 1
            ],
            [
                'name' => 'Abc 1',
                'order' => 2,
                'page_id' => 2
            ],
            [
                'name' => 'Abc 2',
                'order' => 3,
                'page_id' => 3
            ],
            [
                'name' => 'Abc 3',
                'order' => 4,
                'page_id' => 4
            ],
            [
                'name' => 'Abc 4',
                'order' => 5,
                'page_id' => null
            ]
        ];

        DB::table('navdrawer')->insert($nav_array);
    }
}
