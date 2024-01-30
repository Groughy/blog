<?php
function lastPostData(PDO $pdo)
{
    $statement = $pdo->query('SELECT *
        FROM Posts
         JOIN Users
WHERE users_id = Users.id
ORDER BY Posts.id DESC
LIMIT 10');
    return $statement->fetchAll();
}

$postsid = $pdo->query('SELECT Posts.id
FROM Posts');
function blogPostByid(PDO $pdo, $posts_id)
{
    $contentblogPost = $pdo->query("SELECT Posts.id, Posts.title, Posts.content, Posts.dateFrom, Posts.dateUntil, Users.nickname
    FROM Posts
            JOIN Users
        WHERE users_id = Users.id AND Posts.id=$posts_id
            ");
    return $contentblogPost->fetchAll();
}

function commentsByBlogPost(PDO $pdo, $posts_id)
{
    $getCom = $pdo->query("SELECT Comments.content, Users.nickname, Users.id
FROM Comments
JOIN Users
Where users_id = Users.id AND posts_id=$posts_id");
    return $getCom->fetchAll();
}

function blogPostCreate (PDO $pdo, $post_name, $post_content):void{
    $pdo->query("INSERT INTO Posts (title, users_id, content, dateFrom)
VALUES ('$post_name', '2', '$post_content', CURDATE())
");
}

function blogPostUpdate(PDO $pdo, $posts_id, $post_name, $post_content):void{
$pdo->query("UPDATE Posts
SET title =$post_name, content=$post_content
WHERE Posts_id=$posts_id");
}