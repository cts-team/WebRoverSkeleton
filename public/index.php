<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/../bootstrap/app.php';

$kernel = new AppKernel('dev', true, __DIR__);

$request = Request::createFromGlobals();

$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);
