<?php


namespace App\Provider;


use WebRover\Framework\Cookie\EncryptCookieProvider as ServiceProvider;

/**
 * Class EncryptCookieProvider
 * @package App\Provider
 */
class EncryptCookieProvider extends ServiceProvider
{
    protected $except = [];
}