<?php 
session_start();

$config = 'mysql:host=127.0.0.1;dbname=homework_db';
$username = 'root';
$password = '';
$db = new PDO($config, $username, $password);


if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
	$post_first_name = trim(strip_tags($_POST['first_name']));
	$post_last_name = trim(strip_tags($_POST['last_name']));
	$post_mail = trim(strip_tags($_POST['email']));
	$vemail = filter_var($post_mail, FILTER_VALIDATE_EMAIL);
	$post_password = trim(strip_tags($_POST['password']));
	$post_confirm_password = trim(strip_tags($_POST['confirm_password']));
	$post_age = trim(strip_tags($_POST['age']));

	if(strlen($post_first_name) > 0 && strlen($post_last_name) > 0 && strlen($post_mail) > 0 && strlen($post_password) > 0 && $post_password === $post_confirm_password && $vemail == true){
		$sql = 'insert into users (first_name, last_name, email, password, age) values (:first_name, :last_name, :email, :password, :age)'; 
		$table_query = $db->prepare($sql);
		$table_query->bindValue(':first_name', $post_first_name);
		$table_query->bindValue(':last_name', $post_last_name);
		$table_query->bindValue(':email', $vemail);
		$table_query->bindValue(':password', $post_password);
		$table_query->bindValue(':age', $post_age);
		$table_query->execute();
		$table_res = $table_query->fetchAll(PDO::FETCH_ASSOC);	
		// print_r($table_res);

		// if (count($table_res) > 0) {
			echo "Successful Registration";
			// $_SESSION['logged_in'] = true;
			// $_SESSION['user_first_name'] = $table_res[0]['first_name'];
			// $_SESSION['user_last_name'] = $table_res[0]['last_name'];
			// $_SESSION['user_email'] = $table_res[0]['email'];
			// $_SESSION['user_password'] = $table_res[0]['password'];
			// $_SESSION['user_age'] = $table_res[0]['age'];
			// $_SESSION['user_id'] = $table_res[0]['id'];

		// 	header('location: session.php');
		// } else {
		// 	header('location: homework9.php');
		// }	
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
</head>
<body>

	<form action='homework9register.php' method="post">
		First Name:<input type="text" name="first_name"><br><br>
		Last Name:<input type="text" name="last_name"><br><br>
		Email:<input type="email" name="email"><br><br>
		Password:<input type="password" name="password"><br><br>
		Confirm Password:<input type="password" name="confirm_password"><br><br>
		Age:<input type="number" name="age"><br><br>
		<button type="submit">Register</button>
	</form>

</body>
</html>




