<?php

return [
    'admin' => [
        (object) array(
            'name' => 'Web content',
            'icon'  => 'mdi-file-table-outline',
            'icon_after' => false,
            'group' => [
                (object) array(
                    'name' => 'Pages',
                    'icon' => 'mdi-content-copy',
                    'href' => 'admin.pages.index',
                    'icon_after' => false
                ),
                (object) array(
                    'name' => 'Navdrawer',
                    'icon' => 'mdi-menu',
                    'href' => 'admin.pages.index',
                    'icon_after' => false
                ),
            ]
        ),
        (object) array(
            'name' => 'Users',
            'icon' => 'mdi-account-group',
            'icon_after' => false,
            'group' => null,
            'href' => 'admin.users.index'
        )
    ]    
];

?>