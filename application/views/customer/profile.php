<div class="mp-offesr">
		<div class="wrapper-padding-a">
			<div class="offer-sliderabt">
				<header class="fly-in page-lbl">
					<div class="offer-slider-lbl">My Profile</div>
				</header>
  
				  <div class="container">
				  	<?php foreach ($show as $s): ?>
				  	<label><b>Username</b></label>
				    <input class="input-login" type="text"  value="<?php echo $s->username; ?>" disabled>

				    <label><b>Firstname</b></label>
				    <input class="input-login" type="text"  value="<?php echo $s->firstname; ?>" disabled>

				    <label><b>Lastname</b></label>
				    <input class="input-login" type="text"  value="<?php echo $s->lastname; ?>" disabled>

				    <label><b>Email</b></label>
				    <input class="input-login" type="text"  value="<?php echo $s->email; ?>" disabled>

				    <label><b>Phone</b></label>
				    <input class="input-login" type="text"  value="<?php echo $s->phone; ?>" disabled>

				    <div class="booking-complete">
						<button class="booking-complete-btn"><a href="<?php echo base_url(); ?>customer/edit_profile">EDIT</a></button>
					</div>
					<?php endforeach; ?>
				  </div>

				</form>

			</div>
		</div>
	</div>