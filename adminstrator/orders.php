<?php 	include 'header.php'; ?>
     
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
					        <a class="nav-link" href="./">
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
					        <a class="nav-link" href="product">
						        <span class="nav-icon">
	
					     
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
	  <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
	</svg>
       </span>
		                         <span class="nav-link-text">Product</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					     <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link " href="brand">
						        <span class="nav-icon">
	
					     
				
					     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
  <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
</svg>
       </span>
		                         <span class="nav-link-text">Brand</span>
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
					        <a class="nav-link" href="client">
						        <span class="nav-icon">
						       <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
	  <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
	</svg>	         </span>
		                         <span class="nav-link-text">Client</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					     
					

					   
					  
					    
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link " href="distributer">
						        <span class="nav-icon">
						         <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
	  <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Distributer</span>
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
			    
			 
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Orders</h1>
				    </div>
				    <div class="col-auto">
					        <a class="btn app-btn-primary" href="view-order-request" target=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-right-square me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M5.172 10.828a.5.5 0 0 0 .707 0l4.096-4.096V9.5a.5.5 0 1 0 1 0V5.525a.5.5 0 0 0-.5-.5H6.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
</svg>View Order request</a>
				    </div><!--//col-auto-->
			    </div><!--//row-->
			   
			    
			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
				</nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Order</th>
												<th class="cell">Customer</th>
												<th class="cell">Product</th>
												
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell">delivery</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<?php $selef = "SELECT * FROM orders";
											$pselef = $connect -> prepare($selef);
											$pselef -> execute();
											while($fselef = $pselef -> fetch(PDO::FETCH_ASSOC)){ 
												?>

											<tr>
												<td class="cell">#<?php echo $fselef['order_no']; ?></td>
												<td class="cell"><?php 
												$select_ud = "SELECT * FROM users WHERE user_no='".$fselef['user_no']."'";
												$pselect_ud = $connect -> prepare($select_ud);
												$pselect_ud -> execute();
												$fselect_ud = $pselect_ud -> fetch(PDO::FETCH_ASSOC);
												 echo $fselect_ud['first_name']." ".$fselect_ud['last_name']; ?></td>
												<td class="cell"><span class="truncate"><?php 
												$selrg = "SELECT * FROM onorder WHERE order_no='".$fselef['order_no']."'";
												$pselrg = $connect -> prepare($selrg);
												$pselrg -> execute();
												while($fselrg =  $pselrg -> fetch(PDO::FETCH_ASSOC)){
													$slepr = "SELECT * FROM product WHERE pr_id='".$fselrg['pr_id']."'";
													$pslepr = $connect -> prepare($slepr);
													$pslepr -> execute();
													$fslepr = $pslepr -> fetch(PDO::FETCH_ASSOC);
													echo $fslepr['gas_name']." ,";
												 ?></span></td>
												
												<?php } ?>
												<td class="cell"><span><?php echo $fselef['dates'];?></span></td>
												<?php if($fselef['status'] == 'success'){
													?>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<?php
												}else if($fselef['status'] == 'pending'){
													?>
														<td class="cell"><span class="badge bg-warning">pending</span></td>
													<?php
												}else{
													?>
													<td class="cell"><span class="badge bg-danger">canceled</span></td>
													<?php
												}
													?>
											
												<td class="cell"><?php echo $fselef['total'];?></td>
												<td class="cell"><?php echo $fselef['delivery'];?></td>
												
												
												
												<td class="cell"><a class="btn-sm app-btn-secondary" href="view-order?order_no=<?php echo $fselef['order_no']; ?>">View</a></td>
											</tr>
										<?php } ?>
											
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
						<nav class="app-pagination">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
							    </li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
								    <a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav><!--//app-pagination-->
						
			        </div><!--//tab-pane-->
			        
			        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
								    
								<table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Order</th>
												<th class="cell">Customer</th>
												<th class="cell">Product</th>
												
												
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell">delivery</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<?php $selef = "SELECT * FROM orders WHERE status='success'";
											$pselef = $connect -> prepare($selef);
											$pselef -> execute();
											while($fselef = $pselef -> fetch(PDO::FETCH_ASSOC)){ 
												?>

											<tr>
												<td class="cell">#<?php echo $fselef['order_no']; ?></td>
												<td class="cell"><?php 
												$select_ud = "SELECT * FROM users WHERE user_no='".$fselef['user_no']."'";
												$pselect_ud = $connect -> prepare($select_ud);
												$pselect_ud -> execute();
												$fselect_ud = $pselect_ud -> fetch(PDO::FETCH_ASSOC);
												 echo $fselect_ud['first_name']." ".$fselect_ud['last_name']; ?></td>
												<td class="cell"><span class="truncate"><?php 
												$selrg = "SELECT * FROM onorder WHERE order_no='".$fselef['order_no']."'";
												$pselrg = $connect -> prepare($selrg);
												$pselrg -> execute();
												while($fselrg =  $pselrg -> fetch(PDO::FETCH_ASSOC)){
													$slepr = "SELECT * FROM product WHERE pr_id='".$fselrg['pr_id']."'";
													$pslepr = $connect -> prepare($slepr);
													$pslepr -> execute();
													$fslepr = $pslepr -> fetch(PDO::FETCH_ASSOC);
													echo $fslepr['gas_name']." ,";
												 ?></span></td>
												
												<?php } ?>
												<td class="cell"><span><?php echo $fselef['dates'];?></span></td>
												<?php if($fselef['status'] == 'success'){
													?>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<?php
												}else if($fselef['status'] == 'pending'){
													?>
														<td class="cell"><span class="badge bg-warning">pending</span></td>
													<?php
												}else{
													?>
													<td class="cell"><span class="badge bg-danger">canceled</span></td>
													<?php
												}
													?>
											
												<td class="cell"><?php echo $fselef['total'];?></td>
												<td class="cell"><?php echo $fselef['delivery'];?></td>
												
												
												
												<td class="cell"><a class="btn-sm app-btn-secondary" href="view-order?order_no=<?php echo $fselef['order_no']; ?>">View</a></td>
											</tr>
										<?php } ?>
											
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
			        
			        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Order</th>
												<th class="cell">Customer</th>
												<th class="cell">Product</th>
												
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell">delivery</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<?php $selef = "SELECT * FROM orders WHERE status='pending'";
											$pselef = $connect -> prepare($selef);
											$pselef -> execute();
											while($fselef = $pselef -> fetch(PDO::FETCH_ASSOC)){ 
												?>

											<tr>
												<td class="cell">#<?php echo $fselef['order_no']; ?></td>
												<td class="cell"><?php 
												$select_ud = "SELECT * FROM users WHERE user_no='".$fselef['user_no']."'";
												$pselect_ud = $connect -> prepare($select_ud);
												$pselect_ud -> execute();
												$fselect_ud = $pselect_ud -> fetch(PDO::FETCH_ASSOC);
												 echo $fselect_ud['first_name']." ".$fselect_ud['last_name']; ?></td>
												<td class="cell"><span class="truncate"><?php 
												$selrg = "SELECT * FROM onorder WHERE order_no='".$fselef['order_no']."'";
												$pselrg = $connect -> prepare($selrg);
												$pselrg -> execute();
												while($fselrg =  $pselrg -> fetch(PDO::FETCH_ASSOC)){
													$slepr = "SELECT * FROM product WHERE pr_id='".$fselrg['pr_id']."'";
													$pslepr = $connect -> prepare($slepr);
													$pslepr -> execute();
													$fslepr = $pslepr -> fetch(PDO::FETCH_ASSOC);
													echo $fslepr['gas_name']." ,";
												 ?></span></td>
												
												<?php } ?>
												<td class="cell"><span><?php echo $fselef['dates'];?></span></td>
												<?php if($fselef['status'] == 'success'){
													?>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<?php
												}else if($fselef['status'] == 'pending'){
													?>
														<td class="cell"><span class="badge bg-warning">pending</span></td>
													<?php
												}else{
													?>
													<td class="cell"><span class="badge bg-danger">canceled</span></td>
													<?php
												}
													?>
											
												<td class="cell"><?php echo $fselef['total'];?></td>
												<td class="cell"><?php echo $fselef['delivery'];?></td>
												
												
												
												<td class="cell"><a class="btn-sm app-btn-secondary" href="view-order?order_no=<?php echo $fselef['order_no']; ?>">View</a></td>
											</tr>
										<?php } ?>
											
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
			        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Order</th>
												<th class="cell">Customer</th>
												<th class="cell">Product</th>
												
												<th class="cell">Date</th>
												<th class="cell">Status</th>
												<th class="cell">Total</th>
												<th class="cell">delivery</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											<?php $selef = "SELECT * FROM orders WHERE status='Cancelled'";
											$pselef = $connect -> prepare($selef);
											$pselef -> execute();
											while($fselef = $pselef -> fetch(PDO::FETCH_ASSOC)){ 
												?>

											<tr>
												<td class="cell">#<?php echo $fselef['order_no']; ?></td>
												<td class="cell"><?php 
												$select_ud = "SELECT * FROM users WHERE user_no='".$fselef['user_no']."'";
												$pselect_ud = $connect -> prepare($select_ud);
												$pselect_ud -> execute();
												$fselect_ud = $pselect_ud -> fetch(PDO::FETCH_ASSOC);
												 echo $fselect_ud['first_name']." ".$fselect_ud['last_name']; ?></td>
												<td class="cell"><span class="truncate"><?php 
												$selrg = "SELECT * FROM onorder WHERE order_no='".$fselef['order_no']."'";
												$pselrg = $connect -> prepare($selrg);
												$pselrg -> execute();
												while($fselrg =  $pselrg -> fetch(PDO::FETCH_ASSOC)){
													$slepr = "SELECT * FROM product WHERE pr_id='".$fselrg['pr_id']."'";
													$pslepr = $connect -> prepare($slepr);
													$pslepr -> execute();
													$fslepr = $pslepr -> fetch(PDO::FETCH_ASSOC);
													echo $fslepr['gas_name']." ,";
												 ?></span></td>
												
												<?php } ?>
												<td class="cell"><span><?php echo $fselef['dates'];?></span></td>
												<?php if($fselef['status'] == 'success'){
													?>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<?php
												}else if($fselef['status'] == 'pending'){
													?>
														<td class="cell"><span class="badge bg-warning">pending</span></td>
													<?php
												}else{
													?>
													<td class="cell"><span class="badge bg-danger">canceled</span></td>
													<?php
												}
													?>
											
												<td class="cell"><?php echo $fselef['total'];?></td>
												<td class="cell"><?php echo $fselef['delivery'];?></td>
												
												
												
												<td class="cell"><a class="btn-sm app-btn-secondary" href="view-order?order_no=<?php echo $fselef['order_no']; ?>">View</a></td>
											</tr>
										<?php } ?>
											
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->
				
				
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
    </div><!--//app-wrapper-->    
    		

<?php 	include 'footer.php'; ?>
