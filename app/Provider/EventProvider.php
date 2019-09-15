<?php


namespace App\Provider;

use WebRover\Framework\Cookie\CookieListener;
use WebRover\Framework\Event\EventProvider as ServiceProvider;
use WebRover\Framework\Kernel\EventListener\RouterListener;

/**
 * Class EventProvider
 * @package App\Provider
 */
class EventProvider extends ServiceProvider
{
    protected $listen = [];

    protected $subscribe = [
        RouterListener::class,
//        CookieListener::class,
    ];
}