<?php 
$err = 0;
if(!isset($_GET['id']) || strlen(trim($_GET['id']))){
	$err++;
}
if($err > 0){
	$db = new PDO('mysql:dbname=homework_db;host=127.0.0.1', 'root', '');
	$db->query('set names utf8');

	$sql = 'select * from gallery_images where id_gallery = :id';
	$query = $db->prepare($sql);
	$query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$query->execute();
	$res = $query->fetchAll(PDO::FETCH_ASSOC);

	foreach($res as $img){
		unlink($img['image']);
	}

	$sql_images = "delete from gallery_images where id_gallery = :id";
	$query_images = $db->prepare($sql_images);
	$query_images->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$query_images->execute();
	$imgres = $query->fetchAll(PDO::FETCH_ASSOC);

	$sql_gallery = "delete from galleries where id = :id";
	$query_gallery = $db->prepare($sql_gallery);
	$query_gallery->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$query_gallery->execute();
	$galres = $query->fetchAll(PDO::FETCH_ASSOC);

	header('location: gallery_form.php');

}

?>