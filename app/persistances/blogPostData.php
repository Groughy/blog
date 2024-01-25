<?php
function lastPostData($pdo)
{
    $statement = $pdo->query('SELECT *
        FROM Posts
         JOIN Users
WHERE users_id = Users.id
ORDER BY Posts.id DESC
LIMIT 10');
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}