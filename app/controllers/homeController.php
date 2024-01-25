<?php
echo "BONJOUR NEW !";
include '/var/www/blog/app/persistances/blogPostData.php';
$post = lastPostData($pdo);
var_dump($post);
