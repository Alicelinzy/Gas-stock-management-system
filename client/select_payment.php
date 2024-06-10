<?php
$q = $_GET['q'];

if($q == 1){
  ?>
   <div class="mb-3">
  <label>Enter phone number to pay </label>
  <input type="number" required class="form-control" placeholder="250789992882" required id="phonenumber" name="phonenumber">
</div>
  <?php
}else if ($q == 2) {
  ?>
  <div class="mb-3">
  <label>Enter Account Number</label>
  <input type="number" required class="form-control" id="accnumber" name="accnumber">
</div>
<div class="mb-3">
  <label>Enter Swift Code</label>
  <input type="text" required class="form-control" id="swiftcode" name="swiftcode">
</div>
<?php
}else{
  ?>
  <div class="mb-3">
  <label>Enter Card Number</label>
  <input type="number" required class="form-control" id="cardnum" name="cardnum">
</div>
<div class="mb-3">
 
  <label>Enter Name of card Holder</label>
  <input type="text" required class="form-control" id="names" name="names">
</div>
<div class="mb-3 row">
  <div class="col-md-6">
  <label>Enter Valid</label>
  <input type="MONTH" required class="form-control" id="valid" name="valid">
  </div>
    <div class="col-md-6">
  <label>Enter Cvs</label>
  <input type="password" required class="form-control" id="cvs" name="cvs">
  </div>
</div>
<?php
}
     ?>