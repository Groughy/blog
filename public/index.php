<?php
/**
 * Inclusion de la database.
 */
include ('../config/database.php');
echo '<br>';

/**************
 * Routing
 *************/
$action = filter_input(INPUT_GET,"action", FILTER_SANITIZE_SPECIAL_CHARS);
if(empty($action)){
    $action = '/';
}
$routes=array(
    'index'=> '../public/index.php',
    'database'=> '../config/database.php',
    '/' => '../app/controllers/homeController.php');
if (isset($routes[$action])){
    include $routes[$action];}
