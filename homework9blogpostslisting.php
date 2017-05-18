<?php 
 
	$config = 'mysql:host=127.0.0.1;dbname=homework_db';
	$username = 'root';
	$password = '';
	$db = new PDO($config, $username, $password);
	
	$sql = 'select * from blogposts';
	$query_users = $db->query($sql);
	$blogposts = $query_users->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog Posts Listings</title>
</head>
<body>
	<?php foreach ($blogposts as $key => $blog) { ?>
	<ul>
		<li><?=$blog['title']?></li>
		<li><?=$blog['content']?></li>
		<li><?=$blog['publish_date']?></li>
		<li><?=$blog['image']?></li>
	</ul>
	<?php } ?>


</body>
</html>



