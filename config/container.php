<?php

use DI\ContainerBuilder;
use Slim\Views\Twig;
use function DI\create;

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions([
    Twig::class => Twig::create(
        [
            'site' => ROOT_PATH . 'resources/view'
        ],
        [
        'cache' => ROOT_PATH . 'storage/cache/',
        'debug' => true,
        'auto_reload' => true,
    ])
]);

return $containerBuilder->build();
