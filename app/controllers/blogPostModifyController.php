<?php
include '../app/persistances/blogPostData.php';
global $pdo;
global $posts_id;
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
$content = filter_input(INPUT_POST, "content", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($_SERVER['REQUEST_METHOD'] == 'POST')
    $update_post = blogPostUpdate($pdo, $posts_id, $title, $content);
include '../ressources/views/blogPostUpdate.tpl.php';