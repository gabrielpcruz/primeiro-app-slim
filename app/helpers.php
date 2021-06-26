<?php

use App\App;
use Slim\Views\Twig;

function getContainer()
{
    return require_once (ROOT_PATH . 'config/container.php');
}

/**
 */
function view()
{
    /** @var Twig $view */
    return App::app()->getContainer()->get(Twig::class);
}
