<?php
$dsn = "mysql:dbname=user_manage_system;host=127.0.0.1";
$pdo = new PDO($dsn,'root','wrkzzbwn999');

$sql = "select * from users";
$stmt = $pdo->query($sql);
var_dump($stmt->fetchAll(2));
