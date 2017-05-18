<?php 
session_start();

$config = 'mysql:host=127.0.0.1;dbname=homework_db';
$username = 'root';
$password = '';
$db = new PDO($config, $username, $password);

if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['publish_date']) && isset($_POST['image']) && isset($_POST['id_category'])) {
	$post_title = trim(strip_tags($_POST['title']));
	$post_content = trim(strip_tags($_POST['content']));
	$post_publish_date = trim(strip_tags($_POST['publish_date']));
	$post_id_category = trim(strip_tags($_POST['id_category']));

	if(strlen($post_title) > 0 && strlen($post_content) > 0 && strlen($post_publish_date) > 0 && strlen($post_id_category) > 0 && strlen($_POST['image']) > 0){
		$sql = 'insert into blogposts (title, content, publish_date, image, id_category) values (:title, :content, :publish_date, :image, :id_category) 
		
			select categories.id, blogposts.id_category, categories.category_name
			from categories
			where blogposts on categories.id=blogposts.id_category'; 

		//select categories.id, blogposts.id_category, categories.category_name
		//	from categories, blogposts
		//	where categories.id = blogposts.id_category;
		$table_query = $db->prepare($sql);
		$table_query->bindValue(':title', $post_title);
		$table_query->bindValue(':content', $post_content);
		$table_query->bindValue(':publish_date', $post_publish_date);
		$table_query->bindValue(':image', $_POST['image']);
		$table_query->bindValue(':id_category', $post_id_category);
		$table_query->execute();
		$table_res = $table_query->fetchAll(PDO::FETCH_ASSOC);	
	}
}


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
		Category:
		<select name="category_name">
			<option>Category 1</option>
			<option>Category 2</option>
			<option>Category 3</option>
			<option>Category 4</option>
			<option>Category 5</option>
		</select>
		<button type="submit">Submit</button>
	</form>

</body>
</html>