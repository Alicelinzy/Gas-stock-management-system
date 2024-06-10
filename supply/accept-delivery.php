<?php
	include_once('session.php');

	$output = array();

	$database = new Connection();
	$db = $database->open();
	try{
$seku = "SELECT * FROM delivery WHERE de_id='".$_GET['de_id']."'";
$pseku = $db -> prepare($seku);
$pseku -> execute();
$fseku = $pseku -> fetch(PDO::FETCH_ASSOC);
if ($fseku['status'] == "proposal") {
	$dunas = [
		'de_id' => $_GET['de_id'],
		'status' => 'inprogress',
	];
	$delet = "UPDATE  delivery SET status=:status  WHERE de_id=:de_id";
	$pdelet = $db -> prepare($delet);
	$pdelet -> execute($dunas);
	if ($pdelet) {
		 $output = 'delivery accepted successful';
	}else{
		 $output = 'Sorry please call IT';
	}
}else{
	 $output = 'Sorry this delivery was accepted';
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