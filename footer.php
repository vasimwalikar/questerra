<?php
	require_once "admin/clasess/enquiry.class.php";
	$enquiryObj = new enquiry();
	if($_REQUEST['submit'] == "Contact Now"){
		$enquiryObj->addEnquiry($_REQUEST);
		?>
		<script type="text/javascript">
         <!--
            alert ("Thank you for contacting us, We will get back to you soon!");
         //-->
		</script>
	
	<?php
	}



?>
<style>
input[type="email"]::-webkit-input-placeholder {
  color: #fff;
}
</style>

<footer>
		<div class="footer">
			<div class="footer-block">
				<div class="container">
					<div class="row">
						<h3>CONTACT <span>US </span></h3>
						<div class="col-md-1 column">
							<div class="contact-info">
							</div>
						</div>
						<div class="col-md-3 column" style="margin-bottom:0px;">
							<div class="contact-info"><br>
								<h6 style="color:#fff;"><strong>Address for India</strong></h6>
								<p style="font-family: arimo;font-size: 13px;line-height: 20px;transition: all 0.2s linear 0s;"><strong>D-02, K/L block, <br>Golden orchid apartments, <br>Lavelle/Kasturba road, 10/8, <br>Bangalore, 560001<br>PH: +91 80 4168 8099</strong></p><hr><br>
								
								<h6 style="color:#fff;"><strong>Address for USA</strong></h6>
								<p style="font-family: arimo;font-size: 13px;line-height: 20px;transition: all 0.2s linear 0s;"><strong>180 Bayberry lane, Watchung,<br> NJ07069<br> Ph +6463846387</strong></p>
								
							</div>
						</div>
						<div class="col-md-8 column">
							<div id="message"></div>
							<form  class="contact" method="post" action="#" enctype="multipart/form-data">
								<div class="col-md-4 column">
									<input name="name" type="text" id="name" placeholder="Name" style="border:1px solid;padding-left: 25px;color:#fff;" required/>
									<input  name="email" type="email" id="email"  placeholder="Email" style="border:1px solid;padding-left: 25px;color:#fff;" required/>
									<input  name="phone" type="text" maxlength="10"  pattern="[0-9]{10}" id="phone"  placeholder="Number" style="border:1px solid;padding-left: 25px;color:#fff;" required/>
								</div>
								<div class="col-md-4 column">
									<textarea name="message" id="" rows="3"  placeholder="Details"style="padding-left: 25px;color:#fff;" required></textarea>
									<input type="submit" name="submit" id="submit" value="Contact Now" />
								</div>
							</form><!-- Contact Form -->				
						</div>
						<div class="social" style="margin-left: 32px;">
							<h5>Find Us On</h5>
							<a href="#" title=""><i class="fa fa-facebook"></i></a>
							<a href="#" title=""><i class="fa fa-twitter"></i></a>
							<a href="#" title=""><i class="fa fa-pinterest"></i></a>
							<a href="#" title=""><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</footer><!-- Footer -->
		<div class="bottom-footer">
			<div class="container">
				<p>QUESTERRA - Copyright 2017. Developed by <a href="http://macle.co.in/" title="" target="__black">Macle Grafics Pvt.Ltd</a></p>
			</div>
		</div>


		<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>

		<script type="text/javascript" src="js/jquery2.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/prettyPhoto.js"></script>
		<script type="text/javascript" src="js/jquery-plugin.min.js"></script>
		<script type="text/javascript" src="js/jquery.datepick.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>

		<!-- SLIDER REVOLUTION -->
		<script type="text/javascript" src="js/revolution/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>


		  <script>
		$(function() {
			$('.popupDatepicker').datepick();
			$('#inlineDatepicker').datepick({onSelect: showDate});
		});

		function showDate(date) {
			alert('The date chosen is ' + date);
		}

		$(document).ready(function() {

		/* =============== Revolution Slider ===================== */
		var revapi;
		revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:750,
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"off"
		});


		$(function(){
			$('#Grid').mixitup({
			effects: ['fade','scale'],
			transitionSpeed: 600,
			layoutMode: 'list',
			});
		});


		/* =============== Services Carousel ===================== */
		$('.services-carousel').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed : 1000,
		singleItem: true,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: true,
		center: true,
		margin: 0,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		});


		/* =============== Services Carousel ===================== */
		$('.testimonials-carousel').owlCarousel({
		items: 1,
		loop: true,
		smartSpeed : 1000,
		singleItem: true,
		autoplay: false,
		dots: false,
		center: true,
		margin: 0,
		autoplayHoverPause: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		URLhashListener:true,
		startPosition: 'URLHash'});


		/* =============== Team Carousel ===================== */
		$('.team-carousel').owlCarousel({
		items: 3,
		loop: true,
		smartSpeed : 1000,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: false,
		margin: 30,
		autoplayHoverPause: true,
		responsive : {
			1000:{items:3},
			767:{items:2},
			468:{items:2},
			0:{items:1},
		}
		});


		/* =============== Tips Carousel ===================== */
		$('.tips').owlCarousel({
		items: 2,
		loop: true,
		smartSpeed : 1000,
		autoplay: true,
		autoplayTimeout: 3000,
		dots: false,
		margin: 30,
		autoplayHoverPause: true,
		responsive : {
			1000:{items:2},
			767:{items:2},
			468:{items:2},
			0:{items:1},
		}
		});

		/* =============== Fun Facts Counter ===================== */
		$(".counter").counterUp({
			time: 5000
		});

		});
		</script>

	</body>
</html>