<?php

$container = require __DIR__ . '/../app/bootstrap.php';

//$container->getByType(Nette\Application\Application::class)->run();
$container->getByType(Contributte\Middlewares\Application\IApplication::class)->run();