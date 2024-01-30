<?php
echo "Longue vie au ROI !";
include '../app/persistances/blogPostData.php';
global $pdo;
$Postsid = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

blogPostByid($pdo, $Postsid);
commentsByBlogPost($pdo, $Postsid);
