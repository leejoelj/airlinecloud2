<div class="form_error">
<?php echo validation_errors() ;?>
</div>

<div class="mp-offesr">
		<div class="wrapper-padding-a">
			<div class="offer-sliderabt">
				<header class="fly-in page-lbl">
					<div class="offer-slider-lbl">Welcome! Login in to Your Accont</div>
				</header>
				
				<form class="form-login" method="post">
  
				  <div class="container">

				    <label><b>Username</b></label>
				    <input class="input-login" type="text" name="username" placeholder="Enter Username" required>

				    <label><b>Password</b></label>
				    <input class="input-login" type="password" name="password" placeholder="Enter Password" required>

				    <button type="submit">Login</button>
				    <a href="<?php echo base_url(); ?>users/register">Sign Up</a>
				  </div>

				</form>

			</div>
		</div>
	</div>