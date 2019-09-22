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
        'extensions' => []
    ],
    //缓存
    'cache' => [
        'default' => 'file',
        'encrypt' => true,
        'stores' => [
            'file' => [
                'driver' => 'file',
                'path' => storage_path('app/cache')
            ],
            'redis' => [
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
    //加密
    'encrypter' => [
        'key' => config('app.secret'),
        'cipher' => 'AES-256-CBC'
    ],
    //Session
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
    'logger' => [
        'path' => storage_path('logs'),
        'level' => Monolog\Logger::DEBUG
    ]
];