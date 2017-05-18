<?php 
session_start();

$config = 'mysql:host=127.0.0.1;dbname=homework_db';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);


if (isset($_POST['gallery_name']) && isset($_POST['gallery_description']))  {
	if (strlen(trim(strip_tags($_POST['gallery_name']))) > 0 && strlen(trim(strip_tags($_POST['gallery_description']))) > 0) {
		$sql = 'insert into galleries (gallery_name, gallery_description) values (:gallery_name, :gallery_description)';

		$table_query = $db->prepare($sql);
		$table_query->bindValue(':gallery_name', trim(strip_tags($_POST['gallery_name'])));
		$table_query->bindValue(':gallery_description', trim(strip_tags($_POST['gallery_description'])));
		$table_query->execute();
		$table_res = $table_query->fetchAll(PDO::FETCH_ASSOC);	
	}
}





?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gallery</title>
</head>
<body>

	<form action='homework9gallery.php' method="post">
		Name:<input type="text" name="gallery_name"><br><br>
		Description:<textarea name="gallery_description"></textarea><br><br>
		<button type="submit">Insert Gallery</button>
	</form>

</body>
</html>