<?php
include 'session.php';

$database = new Connection();
$connect = $database->open();
$select_num = "SELECT count(*) AS numrows FROM orders WHERE status='success' and delivery='none'";
$prepare_select_num = $connect -> prepare($select_num);
$prepare_select_num -> execute();
$fetch_num = $prepare_select_num -> fetch(PDO::FETCH_ASSOC);
echo $fetch_num['numrows'];
	//close connection
	$database->close();

?>