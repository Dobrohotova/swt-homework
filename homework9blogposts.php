<?php 
session_start();

$config = 'mysql:host=127.0.0.1;dbname=homework_db';
$username = 'root';
$password = '';
$db = new PDO($config, $username, $password);






?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog Posts</title>
</head>
<body>

	<form action='homework9blogposts.php' method="post">
		Title:<input type="text" name="title"><br><br>
		Content:<textarea name="content"></textarea><br><br>
		Publish Date:<input type="date" name="publish_date"><br><br>
		Image:<input type="file" name="image"><br><br>
		za kategorija kje treba 
		Category:<input type="text" name="id_category"><br><br>
		<button type="submit">Submit</button>
	</form>

</body>
</html>