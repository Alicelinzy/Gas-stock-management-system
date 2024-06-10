<?php

 include 'session.php';

	$data = array();

 $database = new Connection();
  $connect = $database->open();

try {
	if (empty($_POST['cat_id'])) {
		  $data['error'] = true;
		  $data['message'] = "All Fields are Required";
	}else{
	$product_name = $_POST['product_name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$cat_id = $_POST['cat_id'];
	$select_product = "SELECT count(*) as countproduct FROM product WHERE gas_name='$product_name' AND cat_id='$cat_id'";
	$prepare_product = $connect -> prepare($select_product);
	$prepare_product -> execute();
	$fetch_product = $prepare_product -> fetch(PDO::FETCH_ASSOC);
	if ($fetch_product['countproduct'] != 0) {
	        $data['error'] = true;
			$data['message'] = "Sorry, Gas Arleady  exist";
	}else{
		$duba = [
			'cat_id' => $cat_id,
			'product_name' => $product_name,
			'price' => $price,
			'quantity' => $quantity,
			'status' => 'available',
		];
			$insert_product = "INSERT INTO `product`(`cat_id`, `gas_name`, `gas_price`, `quantity`, `status`) VALUES (:cat_id,:product_name,:price,:quantity,:status)";
		$prepare_insert_product = $connect -> prepare($insert_product);
		$prepare_insert_product -> execute($duba);
		if ($prepare_insert_product) {
			$select_qty = "SELECT * FROM product WHERE gas_name='$product_name' AND cat_id='$cat_id'";
			$pselect_qty = $connect -> prepare($select_qty);
			$pselect_qty -> execute();
			$fselect_qty = $pselect_qty -> fetch(PDO::FETCH_ASSOC);
			$dates = date("Y-m-d h:i");
			$nuba = [
				'pr_id' => $fselect_qty['pr_id'],
				'qty' => $quantity,
				'dates' => $dates,
				'status' => 'stockin',
			];
			$insert_stock = "INSERT INTO `stock`(`pr_id`, `qty`, `dates`, `status`) VALUES (:pr_id,:qty,:dates,:status)";
			$prepare_insert_stock = $connect -> prepare($insert_stock);
			$prepare_insert_stock -> execute($nuba);
			if ($prepare_insert_stock) {
	       $data['message'] = 'Gas added successful';
           $data['location'] = 'product';
			}else{
				 $data['error'] = true;
 	             $data['message'] = 'Stock not added';
			}
		}else{
			 $data['error'] = true;
 	  $data['message'] = 'Product Not Added';
		}
	}
}
}catch(PDOException $e){
		$data['error'] = true;
 		$data['message'] = $e->getMessage();
 	}
	//close connection
	$database->close();

	echo json_encode($data);
	?>