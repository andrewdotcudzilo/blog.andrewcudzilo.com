<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/user/blogdotandrewcudzilodotcom-andrewdotcudzilo.c9users.io/config/site.yaml',
    'modified' => 1472691826,
    'data' => [
        'title' => 'blog.andrewcudzilo.com(dev)',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@test.com'
        ],
        'blog' => [
            'route' => ''
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
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
