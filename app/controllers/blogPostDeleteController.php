<?php
include '../app/persistances/blogPostData.php';
global $pdo;
global $posts_id;
$update_post = blogPostDelete($pdo, $posts_id);
header('Location: ?');
exit;
