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
              <?php
          }else{
          	?>
      

	  <div class="card" >
	  	  <div class="card-body">
	  	  	<?php if ($fdjs['delivery'] == "none") {
					$slect2 = "SELECT * FROM users WHERE user_no='".$fdjs['user_no']."'";
					$pslect2 = $connect -> prepare($slect2);
					$pslect2 -> execute();
					$fslect2 = $pslect2 -> fetch(PDO::FETCH_ASSOC);
	  	  		?>
	  	  		<h5 class="card-title">Customer Information</h5>
	  	  		<hr>
	  	  		
					  <div class="mb-2"><strong>Customer Names: </strong><strong><?php echo $fslect2['first_name']." ".$fslect2['last_name']; ?> </strong></div>
					<div class="mb-2"><strong>date:</strong> <?php echo $fdjs['dates']; ?></div>
				  <div class="mb-2"><strong>Phone Number:</strong> <?php echo $fslect2['phonenumber'];?></div>
				  <div class="mb-2"><strong>Email:</strong> <?php echo $fslect2['phonenumber'];?> </div>
				  <hr>
				  <h6 class="card-title">PayMent Method</h6>
<hr>
<?php
if ($fdjs['method'] == 1) {
	?>
	<div class="mb-2"><strong>Method used:</strong> MOMO</div>
	<?php $select_pay = "SELECT * FROM `payment_phone`  WHERE order_no='".$fdjs['order_no']."'";
	$pselect_pay = $connect -> prepare($select_pay);
	$pselect_pay -> execute();
	$fselect_pay = $pselect_pay -> fetch(PDO::FETCH_ASSOC); ?>
					  <div class="mb-2"><strong>Phonenumber: </strong><strong><?php echo $fselect_pay['phonenumber']; ?> </strong></div>
					  <div class="mb-2"><strong>status: </strong><strong><?php echo $fselect_pay['status']; ?> </strong></div>
	<?php
}elseif ($fdjs['method'] == 2) {
	?>
	<div class="mb-2"><strong>Method used:</strong> Bank</div>
	<?php $select_pay = "SELECT * FROM `payment_bank`  WHERE order_no='".$fdjs['order_no']."'";
	$pselect_pay = $connect -> prepare($select_pay);
	$pselect_pay -> execute();
	$fselect_pay = $pselect_pay -> fetch(PDO::FETCH_ASSOC); ?>
					  <div class="mb-2"><strong>Account Number: </strong><strong><?php echo $fselect_pay['acc_num']; ?> </strong></div>
					  <div class="mb-2"><strong>Swift code: </strong><strong><?php echo $fselect_pay['swift_code']; ?> </strong></div>
					  <div class="mb-2"><strong>status: </strong><strong><?php echo $fselect_pay['status']; ?> </strong></div>
	<?php
}else if ($fdjs['method'] == 3 OR $fdjs['method'] == 4) {
	?>
	<div class="mb-2"><strong>Method used:</strong> <?php if ($fdjs['method'] == 3 ){ ?>
		MASTER CARD
	<?php }else{
		?>
		VISA CARD
		<?php
	} ?></div>
	<?php $select_pay = "SELECT * FROM `payment_card`  WHERE order_no='".$fdjs['order_no']."'";
	$pselect_pay = $connect -> prepare($select_pay);
	$pselect_pay -> execute();
	$fselect_pay = $pselect_pay -> fetch(PDO::FETCH_ASSOC); ?>
					  <div class="mb-2"><strong>Card Number: </strong><strong><?php echo $fselect_pay['card_num']; ?> </strong></div>
					  <div class="mb-2"><strong>Card Holder: </strong><strong><?php echo $fselect_pay['names']; ?> </strong></div>
					  <div class="mb-2"><strong>status: </strong><strong><?php echo $fselect_pay['status']; ?> </strong></div>
					  <hr>
					 
	<?php
} 
 ?>
 <hr>	 <h5 class="card-title">Deliver Information</h5>
   <div class="mb-2"><strong>Delivery Status:</strong> Waiting For review</div>
    <button  data-bs-toggle="modal" data-bs-target="#checkoutf" class="card-link btn btn-primary">Assagin Delivery</button>
	  	  		<hr>
	  	  	<?php } else {
	  	  						$slect2 = "SELECT * FROM users WHERE user_no='".$fdjs['user_no']."'";
					$pslect2 = $connect -> prepare($slect2);
					$pslect2 -> execute();
					$fslect2 = $pslect2 -> fetch(PDO::FETCH_ASSOC);
	  	  		?>
	  	  		<h5 class="card-title">Customer Information</h5>
	  	  		<hr>
					  <div class="mb-2"><strong>Customer Names: </strong><strong><?php echo $fslect2['first_name']." ".$fslect2['last_name']; ?> </strong></div>
					<div class="mb-2"><strong>date:</strong> <?php echo $fdjs['dates']; ?></div>
				  <div class="mb-2"><strong>Phone Number:</strong> <?php echo $fslect2['phonenumber'];?></div>
				  <div class="mb-2"><strong>Email:</strong> <?php echo $fslect2['phonenumber'];?> </div>
				  <hr>
				  <h6 class="card-title">PayMent Method</h6>
<hr>
<?php
if ($fdjs['method'] == 1) {
	?>
	<div class="mb-2"><strong>Method used:</strong> MOMO</div>
	<?php $select_pay = "SELECT * FROM `payment_phone`  WHERE order_no='".$fdjs['order_no']."'";
	$pselect_pay = $connect -> prepare($select_pay);
	$pselect_pay -> execute();
	$fselect_pay = $pselect_pay -> fetch(PDO::FETCH_ASSOC); ?>
					  <div class="mb-2"><strong>Phonenumber: </strong><strong><?php echo $fselect_pay['phonenumber']; ?> </strong></div>
					  <div class="mb-2"><strong>status: </strong><strong><?php echo $fselect_pay['status']; ?> </strong></div>
	<?php
}elseif ($fdjs['method'] == 2) {
	?>
	<div class="mb-2"><strong>Method used:</strong> Bank</div>
	<?php $select_pay = "SELECT * FROM `payment_bank`  WHERE order_no='".$fdjs['order_no']."'";
	$pselect_pay = $connect -> prepare($select_pay);
	$pselect_pay -> execute();
	$fselect_pay = $pselect_pay -> fetch(PDO::FETCH_ASSOC); ?>
					  <div class="mb-2"><strong>Account Number: </strong><strong><?php echo $fselect_pay['acc_num']; ?> </strong></div>
					  <div class="mb-2"><strong>Swift code: </strong><strong><?php echo $fselect_pay['swift_code']; ?> </strong></div>
					  <div class="mb-2"><strong>status: </strong><strong><?php echo $fselect_pay['status']; ?> </strong></div>
	<?php
}else if ($fdjs['method'] == 3 OR $fdjs['method'] == 4) {
	?>
	<div class="mb-2"><strong>Method used:</strong> <?php if ($fdjs['method'] == 3 ){ ?>
		MASTER CARD
	<?php }else{
		?>
		VISA CARD
		<?php
	} ?></div>
	<?php $select_pay = "SELECT * FROM `payment_card`  WHERE order_no='".$fdjs['order_no']."'";
	$pselect_pay = $connect -> prepare($select_pay);
	$pselect_pay -> execute();
	$fselect_pay = $pselect_pay -> fetch(PDO::FETCH_ASSOC); ?>
					  <div class="mb-2"><strong>Card Number: </strong><strong><?php echo $fselect_pay['card_num']; ?> </strong></div>
					  <div class="mb-2"><strong>Card Holder: </strong><strong><?php echo $fselect_pay['names']; ?> </strong></div>
					  <div class="mb-2"><strong>status: </strong><strong><?php echo $fselect_pay['status']; ?> </strong></div>
					  <hr>
					  
	<?php
} 
	  	  	$selevt = "SELECT * FROM delivery WHERE order_no='".$_GET['order_no']."'";
	  	  	$pselevt = $connect -> prepare($selevt);
	  	  	$pselevt -> execute();
	  	  	$fselevt = $pselevt -> fetch(PDO::FETCH_ASSOC);
	  	  	$slect = "SELECT * FROM users WHERE user_no='".$fselevt['user_no']."'";
	  	  	$pslect = $connect -> prepare($slect);
	  	  	$pslect -> execute();
	  	  	$fslect = $pslect -> fetch(PDO::FETCH_ASSOC);
	  	  	 ?>
	  	  	 <h5 class="card-title">Deliver Information</h5>
	  	  		<hr>
							    <div class="mb-2"><strong>Delivery Status:</strong> <?php echo $fdjs['delivery'];?></div>
							    <div class="mb-2"><strong>Names: </strong><strong><?php echo $fslect['first_name']." ".$fslect['last_name']; ?> </strong></div>
							    <div class="mb-2"><strong>date:</strong> <?php echo $fselevt['dates']; ?></div>
							    <div class="mb-4"><strong>Phone Number:</strong> <?php echo $fslect['phonenumber'];?> </div>
							  
								    <?php } ?>
						    </div><!--//app-card-body-->
	  </div>
	  <hr>
	  <a href="orders"> <button class="card-link btn btn-success">Back to all orders</button></a>
	  <a target="_blank"     href="printre?order_no=<?php  echo $_GET['order_no']; ?>" id="print" class="btn btn-warning yourlink"> print</a>
          	<?php
          }


 ?>