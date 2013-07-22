<?php

namespace app;

use RedBean_Facade as R;

chdir('../app');
require 'autoload.php';

$app = new \Slim\Slim();

require 'configure.php';

/**
 * Load the controllers
 */
foreach (glob("controller/*.php") as $filename) {
    require $filename;
}

$app->run();
R::close();