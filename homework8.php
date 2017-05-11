<?php 


$config = 'mysql:host=127.0.0.1;dbname=semos_bojan';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);

$sql_bojan1 = 'select * from table_bojan1';
$query = $db->query($sql_bojan1);
$table = $query->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['id'])){
	$sql = 'select * from table_bojan1 where id = :id';
	$table_query = $db->prepare($sql);
	$table_query->bindValue(':id', $_GET['id']);
	$table_query->execute();
	$table_res = $table_query->fetchAll(PDO::FETCH_ASSOC);
} else {
	$sql = 'select * from table_bojan1';
	$table_query = $db->query($sql);
	$table_res = $table_query->fetchAll(PDO::FETCH_ASSOC);
}
?>

<ul class="nav">
	<?php foreach($table as $tab){ ?>
	<li>
		<a href="homework8.php?id=<?=$tab['id']?>">
			<?=$tab['name']?>
		</a>
	</li>
	<?php } ?>
	<hr/>
	<?php foreach($table_res as $se){ ?>
	<li>
		<a href="produkt.php?id=<?=$se['id']?>">
			<?=$se['name']?>
		</a>
	</li>
	<?php } ?>
</ul>



?>