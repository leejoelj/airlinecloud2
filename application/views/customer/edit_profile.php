<?php echo form_open_multipart('customer/edit_profile'); ?>

<div class="mp-offesr">
		<div class="wrapper-padding-a">
			<div class="offer-sliderabt">
				<header class="fly-in page-lbl">
					<div class="offer-slider-lbl">My Profile</div>
				</header>
  
				  <div class="container">
				  	<?php foreach ($show as $s): ?>
				  	<label><b>Username</b></label>
				    <input class="input-login" type="text"  name="username" value="<?php echo $s->username; ?>" disabled>

				    <label><b>Firstname</b></label>
				    <input class="input-login" type="text"  name="firstname" value="<?php echo $s->firstname; ?>" >

				    <label><b>Lastname</b></label>
				    <input class="input-login" type="text" name="lastname" value="<?php echo $s->lastname; ?>" >

				    <label><b>Email</b></label>
				    <input class="input-login" type="text" name="email" value="<?php echo $s->email; ?>" >

				    <label><b>Phone</b></label>
				    <input class="input-login" type="text" name="phone" value="<?php echo $s->phone; ?>" >

				    <button type="submit">Save</button>
					<?php endforeach; ?>
				  </div>

				</form>

			</div>
		</div>
	</div>