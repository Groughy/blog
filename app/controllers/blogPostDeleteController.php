<?php
include '../app/persistances/blogPostData.php';
global $pdo;
global $posts_id;
$delete_post = blogPostDelete($pdo, $posts_id);
/**********************************************
 * La fonction PHP header permet la redirection
 **********************************************/

header('Location: ?');
exit;
