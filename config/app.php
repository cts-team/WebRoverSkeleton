<?php

return [
    //密钥
    'secret' => 'base64:6FJLIK9MymZ8ZXcqXlyu+PTVuxJtoyg284OlO/iZW/U=',
    //模块
    'module' => [
        App\Module\App\App::class
    ],
    //服务提供者
    'provider' => [
        WebRover\Framework\Asset\AssetProvider::class,
        WebRover\Framework\Cache\CacheProvider::class,
        WebRover\Framework\Config\ConfigProvider::class,
        WebRover\Framework\Database\DatabaseProvider::class,
        WebRover\Framework\Filesystem\FilesystemProvider::class,
        WebRover\Framework\Foundation\FoundationProvider::class,
        WebRover\Framework\Kernel\KernelProvider::class,
        WebRover\Framework\Monolog\LoggerProvider::class,
        WebRover\Framework\Security\SecurityProvider::class,
        WebRover\Framework\Translator\TranslatorProvider::class,
        WebRover\Framework\View\ViewProvider::class,

        //----------------------------------------------
        App\Provider\RouterProvider::class,
        App\Provider\EncryptCookieProvider::class,
        App\Provider\EventProvider::class,
    ]
];