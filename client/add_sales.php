<?php
	include_once('session.php');

	$output = array();

	$database = new Connection();
	$db = $database->open();
	try{
$seku = "SELECT * FROM orders WHERE order_no='".$_GET['order_no']."'";
$pseku = $db -> prepare($seku);
$pseku -> execute();
$fseku = $pseku -> fetch(PDO::FETCH_ASSOC);
if ($fseku['status'] == "pending") {
	

$sha = "SELECT * FROM orders WHERE status='pending'";
$psha = $db -> prepare($sha);
$psha -> execute();
$all_quantity = 0;
while($fsha = $psha -> fetch(PDO::FETCH_ASSOC)){
$squa = "SELECT * FROM onorder WHERE pr_id='".$_GET['pr_id']."' AND order_no='".$fsha['order_no']."'";
$psqua = $db -> prepare($squa);
$psqua -> execute();
while($fsqua = $psqua -> fetch(PDO::FETCH_ASSOC)){
 $all_quantity = $all_quantity + $fsqua['quantity'];
}	
}
		$sql = "SELECT * FROM product WHERE pr_id = '".$_GET['pr_id']."'";
		$psql = $db -> prepare($sql);
		$psql -> execute();
		$fsql = $psql -> fetch(PDO::FETCH_ASSOC);
		
	$remain = $fsql['quantity'] - $all_quantity;
	if ($remain <= 0) {
	 $output = 'Sorry this item is out of stock';
	}else{
		
		$selecf = "SELECT *,count(*) as counts FROM onorder WHERE pr_id='".$_GET['pr_id']."' AND order_no='".$_GET['order_no']."'";
		$pselecf = $db -> prepare($selecf);
		$pselecf -> execute();
		$fselecf = $pselecf -> fetch(PDO::FETCH_ASSOC);
		if ($fselecf['counts'] == 0) {
	

		$order_no = $_GET['order_no'];
		$pr_id = $_GET['pr_id'];
			$quantity = 1;
		    $price = $fsql['gas_price'];
		    $total = $price * $quantity;
		    $duta= [
		    	'order_no' => $order_no,
		    	'pr_id' => $pr_id,
		    	'price' => $price,
		    	'quantity' => $quantity,
		    	'total' => $total,
		    	'status' => 'onrder',
		    ];
			$sql2 = "INSERT INTO onorder(order_no,pr_id,quantity,price,total,status) VALUES(:order_no,:pr_id,:quantity,:price,:total,:status)";
			$psql2 = $db -> prepare($sql2);
			$psql2 -> execute($duta);
			if ($psql2) {
			$output = 'Item added successfully';
		}else{
			$output = 'Item refused to be added ';
		}
		
	}else{
		$onord_id = $fselecf['onord_id'];
		$quantity = $fselecf['quantity'] + 1;
		$price = $fselecf['price'];
		
		$price = (int)$price;
		$quantity = (int)$quantity;

		$total = $price * $quantity;

		$duba =[
			'onord_id' => $onord_id,
			'quantity' => $quantity,
			'total' => $total,
		];

		$update = "UPDATE onorder SET quantity=:quantity,total=:total WHERE onord_id=:onord_id";
		$pupdate = $db -> prepare($update);
		$pupdate -> execute($duba);
		if($pupdate){
			$output = "item quantity updated success full";
		}else{
			$output = "item refused to be updated";
		}


	}
}

}else{
	$output = "Sorry this order was checked out";
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