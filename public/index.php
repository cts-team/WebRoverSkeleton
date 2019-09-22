<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/../bootstrap/app.php';

$kennel = new AppKernel('dev', true, __DIR__);

$request = Request::createFromGlobals();

$response = $kennel->handle($request);

$response->send();

$kennel->terminate($request, $response);