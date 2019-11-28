<?php

return [
    'admin' => [
        (object) array(
            'name' => 'Web content',
            'icon'  => 'mdi-webpack',
            'icon_after' => false,
            'group' => [
                (object) array(
                    'name' => 'Pages',
                    'icon' => 'mdi-content-copy',
                    'href' => 'admin.webcontent.pages.index',
                    'icon_after' => false
                ),
                (object) array(
                    'name' => 'Navigation',
                    'icon' => 'mdi-menu',
                    'href' => 'admin.webcontent.navdrawer.index',
                    'icon_after' => false
                ),
            ]
        ),
        (object) array(
            'name' => 'Users',
            'icon' => 'mdi-account',
            'icon_after' => false,
            'href' => 'admin.users.index'
        )
    ]    
];

?>