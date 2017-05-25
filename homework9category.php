<?php 
session_start();

$config = 'mysql:host=127.0.0.1;dbname=homework_db';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);

if (isset($_POST['category_name'])) {
	if (strlen(trim(strip_tags($_POST['category_name']))) > 0) {
		$sql = 'insert into categories (category_name) values (:category_name)';
		$table_query = $db->prepare($sql);
		$table_query->bindValue(':category_name', trim(strip_tags($_POST['category_name'])));
		$table_query->execute();
		$table_res = $table_query->fetchAll(PDO::FETCH_ASSOC);	
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Categories</title>
</head>
<body>

	<form action='homework9category.php' method="post">
		Category:<input type="text" name="category_name"><br>
		<button type="submit">Add New Category</button>
	</form>

</body>
</html>