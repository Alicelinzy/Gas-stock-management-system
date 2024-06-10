<?php
    include_once('session.php');
	$output = array();

	$database = new Connection();
	$db = $database->open();
	try{
		$sql = "DELETE FROM orders WHERE order_no = '".$_POST['order_no']."'";
		//if-else statement in executing our query
		if($db->exec($sql)){
			$sql2 = "DELETE FROM onorder WHERE order_no = '".$_POST['order_no']."'";
			if($db->exec($sql2)){
			$output = 'all related data deleted successfully';
		}else{
			$output = 'done delete all related data';
		}
	}else{
       $output = 'Something went wrong. Cannot delete';
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