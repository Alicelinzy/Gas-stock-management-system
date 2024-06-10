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
$selef = "SELECT * FROM orders WHERE order_no='".$fseku['order_no']."'";
$pselef = $db -> prepare($selef);
$pselef -> execute();
$fselef = $pselef -> fetch(PDO::FETCH_ASSOC);
$order_no = $fseku['order_no'];
	$dunas = [
		'order_no' => $fseku['order_no'],
		'c_id_user_no' => $fselef['user_no'],
		'd_id_user_no' => $_SESSION['user_no'],
		'de_id' => $_GET['de_id'],
		'status' => 'pending',
	];
	$selectd = "SELECT count(*) as ordere FROM request WHERE order_no='$order_no'";
	$pselectd = $db -> prepare($selectd);
$pselectd -> execute();
$fselectd = $pselectd -> fetch(PDO::FETCH_ASSOC);
if ($fselectd['ordere'] == 0) {
	$dunas = [
		
		'de_id' => $_GET['de_id'],
		'status' => 'request',
	];
	$delet = "UPDATE  delivery SET status=:status  WHERE de_id=:de_id";
	$pdelet = $db -> prepare($delet);
	$pdelet -> execute($dunas);
	if ($pdelet) {
		$dunas2 = [
		'order_no' => $fseku['order_no'],
		'c_id_user_no' => $fselef['user_no'],
		'd_id_user_no' => $_SESSION['user_no'],
		'de_id' => $_GET['de_id'],
		'status' => 'pending',
	];
		$insert = "INSERT INTO `request`( `d_id_user_no`, `c_id_user_no`, `order_no`, `de_id`, `status`) VALUES (:d_id_user_no,:c_id_user_no,:order_no,:de_id,:status)";
		$pinsert =$db -> prepare($insert);
		$pinsert -> execute($dunas2);
		if ($pinsert) {
		 $output = 'request created successful';
		}
	}else{
		 $output = 'Sorry please call IT';
	}

}else{
	 $output = 'Sorry request already created';
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