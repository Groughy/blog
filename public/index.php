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
$posts_id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT); echo $posts_id;
if(empty($action)){
    $action = '/';
}
$routes=array(
    '/' => '../app/controllers/homeController.php',
    "createpost" => '../app/controllers/blogPostCreateController.php');
if (isset($routes[$action])){
    include $routes[$action];}

/**************
 * Recherche de l'id du post
 **************/
if($action == "blogpost" &&  isset($posts_id)){
    include "../app/controllers/blogPostController.php";}
if($action == "updatepost" &&  isset($posts_id)){
    include "../app/controllers/blogPostModifyController.php";}