<?php
include '../ressources/views/layouts/header.tpl.php';
if (!isset($posts_id)) {
    echo "Il n'y a pas de Blog ici";
} else {
    foreach ($contentblogPost as $row) {
        echo $row["title"] . "     <br>";
        echo $row["content"] . "     <br>";
        echo $row["dateFrom"] . "     <br>";
        echo $row["users_id"] . "     <br>";
        echo $row["nickname"] . "     <br>";
    }
}
foreach ($getCom as $row) {
    echo $row["content"] . "     <br>";
    echo $row["users_id"] . "     <br>";
    echo $row["nickname"] . "     ";
}
include '../ressources/views/layouts/footer.tpl.php';