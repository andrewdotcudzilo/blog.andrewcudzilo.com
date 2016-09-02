<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/blogdotandrewcudzilodotcom-andrewdotcudzilo.c9users.io/config/site.yaml',
    'modified' => 1472777694,
    'data' => [
        'title' => 'blog.andrewcudzilo.com(dev)',
        'author' => [
            'name' => 'Andrew Cudzilo',
            'email' => 'andrew.cudzilo@gmail.com'
        ],
        'blog' => [
            'route' => ''
        ],
        'metadata' => [
            'description' => 'Code, Rambles, Fatherhood'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'month'
        ],
        'redirects' => [
            '/changelog' => '/blog/the-urban-jungle'
        ],
        'routes' => [
            '/something/else' => '/blog/focus-and-blur',
            '/another/one/(.*)' => '/blog/$1'
        ]
    ]
];
