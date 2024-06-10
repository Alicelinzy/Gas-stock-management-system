<?php

 include 'session.php';

	$data = array();

 $database = new Connection();
  $connect = $database->open();

try {
	$kilogram = $_POST['kilogram'];
	$br_id = $_POST['br_id'];

	$select_cate = "SELECT count(*) as countcate FROM category WHERE kilogram='$kilogram'";
	$prepare_cate = $connect -> prepare($select_cate);
	$prepare_cate -> execute();

	$fetch_cate = $prepare_cate -> fetch(PDO::FETCH_ASSOC);
	if ($fetch_cate['countcate'] != 0) {
	        $data['error'] = true;
			$data['message'] = "Sorry, Category Already  exist";
	}else{
	$duba = [
			'kilogram' => $kilogram,
			'br_id' => $br_id,
			'status' => 'available',
		];

    $insert_cate = "INSERT INTO `category`(`br_id`,`kilogram`, `status`) VALUES(:br_id,:kilogram,:status)";
	$pinsert_cate = $connect -> prepare($insert_cate);
	$pinsert_cate -> execute($duba);
	if (!$pinsert_cate) {
	        $data['error'] = true;
			$data['message'] = "Sorry, Category not created";
	}else{
		  $data['message'] = 'Category added successful';
         $data['location'] = 'category?brand='.$br_id;
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