<!-- main-cont -->
<div class="main-cont">
  <div class="body-wrapper">
    <div class="wrapper-padding">
    <div class="page-head">
      <div class="page-title">Flight - <span>History</span></div>
    
      <div class="clear"></div>
    </div>

	<div class="sp-page">

		<div class="sp-page-a">

			<div class="sp-page-com">
			
  				<div class="sp-page-lb">
  					<?php foreach ($show as $s): ?>
  					<div class="sp-page-p">
						<div class="booking-left">
							<h2>Booking ID: <?php echo $s->bookingID; ?></h2>
							<div class="complete-info">
								<h2>Passenger Information</h2>
								<div class="complete-info-table">
									<div class="complete-info-i">
										<div class="complete-info-l">First Name:</div>
										<div class="complete-info-r"><?php echo $s->firstname; ?></div>
										<div class="clear"></div>
									</div>
									<div class="complete-info-i">
										<div class="complete-info-l">Last Name:</div>
										<div class="complete-info-r"><?php echo $s->lastname; ?></div>
										<div class="clear"></div>
									</div>
									<div class="complete-info-i">
										<div class="complete-info-l">E-Mail Adress:</div>
										<div class="complete-info-r"><?php echo $s->email; ?></div>
										<div class="clear"></div>
									</div>
									<div class="complete-info-i">
										<div class="complete-info-l">Country:</div>
										<div class="complete-info-r"><?php echo $s->country; ?></div>
										<div class="clear"></div>
									</div>
									<div class="complete-info-i">
										<div class="complete-info-l">Phone Number:</div>
										<div class="complete-info-r"><?php echo $s->phone; ?></div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="complete-devider"></div>
								
								<h2>Booking Details</h2>
								<div class="complete-info-table">
									<div class="complete-info-i">
										<div class="complete-info-l">From:</div>
										<div class="complete-info-r"><?php echo $s->from; ?></div>
										<div class="clear"></div>
									</div>
									<div class="complete-info-i">
										<div class="complete-info-l">To:</div>
										<div class="complete-info-r"><?php echo $s->to; ?></div>
										<div class="clear"></div>
									</div>
									<div class="complete-info-i">
										<div class="complete-info-l">Price:</div>
										<div class="complete-info-r"><?php echo $s->price; ?></div>
										<div class="clear"></div>
									</div>
								</div>
								
							</div>
							
							
						</div>
  					</div>
  				<?php endforeach; ?>
  					<br><br>

  				
  				</div>
  				<div class="clear"></div>

			</div>
			
		</div>
		
		<div class="clear"></div>
	</div>

    </div>	
  </div>  
</div>
<!-- /main-cont -->