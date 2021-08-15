<?php
	$text = $_POST['news'];
	$pdo = new PDO("mysql:host=localhost;dbname=my_project;", "root", "");
	$sql = "INSERT INTO my_table (note) VALUES (:text1)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['text1' => $text]);

	header("Location: /task_9.php");


 ?>