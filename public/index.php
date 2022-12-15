<?php

use App\Router;
use RedBeanPHP\R;
use Symfony\Component\ErrorHandler\Debug;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../Router.php';

R::setup('mysql:host=localhost;dbname=eval_tracking', 'root', '');

Debug::enable();

session_start();

try {
    Router::Route();
} catch (ReflectionException $e) {
}

