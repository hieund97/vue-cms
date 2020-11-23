<?php
return [
    // Menu Dashboard
    'dashboard' => [
        'name'      => 'Dashboard',
        'icon'      => 'fas fa-fw fa-tachometer-alt',
        'url'       => '/admin',
        'child'     => [],
    ],

    // Menu Product
    'product' => [
        'name'      => 'Product',
        'icon'      => 'fas fa-shopping-bag',
        'url'       => '/admin/product',
        'child'     => [
            'create_product' => [
                'name'      => 'Product',
                'url'       => '/admin/product/create',
            ],

            'list_product' => [
                'name'      => 'Product',
                'url'       => '/admin/product',
            ],
        ],
    ],
];
