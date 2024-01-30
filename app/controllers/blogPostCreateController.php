<?php
include '../app/persistances/blogPostData.php';
global $pdo;

$newarticle = blogPostCreate($pdo, 'Test','2', 'Ceci est un test de création d\'article)', 'NOW()');
