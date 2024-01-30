<?php
echo "Longue vie au ROI !";
include '../app/persistances/blogPostData.php';
global $pdo;
global $posts_id;
$contentblogPost = blogPostByid($pdo, $posts_id);
$getCom = commentsByBlogPost($pdo, $posts_id);
include '../ressources/views/blogPost.tpl.php';