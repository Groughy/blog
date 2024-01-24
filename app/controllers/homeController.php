<?php
echo "BONJOUR PARIS !";
include ('../persistances/blogPostData.php');
include ('../../database/lastBlogPosts.sql');
var_dump(lastPostData($pdo));