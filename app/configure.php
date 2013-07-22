<?php

namespace app;

use RedBean_Facade as R;

/**
 * Configure and load the application
 */
$production = true;
if (isset($_SERVER['APPLICATION_ENV']) && $_SERVER['APPLICATION_ENV'] == 'development') {
    $production = false;
}

$app = \Slim\Slim::getInstance();
$app->config(array(
    'debug'          => ($production) ? false : true,
    'view'           => new lib\LayoutView(),
    'templates.path' => 'views'
));

R::setup(
    ($production) ? 'mysql:host=localhost; dbname=app' : 'sqlite:/' . sys_get_temp_dir() . '/app.db', 
    ($production) ? 'username' : null, 
    ($production) ? 'password' : null, 
    ($production) ? true : false
);

\RedBean_ModelHelper::setModelFormatter(new lib\ModelFormatter());
