<?php

return [
    //数据库
    'database' => [
        'default' => 'default',
        'connections' => [
            'default' => [
                'host' => 'localhost',
                'port' => 3306,
                'user' => '',
                'password' => '',
                'dbname' => '',
                'driver' => 'pdo_mysql',
                'prefix' => ''
            ]
        ]
    ],
    //视图
    'view' => [
        'options' => [
            'cache' => storage_path('framework/view'),
        ],
        'extensions' => [
            WebRover\Framework\View\Extension\AppExtension::class,
            WebRover\Framework\View\Extension\AssetExtension::class,
            WebRover\Framework\View\Extension\TranslatorExtension::class,
        ]
    ],
    //缓存
    'cache' => [
        'default' => 'file',
        'stores' => [
            'file' => [
                'driver' => 'file',
                'prefix' => 'webrover_',
                'path' => storage_path('app/cache')
            ],
            'predis' => [
                'parameters' => [],
                'options' => []
            ]
        ]
    ],
    //翻译
    'translator' => [
        'locale' => 'zh_CN',
        'fallback' => ['en'],
        'cache_dir' => storage_path('app/translation')
    ],
    //附件
    'assets' => [
    ],
    'session' => [
        'default' => 'file',
        'encrypt' => true,
        'options' => [],
        'handlers' => [
            'file' => [
                'handler' => 'file',
                'path' => storage_path('framework/session')
            ],
            'memcached' => [
                'handler' => 'memcached',
                'client' => [
                    'servers' => [],
                    'options' => []
                ],
                'options' => [
                    'expiretime' => 86400,
                    'prefix' => 'wr1s'
                ]
            ],
            'pdo' => [
                'handler' => 'pdo',
                'connection' => '',
                'options' => []
            ]
        ]
    ],
    'security' => [
        'encrypt' => [
            'key' => substr(config('app.secret'),7),
            'cipher' => 'AES-256-CBC'
        ]
    ],
    'logger' => [
        'path' => storage_path('logs'),
        'level' => Monolog\Logger::DEBUG
    ]
];
