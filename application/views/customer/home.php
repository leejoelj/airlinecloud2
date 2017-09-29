<!-- main-cont -->
<div class="main-cont">
<div class="body-padding">
	<div class="mp-slider">
		<!-- // slider // -->
		<div class="mp-slider-row">
			<div class="swiper-container">
			    <div class="swiper-preloader-bg"></div>
			    <div id="preloader">
			    	<div id="spinner"></div>
			    </div>

			    
				<a href="#" class="arrow-left"></a>
				<a href="#" class="arrow-right"></a>
				<div class="swiper-pagination"></div>
  				<div class="swiper-wrapper">  				
      				<div class="swiper-slide">
						<div class="slide-section" style="background:url(<?php echo base_url(); ?>assets/img/fb11.jpg) center top no-repeat;">
							<div class="mp-slider-lbl">Great journey begins with a small step</div>
							<div class="mp-slider-lbl-a">Make Your Life Better and Bright!  You must trip with Us!</div>
							<div class="mp-slider-btn"><a href="#" class="btn-a">Learn more</a></div>
						</div>
      				</div>
      				<div class="swiper-slide"> 
						<div class="slide-section slide-b" style="background:url(<?php echo base_url(); ?>assets/img/fb22.jpg) center top no-repeat;">
							<div class="mp-slider-lbl">Relax with us. we love our clients</div>
							<div class="mp-slider-lbl-a">Make Your Life Better and Bright!  You must trip with Us!</div>
							<div class="mp-slider-btn"><a href="#" class="btn-a">Learn more</a></div>
						</div>
      				</div>
      				<div class="swiper-slide"> 
						<div class="slide-section slide-b" style="background:url(<?php echo base_url(); ?>assets/img/fb33.jpg) center top no-repeat;">
							<div class="mp-slider-lbl">the best relax with us</div>
							<div class="mp-slider-lbl-a">Make Your Life Better and Bright!  You must trip with Us!</div>
							<div class="mp-slider-btn"><a href="#" class="btn-a">Learn more</a></div>
						</div>
      				</div>            
  				</div>
			</div>
		</div>
		<!-- \\ slider \\ -->
	</div>	
	
	<div class="wrapper-a-holder">
	<div class="wrapper-a">
	
		<!-- // search // -->
		<div class="page-search search-type-a">
			<nav class="page-search-tabs">
				<div class="search-tab active">Flight</div>
				<div class="clear"></div>	
			</nav>		
			<div class="page-search-content">
				<!-- // tab content tickets // -->
				<div class="search-tab-content tickets-tab">
					<div class="page-search-p">
						<!-- // -->
						<div class="srch-tab-line">
							<div class="srch-tab-left">
								<label>From</label>
								<div class="select-wrapper">
				                <select class="custom-select">
				                	<?php foreach($from as $f): ?>
				                      <option value="<?php echo $f['from']; ?>"><?php echo $f['from']; ?></option>
				                    <?php endforeach; ?>
				                </select>
				                </div>	
							</div>
							<div class="srch-tab-right">
								<label>To</label>
								<div class="select-wrapper">
			                <select class="custom-select">
			                	<?php foreach($to as $t): ?>
			                      <option value="<?php echo $t['to']; ?>"><?php echo $t['to']; ?></option>
			                    <?php endforeach; ?>
			                </select>
			                </div>	
							</div>
							<div class="clear"></div>
						</div>
						<!-- \\ -->	
						<!-- // -->
						<div class="srch-tab-line">
							<div class="srch-tab-left">
								<label>Departure</label>
								<div class="input-a"><input type="text" value="" class="date-inpt" placeholder="mm/dd/yy"> <span class="date-icon"></span></div>	
							</div>
							<div class="srch-tab-right">
								<label>arrivals</label>
								<div class="input-a"><input type="text" value="" class="date-inpt" placeholder="mm/dd/yy"> <span class="date-icon"></span></div>	
							</div>
							<div class="clear"></div>
						</div>
						<!-- \\ -->	

						<!-- // -->
						<div class="srch-tab-line no-margin-bottom">
							<div class="srch-tab-left transformed">
								<label>Peoples</label>
								<div class="select-wrapper">
								<select class="custom-select">
									<option>--</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
								</div>	
							</div>
							
							<div class="clear"></div>
						</div>
						<!-- \\ -->	
						
					</div>
					<footer class="search-footer">
						<a href="<?php echo base_url(); ?>customer/one" class="srch-btn">Search</a>	
						<div class="clear"></div>
					</footer>
				</div>
				<!-- // tab content // -->			
			</div>
		</div>
		<!-- \\ search \\ -->
		
		
		
		
	</div>
	</div>
		


	
	</div>

</div>
<!-- /main-cont -->