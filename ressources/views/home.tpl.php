<?php
include '../ressources/views/layouts/header.tpl.php';

$post = lastPostData($pdo);

if(!isset($post)){
echo "Il n'y a pas de Blog ici";
}
else{
    foreach ($post as $row) {
        echo $row["id"]. "     ";
        echo $row["title"]. "     ";
        echo $row["content"]. "     ";
        echo $row["dateFrom"]. "     ";
        echo $row["dateUntil"]. "     ";
        echo $row["priority"]. "     ";
        echo $row["users_id"]. "     ";
        echo $row["id"]. "     ";
        echo $row["nickname"]. "     ";
        echo $row["name"]. "     <br>";
    }
/*    var_dump($post);*/
}
include '../ressources/views/layouts/footer.tpl.php';