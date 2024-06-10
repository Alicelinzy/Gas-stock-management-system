  <?php 
    include_once('session.php');
     $database = new Connection();
     $connect = $database->open();
     $gt = 0;
     $count = 0;
     

 ?>

             
                                    <div class="card" style="overflow: auto; height: 50vh" >
                                        <table class="table table-bordered table-striped" id="product-list">
                                            <colgroup>
                                                <col width="20%">
                                                <col width="45%">
                                                <col width="25%">
                                                <col width="10%">
                                            </colgroup>
                                            <tbody>
                                               
                                                <?php 
                                                    $select = "SELECT * FROM onorder WHERE order_no='".$_GET['order_no']."' order by onord_id desc";
     $pselect = $connect -> prepare($select);
     $pselect -> execute();
    while ($fselect = $pselect -> fetch(PDO::FETCH_ASSOC)) {
      $sef = "SELECT * FROM product WHERE pr_id='".$fselect['pr_id']."'";
      $psef = $connect -> prepare($sef);
      $psef -> execute();
      $fsef = $psef -> fetch(PDO::FETCH_ASSOC);
                                                ?>
                                                <tr>
                                                  <input type="hidden" id="onord_id" value="<?php echo $fselect['onord_id'];?> ">
                                                  <input type="hidden" id="price" value="<?php echo $fselect['price'];?> ">
                                                   <td>
                                                    <input type="hidden" id="quantity" value="<?php echo $fselect['quantity'];?>" class="form-control itemQty">
                                                      <input type="number" disabled  value="<?php echo $fselect['quantity'];?>" class="form-control itemQty"></td>
                                                   <td><?php echo $fsef['gas_name']; ?></td>
                                                   <td><?php echo $fselect['total']; ?></td>
                                                   <td><button class="deletesimple btn btn-sm btn-danger" id="<?php echo $fselect['onord_id']; ?>">X</button></td>
                                                </tr>
                                                    <?php
            $gt += $fselect['total'];}
          
            ?>
                                            </tbody>
                                        </table>
                                      
                                    </div>

                                       <div class="py-2 card" style="margin: 2vh 0px">
                                          <h3 class="text-dark w-1 d-flex">
                                        <div class="col-auto">Total:</div>
                                        <div class="col-auto flex-shrink-1 flex-grow-1 truncate-1 text-right" id="amount"><?php echo $gt." RWF"; ?></div>
                                    </h3>
                                  
                                    </div>                                   
    