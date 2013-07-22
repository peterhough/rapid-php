<?php

namespace app\controllers;

use RedBean_Facade as R;

$app = \Slim\Slim::getInstance();
$app->add(new \Slim\Middleware\SessionCookie());

$app->get('/', function () use ($app) {

    $app->render(
        'index.php', 
        array(
            'title'      => 'Hello',
            'addNameUrl' => $app->urlFor('addName'),
            'visitors'   => R::findAll('visitor')
        )
    );
    
})->name('home');

$app->post('/', function () use ($app) {

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $visitor = R::dispense('visitor');
        $visitor->name = $_POST['name'];
        $id = R::store($visitor);
    } else {
        $app->flash('error', 'Please enter your name');
    }
    
    $app->redirect($app->urlFor('home'));
    
})->name('addName');