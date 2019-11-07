<?php

return [
    'admin' => [
        (object) array(
            'title' => 'Pages',
            'icon' => 'mdi-content-copy',
            'icon_after' => false,
            'group' => [
                (object) array(
                    'name' => 'Content',
                    'target' => 'admin.pages.index',
                    'icon' => 'mdi-page-layout-body',
                    'icon_after' => true
                ),
                (object) array(
                    'name' => 'Add new page',
                    'target' => 'admin.pages.create',
                    'icon' => 'mdi-note-plus',
                    'icon_after' => true
                )
            ],
        ),
        (object) array(
            'title' => 'Users',
            'icon' => 'mdi-account-group',
            'icon_after' => false,
            'group' => null,
            'href' => 'admin.users.index'
        )
    ]    
];

?>