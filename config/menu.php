<?php

return [
    'admin' => [
        (object) array(
            'name' => 'Pages',
            'target' => 'route',
            'icon' => 'mdi-content-copy',
            'icon_after' => false,
            'group' => [
                (object) array(
                    'name' => 'Content',
                    'target' => 'route',
                    'icon' => 'mdi-page-layout-body',
                    'icon_after' => true
                )
            ],
            'href' =>'admin.index.show'
        ),
        (object) array(
            'name' => 'Users',
            'target' => 'route',
            'icon' => 'mdi-account-group',
            'icon_after' => false,
            'group' => false,
            'href' => 'admin.index.show'
        )
    ]    
];

?>