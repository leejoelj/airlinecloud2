<div class="form_error">
<?php echo validation_errors() ;?>
</div>

<!-- main-cont -->
<div class="main-cont">
  <div class="body-wrapper">
    <div class="wrapper-padding">
    <div class="page-head">
      <div class="page-title">Air Ticket - <span>booking</span></div>
     
      <div class="clear"></div>
    </div>

	<div class="sp-page">
		<div class="sp-page-a">
			<div class="sp-page-l">
  				<div class="sp-page-lb">
  					<div class="sp-page-p">
  					<form method="post">
						<div class="booking-left">
							<h2>Passenger Information</h2>
							
							<div class="booking-form">
								<div class="booking-form-i">
									<label>First Name:</label>
									<div class="input"><input type="text" name="firstname" value=""></div>
								</div>
								<div class="booking-form-i">
									<label>Last Name:</label>
									<div class="input"><input type="text" name="lastname" value=""></div>
								</div>
								<div class="booking-form-i">
									<label>Email Adress:</label>
									<div class="input"><input type="text" name="email" value=""></div>
								</div>
								<div class="booking-form-i">
									<label>Gender:</label>
									<div class="input"><input type="text" name="gender" value="" /></div>
								</div>
								<div class="booking-form-i">
									<label>Country:</label>
									<div class="input"><input type="text" name="country" value=""></div>
								</div>
								<div class="booking-form-i">
									<label>Phone Number:</label>
									<div class="input"><input type="text" name="phone" value=""></div>
								</div>
								<div class="booking-form-i">
									<label>Document Series:</label>
									<div class="input"><input type="text" name="doc" value="" /></div>
								</div>	
								<div class="booking-form-i">
									<label>Expiry date:</label>
                					<div class="input-a"><input type="text" name="expiry" value="" class="date-inpt" placeholder="mm/dd/yy"> <span class="date-icon"></span></div>	
								</div>
								<div class="booking-form-i">
									<label>Birth date:</label>
                					<div class="input-a"><input type="text" name="birth" value="" class="date-inpt" placeholder="mm/dd/yy"> <span class="date-icon"></span></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="booking-devider no-margin"></div>	
							<h2>How would you like to pay?</h2>
							
							<div class="payment-wrapper">
								<div class="payment-tabs">
									<a href="#" class="active">Credit Card <span></span></a>
								</div>
								<div class="clear"></div>
								<div class="payment-tabs-content">
									<!-- // -->
									<div class="payment-tab">
									
										<div class="booking-form">
											<div class="booking-form-i">
												<label>Card Number:</label>
												<div class="input"><input type="text" value=""></div>
											</div>
											<div class="booking-form-i">
												<label>Card Holder Name:</label>
												<div class="input"><input type="text" value=""></div>
											</div>
											<div class="booking-form-i">
												<label>Expiration Date:</label>
												<div class="card-expiration">
												<select class="custom-select">
													<option>Month</option>
													<option>01</option>
													<option>02</option>
													<option>03</option>
													<option>04</option>
													<option>05</option>
													<option>06</option>
													<option>07</option>
													<option>08</option>
													<option>09</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												</div>
												<div class="card-expiration">
												<select class="custom-select card-year">
													<option>Year</option>
													<option>2017</option>
													<option>2018</option>
													<option>2019</option>
													<option>2020</option>
												</select>
												</div>
												<div class="clear"></div>
											</div>
											<div class="booking-form-i">
												<label>Card Indefication Number:</label>
												<div class="inpt-comment">
													<div class="inpt-comment-l">
  														<div class="inpt-comment-lb">
    														<div class="input"><input type="text" value=""></div>
  														</div>
  														<div class="clear"></div>
													</div>
												</div>
												
												<div class="clear"></div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
									<!-- \\ -->
									
								</div>
							</div>
							<div class="booking-complete">
								<button class="booking-complete-btn">COMPLETE BOOKING</button>
							</div>
							
						</div>
					</form>
  					</div>
  				</div>
  				<div class="clear"></div>
			</div>
		</div>

		<div class="sp-page-r">
			
			<div class="checkout-coll">
				
				<div class="chk-lines">
					<div class="chk-line chk-fligth-info">
						<div class="chk-departure">
							<span>Departure</span>
							<b>=><br><?php echo  $this->uri->segment(4); ?></b>
						</div>
						<div class="chk-fligth-devider"></div>
						
						<div class="chk-fligth-devider"></div>
						<div class="chk-arrival">
							<span>Arrival</span>
							<b>=><br><?php echo  $this->uri->segment(5); ?></b>
						</div>
						<div class="clear"></div>
					</div>
				</div>

				<div class="chk-details">
					<h2>Details</h2>
					<div class="chk-detais-row">
						<div class="chk-line">
							<span class="chk-l">Price</span>
							<span class="chk-r"><?php echo  $this->uri->segment(3); ?>&nbsp;uah</span>
							<div class="clear"></div>
						</div>
						<div class="chk-line">
							<span class="chk-l">taxes and fees</span>
							<span class="chk-r">100 uah</span>
							<div class="clear"></div>
						</div>
					</div>
					<div class="chk-total">
						<div class="chk-total-l">Total Price</div>
						<div class="chk-total-r"><?php echo  $this->uri->segment(3)+100; ?>&nbsp;UAH</div>
						<div class="clear"></div>
					</div>					
				</div>
				
			</div>
		</div>
		<div class="clear"></div>
	</div>

    </div>	
  </div>  
</div>
<!-- /main-cont -->