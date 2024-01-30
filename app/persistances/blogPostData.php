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