<?php
	include_once('session.php');

	$output = array();

	$database = new Connection();
	$db = $database->open();
	try{
$seku = "SELECT * FROM onorder WHERE onord_id='".$_GET['onord_id']."'";
$pseku = $db -> prepare($seku);
$pseku -> execute();
$fseku = $pseku -> fetch(PDO::FETCH_ASSOC);
$select = "SELECT * FROM orders WHERE order_no='".$fseku['order_no']."'";
$pselect = $db -> prepare($select);
$pselect -> execute();
$fselect = $pselect -> fetch(PDO::FETCH_ASSOC);
if ($fselect['status'] == "pending") {
	$dunas = [
		'onord_id' => $_GET['onord_id'],
	];
	$delet = "DELETE from onorder WHERE onord_id=:onord_id";
	$pdelet = $db -> prepare($delet);
	$pdelet -> execute($dunas);
	if ($pdelet) {
		 $output = 'deleted successful';
	}else{
		 $output = 'Sorry please call IT';
	}
}else{
	 $output = 'Sorry this order was checked out';
}
}
	catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();;
	}

	//close connection
	$database->close();

	echo json_encode($output);
	?>