<?php


use WebRover\Framework\Database\Model;
use WebRover\Framework\Kernel\Application;

/**
 * Class AppKernel
 */
class AppKernel extends Application
{
    protected function booting()
    {
        Model::setResolver($this->make('db'));
    }
}
