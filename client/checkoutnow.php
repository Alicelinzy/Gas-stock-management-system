
<?php 

	include_once('session.php');

	$output = array();

	$database = new Connection();
	$db = $database->open();
	try{
		$kalisa = 0;
		$pmethod = $_POST['pmethod'];
		$order_no = $_POST['order_no'];
  $squa = "SELECT * FROM onorder WHERE order_no='$order_no'";
$psqua = $db -> prepare($squa);
$psqua -> execute();
$total = 0;
while($fsqua = $psqua -> fetch(PDO::FETCH_ASSOC)){
	$total = $total + $fsqua['total'];
        $sql = "SELECT * FROM product WHERE pr_id = '".$fsqua['pr_id']."'";
		$psql = $db -> prepare($sql);
		$psql -> execute();
		$fsql = $psql -> fetch(PDO::FETCH_ASSOC);
		
			$qty = $fsql['quantity'] - $fsqua['quantity'];
			$dnub = [
				'qtyup' => $qty,
				'pr_id' => $fsql['pr_id'],
			];
			$update = "UPDATE product SET quantity=:qtyup WHERE pr_id=:pr_id";
			$pupdate = $db -> prepare($update);
			$pupdate -> execute($dnub); 

}
if ($pmethod == 1) {
	$dupay = [
		'phonenumber' => $_POST['phonenumber'],
		'order_no' => $order_no,
		'status' => 'success',
	];
	$inse_pay = "INSERT INTO `payment_phone`(`order_no`, `phonenumber`, `status`) VALUES (:order_no,:phonenumber,:status)";
	$pinse_pay = $db -> prepare($inse_pay);
	$pinse_pay -> execute($dupay); 
	if ($pinse_pay) {
		$kalisa = 340;
	}
}else if ($pmethod == 2) {
	$dupay = [
		'accnumber' => $_POST['accnumber'],
		'swiftcode' => $_POST['swiftcode'],
		'order_no' => $order_no,
		'status' => 'success',
	];
	$inse_pay = "INSERT INTO `payment_bank`(`order_no`, `acc_num`, `swift_code`, `status`) VALUES(:order_no,:accnumber,:swiftcode,:status)";
	$pinse_pay = $db -> prepare($inse_pay);
	$pinse_pay -> execute($dupay); 
	if ($pinse_pay) {
		$kalisa = 340;
	}

}else if ($pmethod == 3) {
	$dupay = [
		'cardnum' => $_POST['cardnum'],
		'names' => $_POST['names'],
		'valid' => $_POST['valid'],
		'cvs' => $_POST['cvs'],
		'order_no' => $order_no,
		'status' => 'success',
	];
	$inse_pay = "INSERT INTO `payment_card`(`order_no`, `card_num`, `names`, `valid`, `cvs`, `status`) VALUES(:order_no,:cardnum,:names,:valid,:cvs,:status)";
	$pinse_pay = $db -> prepare($inse_pay);
	$pinse_pay -> execute($dupay); 
	if ($pinse_pay) {
		$kalisa = 340;
	}

}else if ($pmethod == 4) {
	$dupay = [
		'cardnum' => $_POST['cardnum'],
		'names' => $_POST['names'],
		'valid' => $_POST['valid'],
		'cvs' => $_POST['cvs'],
		'order_no' => $order_no,
		'status' => 'success',
	];
	$inse_pay = "INSERT INTO `payment_card`(`order_no`, `card_num`, `names`, `valid`, `cvs`, `status`) VALUES(:order_no,:cardnum,:names,:valid,:cvs,:status)";
	$pinse_pay = $db -> prepare($inse_pay);
	$pinse_pay -> execute($dupay); 
	if ($pinse_pay) {
		$kalisa = 340;
	}

}
if ($kalisa = 340) {
$dnnk =[
'status' => 'success',
'order_no' => $_POST['order_no'],
'pmethod' => $_POST['pmethod'],
'total' => $total,
];
$updatebig = "UPDATE orders SET method=:pmethod,status=:status,total=:total WHERE order_no=:order_no";
$pupdatebig = $db -> prepare($updatebig);
$pupdatebig -> execute($dnnk);
if ($pupdatebig) {
	$output['message'] = "Checkout done successful";
	$output['main'] = "orders";
}
}else{
	$output['error'] = true;
		$output['message'] = "payment error";
}

	}catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);



 ?>