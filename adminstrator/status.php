<?php
include 'session.php';
$data = '';

 $database = new Connection();
  $connect = $database->open();


    

try {
    $user_no = $_GET['user_no'];
    $status = $_GET['status'];
   
        
        $duba = [
            'user_no' => $user_no,
            'status' => $status,
        ];
        $insert_dept = "UPDATE `users` SET `status`=:status WHERE `user_no`=:user_no";
        $prepare_insert_dept = $connect -> prepare($insert_dept);
        $prepare_insert_dept -> execute($duba);
        if ($prepare_insert_dept) {
         $data = 'Account is '.$status.' successful';
          }else{
        $data = 'Sorry , Error occured your request not made';
        }
    

}catch(PDOException $e){
        
        $data = $e->getMessage();
    }
    //close connection
    $database->close();

    echo json_encode($data);
 ?>
