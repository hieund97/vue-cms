<?php
return [
    // Menu Dashboard
    'dashboard' => [
        'name'      => 'Dashboard',
        'icon'      => 'fas fa-fw fa-tachometer-alt',
        'url'       => '/admin',
    ],

    // Menu Product
    'product' => [
        'name'      => 'Product',
        'icon'      => 'fas fa-shopping-bag',
        'url'       => '/admin/product',
        'child'     => [
            'create_product' => [
                'name'      => 'Create Product',
                'url'       => '/admin/product/create',
            ],

            'list_product' => [
                'name'      => 'List Product',
                'url'       => '/admin/product',
            ],
        ],
    ],

    // Menu Category
    'category' => [
        'name'      => 'Category',
        'icon'      => 'fas fa-shopping-bag',
        'url'       => '/admin/category',
        'child'     => [
            'create_category' => [
                'name'      => 'Create Category',
                'url'       => '/admin/category/create',
            ],

            'list_category' => [
                'name'      => 'List Category',
                'url'       => '/admin/category',
            ],
        ],
    ],
];
