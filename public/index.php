<?php
$action = filter_input(INPUT_GET,"action", FILTER_SANITIZE_SPECIAL_CHARS);

$routes=array(
    'index'=> '../public/index.php',
    'database'=> '../config/database.php',);

if (isset($routes[$action])){
    include $routes[$action];}
include ('../config/database.php');