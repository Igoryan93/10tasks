<?php

session_start();

$text = $_POST['text'];
$pdo = new PDO("mysql:host=localhost; dbname=table_users", "root", "root");


$db = "SELECT * FROM table_text WHERE text=:text";
$statement = $pdo->prepare($db);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)) {
    $message = 'Пользователь с именем ' . $task['text'] . ' существует';
    $_SESSION['danger'] = $message;
    header('Location: task_10.php');
    exit;
}

$db = "INSERT INTO table_text (text) VALUE (:text)";
$statement = $pdo->prepare($db);
$statement->execute(['text' => $text]);

$message = 'Пользователь с именем ' . $text . ' успешно добавлен';
$_SESSION['success'] = $message;
header('Location: task_10.php');