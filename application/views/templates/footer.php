<footer class="footer-b">
	<div class="wrapper-padding">
		<div class="footer-left">© Copyright 2017 by UIA | Ukraine International Airlines. All rights reserved.</div>
		<div class="clear"></div>
	</div>
</footer>

<!-- // scripts // -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.1.7.1.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/idangerous.swiper.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/slideInit.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jqeury.appear.js"></script>  
  <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.select.js"></script>  
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>  
  
  <script>
  	$(document).ready(function(){
  		$('.date-inpt').datepicker();
		$('.custom-select').customSelect();
		$(function() {
  			$(document.body).on('appear', '.fly-in', function(e, $affected) {
    			$(this).addClass("appeared");
  			});
  			$('.fly-in').appear({force_process: true});
		});

     	$(".owl-slider").owlCarousel({
    		loop:true,
    		margin:28,
    		responsiveClass:true,
    		responsive:{
        0:{
            items:1,
            nav:true
        },
        620:{
            items:2,
            nav:true
        },
        900:{
            items:3,
            nav:false
        },
        1120:{
            items:4,
            nav:true,
            loop:false
        }
    }
		});
		$slideHover();
  	});
  </script>
<!-- \\ scripts \\ --> 
 
</body>  
</html> 