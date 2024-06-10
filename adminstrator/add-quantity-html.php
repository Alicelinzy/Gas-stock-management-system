<?php
	include_once('session.php');

	$data = array();

	$database = new Connection();
	$connect = $database->open();
	
	
      try{
     if (!empty($_POST['pr_id'])) {
    $dates = date("Y-m-d h:i");
      		$duba = [
			'pr_id'=> $_POST['pr_id'],
			'quantity'=> $_POST['quantity'],
		    'dates'=> $dates,
		    'status' => 'stockin',

		];
		$stmt = $connect->prepare("INSERT INTO `stock`(`pr_id`, `qty`, `dates`, `status`) VALUES (:pr_id, :quantity, :dates,:status)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute($duba)){
		$sele = "SELECT * FROM product WHERE pr_id='".$_POST['pr_id']."'";
        $psele = $connect -> prepare($sele);
        $psele -> execute();
        $fsele = $psele -> fetch(PDO::FETCH_ASSOC);
        $qty = $fsele['quantity'] + $_POST['quantity'] ;
        $hdj = [
            'pr_id' => $_POST['pr_id'],
            'qty' => $qty,
        ];
        $upadte = "UPDATE product SET quantity=:qty WHERE pr_id=:pr_id";
        $pupadte = $connect -> prepare($upadte);
        $pupadte -> execute($hdj);
        if($pupadte){
        	$data['location'] = "product";
            $data['message'] = "Quantity added on Product, Successful";
		}
		else{
			$data['error'] = true;
			$data['message'] = "Something went wrong. Cannot add Quantity";
		}
    }else{
        $data['error'] = true;
        $data['message'] = "Something went wrong. Please call developer";
    }
  
	}else{
		$data['error'] = true;
        $data['message'] = "All Fields are Required";
	}
}
	catch(PDOException $e){
		$data['error'] = true;
 		$data['message'] = $e->getMessage();
	}



	//close connection
	$database->close();

	echo json_encode($data);

?>