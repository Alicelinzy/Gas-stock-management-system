<?php
include 'session.php';
$data = '';

 $database = new Connection();
  $connect = $database->open();


    

try {
    $re_id = $_GET['re_id'];
    $status = $_GET['status'];
    $select_depno = "SELECT * FROM request WHERE re_id='$re_id'";
    $prepare_depno = $connect -> prepare($select_depno);
    $prepare_depno -> execute();
    $fetch_depno = $prepare_depno -> fetch(PDO::FETCH_ASSOC);
        
        $duba = [
            're_id' => $re_id,
            'status' => $status,
        ];
        $insert_dept = "UPDATE `request` SET `status`=:status WHERE `re_id`=:re_id";
        $prepare_insert_dept = $connect -> prepare($insert_dept);
        $prepare_insert_dept -> execute($duba);
        if ($prepare_insert_dept) {
       
         $duba2 = [
            'de_id' => $fetch_depno['de_id'],
            'status' => 'success',
        ];
        $insert_dept2 = "UPDATE `delivery` SET `status`=:status WHERE `de_id`=:de_id";
        $prepare_insert_dept2 = $connect -> prepare($insert_dept2);
        $prepare_insert_dept2 -> execute($duba2);
        if ($prepare_insert_dept2) {
              $duba3 = [
            'order_no' => $fetch_depno['order_no'],
            'status' => 'success',
        ];
        $insert_dept3 = "UPDATE `orders` SET `delivery`=:status WHERE `order_no`=:order_no";
        $prepare_insert_dept3 = $connect -> prepare($insert_dept3);
        $prepare_insert_dept3 -> execute($duba3);
        if ($prepare_insert_dept3) {
             $data = 'Request '.$status.' successful';
        }else{
             $data = 'Descision  Not Made on order';
        }
        }else{
             $data = 'Descision  Not Made on delivery';
        }

       
          }else{
      
      $data = 'Descision  Not Made on Request';
        }
    

}catch(PDOException $e){
        
        $data = $e->getMessage();
    }
    //close connection
    $database->close();

    echo json_encode($data);
 ?>
