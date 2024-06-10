<?php

 include 'session.php';

	$data = array();

 $database = new Connection();
  $connect = $database->open();

try {
	$brand_name = $_POST['brand_name'];
	$select_brand = "SELECT count(*) as countbrand FROM brand WHERE brand_name='$brand_name'";
	$prepare_brand = $connect -> prepare($select_brand);
	$prepare_brand -> execute();

	$fetch_brand = $prepare_brand -> fetch(PDO::FETCH_ASSOC);
	if ($fetch_brand['countbrand'] != 0) {
	        $data['error'] = true;
			$data['message'] = "Sorry, Brand Already  exist";
	}else{
	$duba = [
			'brand_name' => $brand_name,
			'status' => 'available',
		];

    $insert_brand = "INSERT INTO `brand`(`brand_name`, `status`) VALUES(:brand_name,:status)";
	$pinsert_brand = $connect -> prepare($insert_brand);
	$pinsert_brand -> execute($duba);
	if (!$pinsert_brand) {
	        $data['error'] = true;
			$data['message'] = "Sorry, Brand not created";
	}else{
		  $data['message'] = 'Brand added successful';
         $data['location'] = 'brand';
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