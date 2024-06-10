<?php include 'header.php'; ?>
<?php if (empty($_GET['order_no'])): ?>
  <script>
    window.history.back();
  </script>
<?php endif
?>   
        <div id="app-sidepanel" class="app-sidepanel"> 
          <div id="sidepanel-drop" class="sidepanel-drop"></div>
          <div class="sidepanel-inner d-flex flex-column">
            <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
            <div class="app-branding">
                <a class="app-logo" href="./"><span class="logo-text">ADMIN PORTAL</span></a>
  
            </div><!--//app-branding-->  
            
          <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
              <li class="nav-item">
                  <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                  <a class="nav-link " href="./">
                    <span class="nav-icon">
                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
      <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
    </svg>
                     </span>
                             <span class="nav-link-text">Overview</span>
                  </a><!--//nav-link-->
              </li><!--//nav-item-->
              <li class="nav-item">
                  <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                  <a class="nav-link active" href="orders">
                    <span class="nav-icon">
                   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
                     </span>
                             <span class="nav-link-text">Orders</span>
                  </a><!--//nav-link-->
              </li><!--//nav-item-->
             
            
              
              <li class="nav-item">
                  <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                  <a class="nav-link" href="account">
                    <span class="nav-icon">
                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
    <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  </svg>
                     </span>
                             <span class="nav-link-text">My Account</span>
                  </a><!--//nav-link-->
              </li><!--//nav-item-->              
            </ul><!--//app-menu-->
          </nav><!--//app-nav-->
          <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
              <ul class="app-menu footer-menu list-unstyled">
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="?logout">
                      <span class="nav-icon">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
    <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
  </svg>
                      </span>
                              <span class="nav-link-text">Logout</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
            
              </ul><!--//footer-menu-->
            </nav>
          </div><!--//app-sidepanel-footer-->
           
          </div><!--//sidepanel-inner-->
      </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    <div class="app-wrapper">
      
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

                
                <input type="hidden" id="<?php echo $_GET['order_no'];?>" name="">
      
         <article class="my-3" id="card">
     

      <div>
        <div class="bd-example">
        <div class="row  row-cols-1 row-cols-md-2 g-4">
     
     <div class="col-md-7">          
     <div class="card-footer" id="call-des">
        
        </div>
        </div>
        <div class="col-md-5">
            <div class="card" style="height: 75vh">
            <div class="card-body">
                 <div class="alert alert-success alert-dismissible" id="alert_message"  style="display: none;" role="alert">
                        <button type="button" class="btn-close btn btn-primary" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
              <h5 class="card-title">All Picked Product</h5>
               <table class="table table-bordered table-striped mb-0">
                                        <colgroup>
                                            <col width="20%">
                                            <col width="45%">
                                            <col width="25%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr class="bg-gradient-navy-dark">
                                                <th class="text-center px-2 py-1">QTY</th>
                                                <th class="text-center px-2 py-1">Product</th>
                                                <th class="text-center px-2 py-1">Total</th>
                                                <th class="text-center px-2 py-1"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr></tr>
                                        </tbody>
                                    </table>
                                   
 <div id="datasa" >
    
           
</div>
            </div>
          </div>
           </div>
      </div>
        </div>
      </div>
    </article>

      
      </div>

  </div>
</div>



<?php include 'footer.php'; ?>
<script>
$(document).ready(function() {
 cart_card();
 $(document).on('click', '.accept', function(){
    var de_id = $(this).attr("id");
    
      $.ajax({
        url:"accept-delivery",
        method:"GET",
        data:{
        de_id:de_id,
        status:"<?php echo "accept"; ?>"
      },
        success:function(data)
        {
        document.getElementById("alert_message").style.display = "block";
              $('#alert').show();
          $('#alert_message').html(data);
        cart_card();
        }
      });
   
  });
  $(document).on('click', '.request', function(){
    var de_id = $(this).attr("id");
    
      $.ajax({
        url:"request-delivery",
        method:"GET",
        data:{
        de_id:de_id,
        status:"<?php echo "request"; ?>"
      },
        success:function(data)
        {
        document.getElementById("alert_message").style.display = "block";
              $('#alert').show();
          $('#alert_message').html(data);
        cart_card();
        }
      });
   
  });


    function cart_card() {
      $.ajax({
        url: 'order_select',
        method: 'get',
        data: {order_no: "<?php echo $_GET['order_no']; ?>"},
        
        success: function(response) {
          $("#datasa").html(response);
          calldes();
        }
      });
    }
 function calldes() {
      $.ajax({
        url: 'call-des',
        method: 'get',
        data: {order_no: "<?php echo $_GET['order_no']; ?>"},
        
        success: function(response) {
          $("#call-des").html(response);
          
        }
      });
    }
    
});
</script>