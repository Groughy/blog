<?php
/********************************************
 * Fonction d'affichage de tous les articles
 *********************************************/
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

/**************************************************
 * Fonction d'affichage d'un article en particulier
 **************************************************/

$postsid = $pdo->query('SELECT id
FROM Posts');
function blogPostByid(PDO $pdo, $posts_id)
{
    $contentblogPost = $pdo->query("SELECT Posts.id, Posts.title, Posts.content, Posts.dateFrom, Posts.dateUntil, Users.nickname
    FROM Posts
            JOIN Users
        WHERE users_id = Users.id AND Posts.id='$posts_id'
            ");
    return $contentblogPost->fetchAll();
}

/*********************************************************
 * Fonction d'affichage des commentaires liés à un article
 *********************************************************/
function commentsByBlogPost(PDO $pdo, $posts_id)
{
    $getCom = $pdo->query("SELECT Comments.content, Users.nickname, Users.id
FROM Comments
JOIN Users
Where users_id = Users.id AND posts_id=$posts_id");
    return $getCom->fetchAll();
}

/************************************
 * Fonction de création d'un article
 ***********************************/
function blogPostCreate(PDO $pdo, $post_name, $post_content): void
{
    $pdo->query("INSERT INTO Posts (title, users_id, content, dateFrom)
VALUES ('$post_name', '2', '$post_content', CURDATE())
");
}

/***************************************
 * Fonction de modification d'un article
 ***************************************/
function blogPostUpdate(PDO $pdo, $posts_id, $post_name, $post_content)
{
    $update = $pdo->query("UPDATE Posts
SET title ='$post_name', content='$post_content'
WHERE id='$posts_id'");
    return $update;
}

/**************************************
 * Fonction de suppression d'un article
 **************************************/
function blogPostDelete(PDO $pdo, $posts_id): void
{
    $pdo->query("DELETE
FROM Posts
WHERE id='$posts_id'");
}