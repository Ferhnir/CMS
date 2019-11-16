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
                'page_order' => 1,
                'active' => false
            ],
            [
                'name' => 'Your objective', 
                'html_tag' => 'YourObjective',
                'page_order' => 2,
                'active' => false
            ],
            [
                'name' => 'Achive your goal', 
                'html_tag' => 'AchiveYouGoal', 
                'page_order' => 3,
                'active' => false
            ],
            [
                'name' => 'Choose your pack', 
                'html_tag' => 'ChooseYourPack',
                'page_order' => 4,
                'active' => false
            ],
            [
                'name' => 'Pricing', 
                'html_tag' => 'Pricing',
                'page_order' => 5,
                'active' => false
            ],
            [
                'name' => 'Testimonials', 
                'html_tag' => 'Testimonials', 
                'page_order' => 6,
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
                'page_order' => 8,
                'active' => false
            ],
            [
                'name' => 'Lock your time', 
                'html_tag' => 'lockYourTime',
                'page_order' => 9,
                'active' => false
            ],
            [
                'name' => 'Subscribe', 
                'html_tag' => 'Subscribe',
                'page_order' => 10,
                'false' => false
            ],
            [
                'name' => 'Footer', 
                'html_tag' => 'Footer', 
                'page_order' => 11,
                'false' => false
            ]
        ];

        DB::table('pages')->insert($pages_array);
    }
}
