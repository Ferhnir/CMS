<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $pages_array = [
            [
                'name' => 'Intro page',
                'html_tag' => 'Intro',
                'order' => 1,
                'active' => false
            ],
            [
                'name' => 'Your objective', 
                'html_tag' => 'YourObjective',
                'order' => 2,
                'active' => false
            ],
            [
                'name' => 'Achive your goal', 
                'html_tag' => 'AchiveYouGoal', 
                'order' => 3,
                'active' => false
            ],
            [
                'name' => 'Choose your pack', 
                'html_tag' => 'ChooseYourPack',
                'order' => 4,
                'active' => false
            ],
            [
                'name' => 'Pricing', 
                'html_tag' => 'Pricing',
                'order' => 5,
                'active' => false
            ],
            [
                'name' => 'Testimonials', 
                'html_tag' => 'Testimonials', 
                'order' => 6,
                'active' => false, 
            ],
            [
                'name' => 'Achive You Goal (extra)', 
                'html_tag' => 'AchiveYouGoal#extra', 
                'nav_order' => 7, 
                'active' => false 
            ],
            [
                'name' => 'Contact me', 
                'html_tag' => 'ContactMe',
                'order' => 8,
                'active' => false
            ],
            [
                'name' => 'Lock your time', 
                'html_tag' => 'lockYourTime',
                'order' => 9,
                'active' => false
            ],
            [
                'name' => 'Subscribe', 
                'html_tag' => 'Subscribe',
                'order' => 10,
                'false' => false
            ],
            [
                'name' => 'Footer', 
                'html_tag' => 'Footer', 
                'order' => 11,
                'false' => false
            ]
        ];

        DB::table('pages')->insert($pages_array);
    }
}
