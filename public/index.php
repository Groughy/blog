<?php
/*************************
 * Inclusion de la database.
 **************************/
include ('../config/database.php');
echo '<br>';

/**************
 * Routing
 *************/
$action = filter_input(INPUT_GET,"action", FILTER_SANITIZE_SPECIAL_CHARS);
$posts_id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
if(empty($action)){
    $action = '/';
}
$routes=array(
    'index'=> '../public/index.php',
    '/' => '../app/controllers/homeController.php');
if (isset($routes[$action])){
    include $routes[$action];}
if($action == "blogpost" &&  isset($posts_id)){
    include "../app/controllers/blogPostController.php";}