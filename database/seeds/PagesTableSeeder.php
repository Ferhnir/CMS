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
            ['nav_title' => null, 'html_id' => 'Intro', 'nav_order' => null, 'page_order' => 1],
            ['nav_title' => 'Your objective', 'html_id' => 'YourObjective', 'nav_order' => 1, 'page_order' => 2],
            ['nav_title' => 'Achive your goal', 'html_id' => 'AchiveYouGoal', 'nav_order' => 2, 'page_order' => 3],
            ['nav_title' => 'Choose your pack', 'html_id' => 'ChooseYourPack', 'nav_order' => 3, 'page_order' => 4],
            ['nav_title' => 'Pricing', 'html_id' => 'Pricing', 'nav_order' => 4, 'page_order' => 5],
            ['nav_title' => 'Testimonials', 'html_id' => 'Testimonials', 'nav_order' => 5, 'page_order' => 6],
            ['nav_title' => null, 'html_id' => 'AchiveYouGoal#extra', 'nav_order' => null, 'page_order' => 7],
            ['nav_title' => 'Contact me', 'html_id' => 'ContactMe', 'nav_order' => 6, 'page_order' => 8],
            ['nav_title' => null, 'html_id' => 'lockYourTime', 'nav_order' => null, 'page_order' => 9],
            ['nav_title' => null, 'html_id' => 'Subscribe', 'nav_order' => null, 'page_order' => 10],
            ['nav_title' => null, 'html_id' => 'Footer', 'nav_order' => null, 'page_order' => 11]
        ];

        DB::table('pages')->insert($pages_array);
    }
}
