<?php
require '../vendor/autoload.php';
use RedBean_Facade as R;

$debug = false;
if (isset($_SERVER['APPLICATION_ENV']) && $_SERVER['APPLICATION_ENV'] == 'development') {
    $debug = true;
}

$app = new \Slim\Slim();
$app->config(array(
    'debug'          => $debug,
    'templates.path' => '../templates'
));

$app->get('/', function () use ($app) {
    $app->render('index.php', array());
});

$app->run();
