<?php
session_start();

$text = $_POST['note'];

$pdo = new PDO("mysql:host=localhost;dbname=my_project;", "root", "");

$sql = "SELECT * FROM mydb WHERE news=:class";
$statement= $pdo->prepare($sql);
$statement->execute(['class' => $text]);
$news = $statement ->fetch(PDO::FETCH_ASSOC);

if ( !empty($news) ) {
	$message = "Данная запись уже есть в базе";
	$_SESSION['danger'] = $message;

	header("Location: /task_10.php");
	exit;
}

$sql = "INSERT INTO mydb (news) VALUES (:class)";
$statement = $pdo->prepare($sql);
$statement->execute(['class' => $text]);

$message = "Данная запись записана";
$_SESSION['success'] = $message;

header("Location: /task_10.php");

 ?>