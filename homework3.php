<?php  

$post_name = trim(strip_tags($_POST['name']));
$post_email = trim(strip_tags($_POST['email']));
$vemail = filter_var($post_email, FILTER_VALIDATE_EMAIL);
$post_age = trim(strip_tags($_POST['age']));
$post_website = trim(strip_tags($_POST['website']));
$vwebsite = filter_var($post_website, FILTER_VALIDATE_URL);
$post_password = trim(strip_tags($_POST['password']));
$post_confirmpassword = trim(strip_tags($_POST['confirmpassword']));



if(strlen($post_name) > 0 && strlen($post_email) > 0 && strlen($post_age) > 0 && strlen($post_website) > 0 && strlen($post_password) > 0 && strlen($post_confirmpassword) > 0){
	if($vemail == true){
		if($vwebsite == true){
			if($post_password === $post_confirmpassword){
				if($post_age < 21){
					echo 'You are underage and not allowed on this website';
				} else {
					echo 'Successful Registration';	
				}
			} else {
				echo 'The passwords are not the same';
			}
		} else {
			echo 'Not a real email website!';
		}
	} else {
		echo 'Not a real email address!';
	}
} else {
	echo 'Try again';
}




?>