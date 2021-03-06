<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/karenmcclellan/grav-admin/user/config/system.yaml',
    'modified' => 1543765052,
    'data' => [
        'absolute_urls' => false,
        'home' => [
            'alias' => '/',
            'hide_in_urls' => true
        ],
        'pages' => [
            'theme' => 'Quark',
            'markdown' => [
                'extra' => true
            ],
            'process' => [
                'markdown' => true,
                'twig' => false
            ]
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'images' => [
            'cache_perms' => '0775'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'errors' => [
            'display' => true,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ],
        'gpm' => [
            'releases' => 'stable',
            'verify_peer' => true
        ]
    ]
];
