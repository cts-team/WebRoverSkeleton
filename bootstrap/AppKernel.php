<?php


use WebRover\Framework\Database\Model;
use WebRover\Framework\Kernel\Application;

class AppKernel extends Application
{
    protected function booting()
    {
        $this->make('whoops')->register();

        Model::setResolver($this->make('db'));
    }
}