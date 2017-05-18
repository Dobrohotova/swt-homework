<?php 

session_start();

$config = 'mysql:host=127.0.0.1;dbname=homework_db';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);

if (isset($_POST['image_description'])) {
	if (strlen(trim(strip_tags($_POST['image_description']) > 0))) {
		$sql = 'insert into gallery_images (image, image_description) values (:image, :image_description)';
		
		
		

		for($i = 0; $i < count($_FILES['image']['type']); $i++){
			$name = $_FILES['image']['name'][$i];
			$size = $_FILES['image']['size'][$i];
			$type = $_FILES['image']['type'][$i];
			$tmp_name = $_FILES['image']['tmp_name'][$i];
			$error = $_FILES['image']['error'][$i];
			$maxsize = 1 * 1024 * 1024;
			$prefix = rand(1000000000, 9999999999);
			if($size < $maxsize && ($type == 'image/jpeg' || $type == 'image/pjpeg' || $type == 'image/gif' || $type == 'image/png') && $error == 0){
				move_uploaded_file($tmp_name, 'uploads/'.$prefix.'_'.$name);
				echo 'Upload for file '.$name.' successfull!<br/>';
			}else{
				echo 'ERROR: File '.$name.' not uploaded!<br/>';
			}
		}

		$table_query = $db->prepare($sql);
		$table_query->bindValue(':image', $path);
		$table_query->bindValue(':image_description', trim(strip_tags($_POST['image_description'])));
		$table_query->execute();
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

	<form action='homework9galleryimages.php' method="post" enctype="multipart/form-data">
		Image:<input type="file" multiple name="image[]"><br><br>
		Image Description:<textarea name="image_description"></textarea><br><br>
		<select name="id_category">
		<?php foreach ($categories as $category){ ?>
			<option value="<?=$category['id']?>"><?=$category['category_name']?></option>
		<?php } ?>
		</select>
		<button type="submit">Upload Images</button>
	</form>

</body>
</html>