<?php

use WebRover\Framework\Foundation\Request;

require __DIR__ . '/../bootstrap/app.php';

$kennel = new AppKernel('dev', true, __DIR__);

$request = Request::capture();

$response = $kennel->handle($request);

$response->send();

$kennel->terminate($request, $response);
