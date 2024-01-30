<?php
include '../app/persistances/blogPostData.php';
global $pdo;
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
$content = filter_input(INPUT_POST, "content", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($_SERVER['REQUEST_METHOD'] == 'POST')
    $newarticle = blogPostCreate($pdo, $title, $content);
include '../ressources/views/blogPostCreate.tpl.php';