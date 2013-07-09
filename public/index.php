<?php
require '../vendor/autoload.php';
use RedBean_Facade as R;

$app = new \Slim\Slim();
$app->config(array(
    'debug'          => true,
    'templates.path' => '../templates'
));

$app->get('/', function () use ($app) {
    $app->render('index.php', array());
});

$app->run();
