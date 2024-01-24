<?php
$pdo = new PDO('mysql:host=blog.local;dbname=blog', 'SébastienJ', 'M@gnimar2020');
$statement = $pdo ->query("SELECT * FROM Users");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['nickname']);
