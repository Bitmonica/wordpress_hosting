<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

	<footer class="footer_section" id="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-md-8 footer-right">
					<div class="ftr-locations">
						<div class="mainTabing">
							<div class="map-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Footer Map.svg" alt="Avitech">
								<div class="map-dots">
									<span data-index="1"></span>
									<div class="location location-1">
										<h4>Mexico</h4>
										<h5>Mexico City</h5>
										<a href="#">12th Floor, Ejercito Nacional 216, Veronica Anzures</a>
									</div>
									<span data-index="2" class="active"></span>
									<div class="location location-2">
										<h4>USA</h4>
										<h5>Atlanta</h5>
										<a href="#">3423 Piedmont Rd NE, Atlanta, GA 30305</a>
									</div>
									<span data-index="3"></span>
									<div class="location location-3">
										<h4>Canada</h4>
										<h5>Toronto</h5>
										<a href="#">60 Atlantic Avenue, Suite 200, Toronto, Ontario M6K 1X9</a>
									</div>
									<span data-index="4"></span>
									<div class="location location-4">
										<h4>Argentina</h4>
										<h5>Buenos Aires</h5>
										<a href="#">Libertador Avenue 2442 4th Floor, Buenos Aires, Olivos</a>
									</div>
									<span data-index="5"></span>
									<div class="location location-5">
										<h4>England</h4>
										<h5>London</h5>
										<a href="#">Alpha House, 100 Borough High Street, London, Greater London SE1 1LB</a>
									</div>
									<span data-index="6"></span>
									<div class="location location-6">
										<h4>India</h4>
										<h5>Bangalore</h5>
										<a href="#">The Estate, 8th Floor, Dickenson Road, Bangalore, Karnataka 560042</a>
									</div>
									<span data-index="7"></span>
									<div class="location location-7">
										<h4>India</h4>
										<h5>Kolkata</h5>
										<a href="#">RDB Boulevard, 8th Floor, Plot K-1, Sector V, Salt Lake, Kolkata, West Bengal</a>
									</div>
									<span data-index="8"></span>
									<div class="location location-8">
										<h4>Brazil</h4>
										<h5>Rio de Janeiro</h5>
										<a href="#">3131, Presidente Vargas Ave., 6th Floor, Rio de Janeiro, Brazil</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mt-8 footer-left">
					<!-- <div class="col-md-4 mt-5 mt-md-0 footer-left"> -->
					<a href="<?php echo home_url(); ?>"> <img src="<?php echo the_field('footer_logo','option'); ?>" alt="AvistaTech" ></a>
					<div class="mail-section">
						<h6 class="mailinfo"><a href="mailto:support@avistatech.net">support@avistatech.net</a></h6>
					</div>
					<div class="copyright-section">
						<h6 class="copyright"><?php echo the_field('copyright_text','option'); ?></h6>
					</div>
				</div>
			</div>
		</div>

	</footer>




	<?php wp_footer(); ?>

	<script>
        jQuery(document).ready(function($) {
	        $('.loop').owlCarousel({
	            center: true,
	            items: 2,
	            loop: true,
	            margin: 50,
	            smartSpeed: 500,
	            navText: ["<i><img src='<?php echo get_template_directory_uri(); ?>/assets/images/icn-left.png' class='img-fluid'></i>", "<i><img src='<?php echo get_template_directory_uri(); ?>/assets/images/icn-right.png' class='img-fluid'></i>"],
	             responsive:{
				        0:{
				            items:1,
				            nav:true
				        },
				        600:{
				            items:3,
				            nav:false
				        },
				    }
          	});
			
			//home page click off
			//jQuery('.userinfo ').click(function() { return false; });
			//jQuery('.address ').click(function() { return false; });
			//jQuery('.orderinfo ').click(function() { return false; });
			//jQuery('.otherdetails ').click(function() { return false; });
			

        });
    </script>

  </body>
</html>