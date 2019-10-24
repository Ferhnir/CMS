<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show()
    {
        return view('index', [
            'yourObjCards' => [
                ['title' => 'become fit', 'icon' => 'fas fa-star'],
                ['title' => 'losing weight', 'icon' => 'far fa-heart'],
                ['title' => 'tone up my body', 'icon' => 'fas fa-bolt'],
                ['title' => 'release stress', 'icon' => 'fas fa-anchor']
            ],
            'achiveYourGoals' => [
                [ 'title' => 'DECIDE TO MAKE THE CHANGE', 'description' => '', 'active' => false ],
                [ 'title' => 'DEFINE YOUR REASONS WHY', 'description' => '', 'active' => false  ],
                [ 'title' => 'CREATE A PLAN TO REACH YOUR GOALS', 'description' => '', 'active' => false  ],
                [ 'title' => 'WORK THE PLAN UNTIL YOU REACH YOUR GOAL', 'description' => '', 'active' => false  ]
            ],
            'chooseYourPack' => [
                'cards' => [
                    [ 'title' => "WE PUSH FOR WORTHY CAUSES", 'subtitle' => "Join our free Fit For a Cause Challenge", 'img' => "package1.jpg" ],
                    [ 'title' => "BEST OF FOUR", 'subtitle' => "Have a look at our Fit 4 Programs", 'img' => "package2.jpg"  ],
                    [ 'title' => "TURN ORDINARY MOM TO SEXY MOM", 'subtitle' => "MOMS FOCUSED PROGRAMS", 'img' => "package3.jpg"  ],
                    [ 'title' => "EAT YOUR FAVORE AND LOOSE THE GUT", 'subtitle' => "A COMPLETE NUTRITIONAL COACHING", 'img' => "package4.jpg"  ],
                    [ 'title' => "MAKE DAD HANDSOME AGAIN", 'subtitle' => "DAD'S FOCUSED PROGRAMS", 'img' => "package6.jpg"  ],
                    [ 'title' => "BEST OF TWO", 'subtitle' => "TWO FOR ONE TEAM COACHING", 'img' => "package5.jpg"  ],
                ],
                'packs' => [
                    [ 
                        'bg' => "y-pack", 
                        'title' => "3 MONTH <br/>TRANSFORMATION <br/>MEMBERSHIP", 
                        'price' => "£300", 
                        'set' => "#300", 
                        'details' => [ "3 Times Per Week", "30 Minutes", "100% Money back", "2 Free Pt for Family", "And many more"]
                    ],[ 
                        'bg' => "b-pack", 
                        'title' => "3 MONTH <br/>TRANSFORMATION <br/>MEMBERSHIP", 
                        'price' => "£360", 
                        'set' => "#360", 
                        'details' => ["3 Times Per Week", "45 Minutes", "100% Money back", "2 Free Pt for Family", "And many more"]
                    ],[ 
                        'bg' => "y-pack", 
                        'title' => "3 MONTH <br/>TRANSFORMATION <br/>MEMBERSHIP", 
                        'price' => "£420", 
                        'set' => "#420", 
                        'details' => ["3 Times Per Week", "60 Minutes", "100% Money back", "2 Free Pt for Family", "And many more"]
                    ]
                ]
            ],
            'testimoniales' => [
                [ 'name' => 'Mamili', 'proff' => 'Engineer', 'avatar' => 'y10.png', 'desc' => 'When I started I could not do a single push up, now I am pushing equivalent to my age 40x. Coach Ben was clear in the when I will achieve that..Super happy.' ],
                [ 'name' => 'Azxc', 'proff' => 'SubEngineer', 'avatar' => 'y11.png', 'desc' => 'When I started I could not do a single push up, now I am pushing equivalent to my age 40x. Coach Ben was clear in the when I will achieve that..Super happy.' ],
                [ 'name' => 'Srtwertre', 'proff' => 'ExEngineer', 'avatar' => 'y12.png', 'desc' => 'When I started I could not do a single push up, now I am pushing equivalent to my age 40x. Coach Ben was clear in the when I will achieve that..Super happy.' ],
            ],
            'contact' => [
                [ 'title' => 'Call', 'icon' => '$vuetify.icons.phone', 'target' => 'tel:+447366911226' ],
                [ 'title' => 'WhatsApp', 'icon' => '$vuetify.icons.whatsapp', 'target' => 'whatsapp://call?number=+447366911226' ],
                [ 'title' => 'Facebook', 'icon' => '$vuetify.icons.fb', 'target' => '']
                ],
            'icons' => [
                'googlemaps' => '$vuetify.icons.googlemaps'
            ],
            'lockYourTime' => [
                'header' => 'Get a chance to lock your time and rates now!',
                'list' => [
                    'This month only! 25% off',
                    '3 amazing Membership Packages available',
                    'A Free 5 Day Clarity Consult as standard',
                    '100% Money back on all Memberships',
                    'Fully insured and qualified coaches',
                    'Personalized Blogs',
                    'Fully insured and Qualified Coaches',
                    'Monthly Prize Draws',
                    '2 Free Personal Coaching for Family and Friends',
                    'And many more goodies'
                ]
            ]
        ]);
    }    
}


