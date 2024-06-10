 <?php  include_once('session.php');
     $database = new Connection();
     $connect = $database->open();
     $order_no = $_GET['order_no'];
     if (empty($_GET['order_no'])) {
       header('location:orders');
     }
     $selef = "SELECT * FROM orders WHERE order_no='".$_GET['order_no']."'";
     $pselef = $connect -> prepare($selef);
     $pselef -> execute();
     $fselef = $pselef -> fetch(PDO::FETCH_ASSOC);
     if ($fselef['status'] == "pending") {
       header('location:orders');
     }
     ?>
<!DOCTYPE html>
<html>
<head>
  <title>ALI GAS STOCK MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" type="text/css" href="invoice.css">
</head>
<body>
  <div class="invoice">
    <header class="invoice-header">
      <h1 class="invoice-title">ALI GAS STOCK</h1>
      <div class="invoice-details">
        <div class="invoice-info">
          <span class="info-label">Invoice No:</span>
          <span class="info-value"><?php  echo $fselef['order_no']; ?></span>
        </div>
         <div class="invoice-info">
          <span class="info-label">Phonenumber:</span>
          <span class="info-value">25893829</span>
        </div>
         <div class="invoice-info">
          <span class="info-label">Location:</span>
          <span class="info-value">kiglai rwanda</span>
        </div>
        <div class="invoice-info">
          <span class="info-label">Date:</span>
          <span class="info-value"><?php  echo $fselef['dates']; ?></span>
        </div>
      </div>
    </header>
    <main class="invoice-content">
      <table class="invoice-table">
        <thead>
          <tr>
            <th>Item</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total(FRW)</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
          $select_or = "SELECT * FROM onorder WHERE order_no='".$fselef['order_no']."'";
          $pselect_or = $connect -> prepare($select_or);
          $pselect_or -> execute();
          $main_total = 0;
          while($fselect_or = $pselect_or -> fetch(PDO::FETCH_ASSOC)){
          $select_p = "SELECT * FROM product WHERE pr_id='".$fselect_or['pr_id']."'";
          $pselect_p = $connect -> prepare($select_p);
          $pselect_p -> execute();
          $fselect_p = $pselect_p -> fetch(PDO::FETCH_ASSOC); ?>
          <tr>

            
            <td><?php   echo $i; ?></td>
            <td><?php   echo $fselect_p['gas_name']; ?></td>
            <td><?php   echo $fselect_or['quantity']; ?></td>
            <td><?php   echo $fselect_or['price']; ?></td>
            <td><?php   echo $fselect_or['total']; ?></td>

          </tr>
        <?php   $i++;
        $main_total = $main_total + $fselect_or['total']; } ?>
         
        </tbody>
        <tfoot>
          <tr>
            <td colspan="4" class="tfoot-label">Subtotal</td>
            <td class="tfoot-value"><?php   echo $main_total; ?></td>
          </tr>
          <tr>
            <td colspan="4" class="tfoot-label">Tax</td>
            <td class="tfoot-value">0.00</td>
          </tr>
          <tr>
            <td colspan="4" class="tfoot-label">Total</td>
            <td class="tfoot-value"><?php   echo $main_total; ?>.00</td>
          </tr>
        </tfoot>
      </table>
    </main>
    <footer class="invoice-footer">
      <p class="thank-you-message">Thank you for your business!</p>
    </footer>
  </div>
</body>
</html>
<style>
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f3f3f3;
}

.invoice {
  max-width: 800px;
  margin: 50px auto;
  background-color: #ffffff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.invoice-header {
  padding: 20px;
  background-color: #1779ba;
  color: #ffffff;
}

.invoice-title {
  font-size: 24px;
  margin: 0;
}

.invoice-details {
  display: flex;
  justify-content: space-between;
  margin-top: 10px;
}

.invoice-info {
  display: flex;
  flex-direction: column;
}

.info-label {
  font-weight: bold;
  font-size: 14px;
}

.invoice-content {
  padding: 20px;
}

.invoice-table {
  width: 100%;
  border-collapse: collapse;
}

.invoice-table th,
.invoice-table td {
  border: 1px solid #cccccc;
  padding: 8px;
}

.invoice-table th {
  background-color: #eeeeee;
  font-weight: bold;
  text-align: left;
}

.tfoot-label {
  font-weight: bold;
}

.invoice-footer {
  padding: 20px;
  background-color: #f3f3f3;
  text-align: center;
}

.thank-you-message {
  font-size: 18px;
  margin: 0;
}

</style>
 <script type="text/javascript">
  function PrintPage() {
    window.print();
  }
  document.loaded = function(){
    
  }
  window.addEventListener('DOMContentLoaded', (event) => {
      PrintPage()
    setTimeout(function(){ window.close() },750)
  });
</script>