<?php 
 
	$config = 'mysql:host=127.0.0.1;dbname=homework_db';
	$username = 'root';
	$password = 'root';
	$db = new PDO($config, $username, $password);
	
	$sql = 'select * from users';
	$query_users = $db->query($sql);
	$users = $query_users->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Age</th>
		</tr>
		<?php foreach ($users as $key => $user) { ?>
		<tr>
			<td><?=$user['first_name']?></td>
			<td><?=$user['last_name']?></td>
			<td><?=$user['email']?></td>
			<td><?=$user['password']?></td>
			<td><?=$user['age']?></td>
		</tr>
	<?php } ?>
	</table>


</body>
</html>





