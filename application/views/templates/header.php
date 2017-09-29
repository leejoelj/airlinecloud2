<!DOCTYPE html>
<html lang="en">
<head>
  <title>UIA | West Europe</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta charset="utf-8" /><link rel="icon"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
  <link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/sunny/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/idangerous.swiper.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>	
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

</head>  
<body class="index-page">  

<?php if(!$this->session->userdata('logged_in')) : ?>
<header id="top">
	
	<div class="header-b">
		
		<!-- // mobile menu // -->
			<div class="mobile-menu">
				<nav>
					<ul>
						<li><a href="<?php echo base_url(); ?>">HOME</a></li>
			            <li><a href="<?php echo base_url(); ?>one">Trip</a></li>
						<li><a class="has-child" href="">Baggage Info</a>
							<ul>
				                <li><a href="<?php echo base_url(); ?>checked">Checked baggage and hand luggage</a></li>
				                <li><a href="<?php echo base_url(); ?>hand">Hand baggage only fares</a></li>
				                <li><a href="<?php echo base_url(); ?>sporting">Sporting equipment</a></li>
				                <li><a href="<?php echo base_url(); ?>dangerous">Dangerous goods</a></li>
				            </ul>
						</li>						
						<li><a href="<?php echo base_url(); ?>about">About Us</a></li>
						<li><a class="account" href="<?php echo base_url(); ?>users/login">My Account</a></li>
					</ul>
				</nav>	
			</div>
		<!-- \\ mobile menu \\ -->	
		<div class="wrapper-padding">
			<div class="header-logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" /></a></div>
			<div class="header-right">
				<a href="#" class="menu-btn"></a>
				<nav class="header-nav">
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>one">Trip</a></li>
						<li><a href="">Baggage Info</a>
							<ul>
								<li><a href="<?php echo base_url(); ?>checked">Checked baggage and hand luggage</a></li>
				                <li><a href="<?php echo base_url(); ?>hand">Hand baggage only fares</a></li>
				                <li><a href="<?php echo base_url(); ?>sporting">Sporting equipment</a></li>
				                <li><a href="<?php echo base_url(); ?>dangerous">Dangerous goods</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url(); ?>about">About Us</a></li>
						<li><a href="<?php echo base_url(); ?>users/login">My Account</a></li>
					</ul>
				</nav>
			</div>
			<div class="clear"></div>
		</div>
	</div>	
</header>
<?php endif; ?>

<?php if($this->session->userdata('logged_in')) : ?>
	<header id="top">
	
	<div class="header-b">
		
		<!-- // mobile menu // -->
			<div class="mobile-menu">
				<nav>
					<ul>
						<li><a href="<?php echo base_url(); ?>customer/home">Home</a></li>
						<li><a href="<?php echo base_url(); ?>customer/one">Trip</a></li>
						<li><a class="has-child" href="">Baggage Info</a>
							<ul>
				                <li><a href="<?php echo base_url(); ?>customer/checked">Checked baggage and hand luggage</a></li>
				                <li><a href="<?php echo base_url(); ?>customer/hand">Hand baggage only fares</a></li>
				                <li><a href="<?php echo base_url(); ?>customer/sporting">Sporting equipment</a></li>
				                <li><a href="<?php echo base_url(); ?>customer/dangerous">Dangerous goods</a></li>
				            </ul>
						</li>						
						<li><a href="<?php echo base_url(); ?>customer/about">About Us</a></li>
						<li><a class="has-child" href="">My Account</a>
							<ul>
								<li><a href="<?php echo base_url(); ?>customer/history">History</a></li>
				                <li><a href="<?php echo base_url(); ?>customer/profile">My profile</a></li>
				                <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
				            </ul>
						</li>
					</ul>
				</nav>	
			</div>
		<!-- \\ mobile menu \\ -->	
		<div class="wrapper-padding">
			<div class="header-logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" /></a></div>
			<div class="header-right">
				<a href="#" class="menu-btn"></a>
				<nav class="header-nav">
					<ul>
						<li><a href="<?php echo base_url(); ?>customer/home">Home</a></li>
						<li><a href="<?php echo base_url(); ?>customer/one">Trip</a></li>
						<li><a href="">Baggage Info</a>
							<ul>
								<li><a href="<?php echo base_url(); ?>customer/checked">Checked baggage and hand luggage</a></li>
				                <li><a href="<?php echo base_url(); ?>customer/hand">Hand baggage only fares</a></li>
				                <li><a href="<?php echo base_url(); ?>customer/sporting">Sporting equipment</a></li>
				                <li><a href="<?php echo base_url(); ?>customer/dangerous">Dangerous goods</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url(); ?>customer/about">About Us</a></li>
						<li><a href="">My Account</a>
							<ul>
				                <li><a href="<?php echo base_url(); ?>customer/history">History</a></li>
				                <li><a href="<?php echo base_url(); ?>customer/profile">My profile</a></li>
				                <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<div class="clear"></div>
		</div>
	</div>	
</header>
<?php endif; ?>