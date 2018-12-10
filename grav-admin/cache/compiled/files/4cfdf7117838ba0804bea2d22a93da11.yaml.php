<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://Sichuan/Sichuan.yaml',
    'modified' => 1543764305,
    'data' => [
        'enabled' => true,
        'production-mode' => true,
        'grid-size' => 'grid-lg',
        'header-fixed' => true,
        'header-animated' => true,
        'header-dark' => false,
        'header-transparent' => false,
        'sticky-footer' => true,
        'blog-page' => '/blog',
        'spectre' => [
            'exp' => false,
            'icons' => false
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/sichuan',
                            1 => 'user/themes/quark'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
