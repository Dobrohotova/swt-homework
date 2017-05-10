<?php 


$config = 'mysql:host=127.0.0.1;dbname=semos_bojan';
$username = 'root';
$password = '';
$db = new PDO($config, $username, $password);

$sql_bojan1 = 'select * from table_bojan1';
$query_events = $db->query($sql_bojan1);
$events = $query_events->fetchAll(PDO::FETCH_ASSOC);




?>