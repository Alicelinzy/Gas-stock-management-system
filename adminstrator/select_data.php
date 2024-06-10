<?php include 'session.php';
$database = new Connection();
  $connect = $database->open(); ?>
   <label for="emailBackdrop" class="form-label">Category</label>
    <select class="form-select form-select" id="cat_id" name="cat_id"  aria-label=".form-select example">

            <option selected disabled>Select Category</option>
           
<?php

$q = $_GET['q'];
$select_cate = "SELECT * FROM category WHERE br_id='$q'";
$prepare_cate = $connect -> prepare($select_cate);
$prepare_cate -> execute();
while($fetch_cate = $prepare_cate -> fetch(PDO::FETCH_ASSOC))
{
?>
            <option value="<?php echo $fetch_cate['cat_id']; ?>"><?php echo $fetch_cate['kilogram']; ?></option>
      
        <?php
      }
  ?>
      </select>
      <?php $database->close(); ?>