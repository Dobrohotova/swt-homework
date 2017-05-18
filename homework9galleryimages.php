<?php 

session_start();

$config = 'mysql:host=127.0.0.1;dbname=homework_db';
$username = 'root';
$password = '';
$db = new PDO($config, $username, $password);

if (isset($_POST['image']) && isset($_POST['image_description'])) {
	if (strlen(trim(strip_tags($_POST['image_description']) > 0))) {
		$sql = 'insert into gallery_images (image, image_description) values (:image, :image_description)';
		
		$table_query = $db->prepare($sql);
		$table_query->bindValue(':image', trim(strip_tags($_POST['image'])));
		$table_query->bindValue(':image_description', trim(strip_tags($_POST['image_description'])));
		$table_query->execute();
		$table_res = $table_query->fetchAll(PDO::FETCH_ASSOC);	
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload Images</title>
</head>
<body>

	<form action='homework9galleryimages.php' method="post">
		Image:<input type="file" name="image"><br><br>
		Image Description:<textarea name="image_description"></textarea><br><br>
		<button type="submit">Upload Images</button>
	</form>

</body>
</html>