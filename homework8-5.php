<?php 


$config = 'mysql:host=127.0.0.1;dbname=semos_bojan5';
$username = 'root';
$password = '';
$db = new PDO($config, $username, $password);

$sql_bojan1 = 'select * from table_bojan5';
$query_events = $db->query($sql_bojan5);
$events = $query_events->fetchAll(PDO::FETCH_ASSOC);




?>