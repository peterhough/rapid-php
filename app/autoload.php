<?php

namespace app;

require '../vendor/autoload.php';

/**
 * Autoload classes
 * 
 * @param string $class
 */
function app_autoload($class) {
    $class = '../' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($class)) {
        require_once($class);
    }
}

spl_autoload_register('app\app_autoload');
