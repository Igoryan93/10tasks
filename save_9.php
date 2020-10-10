<?php

$text = $_POST['text'];
$pdo = new PDO("mysql:host=localhost; dbname=table_users", "root", "root");
$db = "INSERT INTO table_text (text) VALUES (:text)";
$statement = $pdo->prepare($db);
$statement->execute(['text' => $text]);
header('Location: task_9.php');
