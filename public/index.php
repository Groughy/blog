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
    '/' => '../app/controllers/homeController.php',
    "createarticle" => '../app/controllers/blogPostCreateController.php');
if (isset($routes[$action])){
    include $routes[$action];}

/**************
 * Recherche de l'id du post
 **************/
if($action == "blogpost" &&  isset($posts_id)){
    include "../app/controllers/blogPostController.php";}