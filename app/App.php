<?php

namespace App;

use DI\Bridge\Slim\Bridge;
use Slim\App as AppSlim;

class App
{
    /**
     * @var AppSlim
     */
    private static AppSlim $app;

    /**
     * @return AppSlim
     */
    public static function app(): AppSlim
    {
        if (!isset(self::$app)) {
            $container = getContainer();

            self::$app = Bridge::create($container);
        }

        return self::$app;
    }
}
