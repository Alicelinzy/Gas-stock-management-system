<?php 

	include_once('session.php');

	$output = array();

	$database = new Connection();
	$db = $database->open();
	try{
		$kalisa = 0;
		$delivery = $_POST['delivery'];
		$order_no = $_POST['order_no'];
  $squa = "SELECT count(*) as delivernow FROM orders WHERE order_no='$order_no' AND delivery='none'";
$psqua = $db -> prepare($squa);
$psqua -> execute();
$dates = date("Y-m-d h:i");
$fsqua = $psqua -> fetch(PDO::FETCH_ASSOC);
if ($fsqua['delivernow'] == 1) {
	$dupay = [
		'delivery' => $delivery,
		'order_no' => $order_no,
		'dates' => $dates,
		'status' => 'proposal',
	];
	$inse_pay = "INSERT INTO `delivery`(`user_no`, `order_no`, `dates`, `status`) VALUES(:delivery,:order_no,:dates,:status)";
	$pinse_pay = $db -> prepare($inse_pay);
	$pinse_pay -> execute($dupay); 
	if ($pinse_pay) {
		$kalisa = 340;
	}

if ($kalisa = 340) {
$dnnk =[
'delivery' => 'inprogress',
'order_no' => $_POST['order_no'],
];
$updatebig = "UPDATE orders SET delivery=:delivery WHERE order_no=:order_no";
$pupdatebig = $db -> prepare($updatebig);
$pupdatebig -> execute($dnnk);
if ($pupdatebig) {
	$output['message'] = "Delivery Assigned successful";
}else{
	$output['error'] = true;
		$output['message'] = "Delivery Assignment error, Update";
}
}else{
	$output['error'] = true;
		$output['message'] = "Delivery Assignment error";
}
}else{
	$output['error'] = true;
		$output['message'] = "Delivery Assignment error, Arleady Assigned";
}

	}catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);



 ?>