<?php
echo "BONJOUR NEW !"; echo "<br>";
include '../app/persistances/blogPostData.php';
$post = lastPostData($pdo);
include '../ressources/views/home.tpl.php';
