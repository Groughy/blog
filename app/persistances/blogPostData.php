<?php
function lastPostData(PDO $pdo)
{
    $statement = $pdo->query('SELECT *
        FROM Posts
         JOIN Users
WHERE users_id = Users.id
ORDER BY Posts.id DESC
LIMIT 10');
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

$Postsid = $pdo->query('SELECT Posts.id
FROM Posts');
function blogPostByid(PDO $pdo, $Postsid)
{
    $getId = $pdo->query('SELECT Posts.id, Posts.content, Users.name
    FROM Posts
            JOIN Users
        WHERE users_id = Users.id
            ');
    return $getId;
}

function commentsByBlogPost(PDO $pdo, PDO $Postsid)
{
    $getCom = $pdo->query('SELECT Comments.content, Users.name
FROM Comments
JOIN Users
Where users_id = Users.id');
    return $getCom;
}