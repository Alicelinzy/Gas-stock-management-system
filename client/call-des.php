<?php 
include_once('session.php');
	$database = new Connection();
	$connect = $database->open();
	$djs = "SELECT * FROM orders WHERE order_no='".$_GET['order_no']."'";
	$pdjs = $connect -> prepare($djs);
	$pdjs -> execute();
	$fdjs = $pdjs -> fetch(PDO::FETCH_ASSOC);
	if ($fdjs['status'] == "pending") {
		
	?>
  <button class="card-link btn btn-danger discard" id="<?php echo $_GET['order_no'];?>">Discard</button>
              <button  data-bs-toggle="modal" data-bs-target="#checkoutf" class="card-link btn btn-primary">check out</button>
              <?php
          }else{
          	?>
      <a href="orders"> <button class="card-link btn btn-success">Back to all orders</button></a>
	  <a target="_blank"     href="printre?order_no=<?php  echo $_GET['order_no']; ?>" id="print" class="btn btn-warning yourlink"> print</a>
	  <hr>
	  <div class="card" >
	  	  <div class="card-body">
	  	  	<?php if ($fdjs['delivery'] == "none") {
	  	  		?>
	  	  		  <div class="mb-2"><strong>Delivery Status:</strong> Waiting For review</div>
	  	  	<?php } else {
	  	  	$selevt = "SELECT * FROM delivery WHERE order_no='".$_GET['order_no']."'";
	  	  	$pselevt = $connect -> prepare($selevt);
	  	  	$pselevt -> execute();
	  	  	$fselevt = $pselevt -> fetch(PDO::FETCH_ASSOC);
	  	  	$slect = "SELECT * FROM users WHERE user_no='".$fselevt['user_no']."'";
	  	  	$pslect = $connect -> prepare($slect);
	  	  	$pslect -> execute();
	  	  	$fslect = $pslect -> fetch(PDO::FETCH_ASSOC);
	  	  	 ?>
							    <div class="mb-2"><strong>Delivery Status:</strong> <?php echo $fdjs['delivery'];?></div>
							    <div class="mb-2"><strong>Names: </strong><strong><?php echo $fslect['first_name']." ".$fslect['last_name']; ?> </strong></div>
							    <div class="mb-2"><strong>date:</strong> <?php echo $fselevt['dates']; ?></div>
							    <div class="mb-4"><strong>Phone Number:</strong> <?php echo $fslect['phonenumber'];?> </div>
							  
								    <?php } ?>
						    </div><!--//app-card-body-->
	  </div>
          	<?php
          }


 ?>