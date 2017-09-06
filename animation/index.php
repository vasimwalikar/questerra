<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="theme-color" content="#3399CC">
		<meta name="apple-mobile-web-app-status-bar-style" content="#3399CC">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="images/favicon-16х16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="images/favicon-32х32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="images/favicon-72х72.png" sizes="72x72">
		<script>
			var vars = {
				page: 'home_page'
			};
		</script>
		<title>Trips and Family Vacations</title>

		<link rel='stylesheet' id='mkr-googleapi-font-play400700-css'  href='https://fonts.googleapis.com/css?family=Play%3A400%2C700&#038;ver=4.5.3' type='text/css' media='all' />
		<link rel='stylesheet' id='mkr-googleapi-font-patuaone-css'  href='https://fonts.googleapis.com/css?family=Patua+One&#038;ver=4.5.3' type='text/css' media='all' />
		<link rel='stylesheet' id='mkr-global-style-css'  href='css/global.min.css' type='text/css' media='all' />
		<script type="text/javascript">
			var RenderRecaptcha = function() {
				if(jQuery('#sideform_recaptcha').length){
					grecaptcha.render('sideform_recaptcha', {'sitekey' : '6LdzoQkUAAAAACLRUkufSGqw7eN1AgQALbJih05x'});
				}
				if(jQuery('#pageform_recaptcha').length){
					grecaptcha.render('pageform_recaptcha', {'sitekey' : '6LdzoQkUAAAAACLRUkufSGqw7eN1AgQALbJih05x'});
				}
			};
		</script>
		<script src="https://www.google.com/recaptcha/api.js?onload=RenderRecaptcha&render=explicit" async defer></script>
	</head>
	<body>
		<div class="main-wrapper" id="home">
			<?php require_once "header.php";?>
			<div class="main-fixed-block expanded row align-middle align-center">
				<div class="clear-lines">
					<div class="clear-line"></div>
					<div class="clear-line"></div>
					<div class="clear-line"></div>
					<div class="clear-line"></div>
					<div class="clear-line"></div>
				</div>
				<div class="main-inner-block">
					
					<div class="social row align-middle">
						<a href="tel:18006355336">0-000-000-0000</a>
						<a target="_blank" href="" class="button icon-facebook"><span></span></a>
					</div>
				</div>
			</div>
			<a target="_self" href="#">
				<button class="button fixed-button" id="fixed-button">Reserve Your Trip <span></span></button>
			</a>
			<div class="preloader expanded row align-middle align-center">
				<div class="small-12 columns text-center">
					<img src="images/quest-transpt.png" alt="logo" class="desktop-logo">   
					
				</div>
			</div>

			<div class="sections-wrapper">
				<section class="section">
					<video id="video" class="sound-off" src="videos/India-Tourism-Promotion-Video.mp4" autoplay loop></video>
					<div class="sound-switch">
						<a href="#" class="sound-control">
							mute
							<div class="sound-items">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
					</div>
					<div class="section-wrap compass-wrapper align-middle text-center">
						<div class="compass-block">
							<div class="main-logo">
								<img src="images/quest-transpt.png" alt="logo">    
							</div>
							<nav class="main-nav" id="main-nav">
								<ul>
									<li><a  target="_self"  href="map-animation.php">Architecture- (Trip A)</a></li>
																																													<li><a  target="_self"  href="map-animation.php">Architecture- (Trip B)</a></li>
																																													<li><a  target="_self"  href="">Music and Dance</a></li>
																																													<li><a  target="_self"  href="">History and Culture- (Trip A)</a></li>
																																													<li><a  target="_self"  href="">History and Culture- (Trip B)</a></li>
																																													<li><a  target="_self"  href="">Music and Dance</a></li>
								</ul>
							</nav>
							<svg version="1.1" class="main-compass" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="620" height="620" x="0px" y="0px" viewBox="0 0 631.3 631.3" style="enable-background:new 0 0 631.3 631.3;" xml:space="preserve">


								<g class="compassDots">
									<!--left-side dots-->
									<circle class="single-dot" cx="176.2" cy="194.7" r="8.5"/>
									<circle class="single-dot" cx="131.2" cy="314.7" r="8.5"/>
									<circle class="single-dot" cx="176.2" cy="436.7" r="8.5"/>
									<!--right-side dots-->
									<circle class="single-dot active" cx="455.2" cy="194.7" r="8.5"/>
									<circle class="single-dot" cx="500.2" cy="316.7" r="8.5"/>
									<circle class="single-dot" cx="455.2" cy="435.7" r="8.5"/>
								</g>

								<!--circles-->
								<circle class="compass-st3" cx="315.7" cy="315.7" r="4.5"/>
								<circle class="compass-st0" cx="315.7" cy="315.7" r="50.5"/>
								<circle class="compass-st2" cx="315.7" cy="315.7" r="27.5"/>
								<circle class="compass-st0" cx="315.7" cy="315.2" r="185"/>
								<circle class="compass-st1" cx="315.7" cy="315.2" r="310"/>
								<circle class="compass-st2" cx="315.7" cy="315.7" r="260"/>

								<!--arrow group-->
								<g id="compass-arrow">
									<circle class="compass-st2" cx="315.7" cy="315.7" r="115.5"/>
									<path  class="compass-st0" d="M428.4,218c0,0-121.6,86.3-122.2,86.8l0,0c-5.9,5-6.6,13.8-1.6,19.7c5,5.9,13.8,6.6,19.7,1.6
															C325.1,325.5,428.4,218,428.4,218z"/>
								</g>



								<!--compass small lines-->
								<g class="compass-st4" id="compass-lines">
									<line class="compass-st5" x1="468.6" y1="315.2" x2="462.7" y2="315.2"/>
									<line class="compass-st5" x1="468.4" y1="307.2" x2="462.5" y2="307.5"/>
									<line class="compass-st5" x1="467.7" y1="299.2" x2="461.9" y2="299.8"/>
									<line class="compass-st5" x1="466.7" y1="291.3" x2="460.9" y2="292.2"/>
									<line class="compass-st5" x1="465.2" y1="283.4" x2="459.5" y2="284.6"/>
									<line class="compass-st5" x1="463.4" y1="275.6" x2="457.7" y2="277.1"/>
									<line class="compass-st5" x1="461.1" y1="268" x2="455.5" y2="269.8"/>
									<line class="compass-st5" x1="458.4" y1="260.4" x2="453" y2="262.5"/>
									<line class="compass-st5" x1="455.3" y1="253" x2="450" y2="255.4"/>
									<line class="compass-st5" x1="451.9" y1="245.8" x2="446.7" y2="248.4"/>
									<line class="compass-st5" x1="448.1" y1="238.8" x2="443" y2="241.7"/>
									<line class="compass-st5" x1="443.9" y1="231.9" x2="439" y2="235.1"/>
									<line class="compass-st5" x1="439.4" y1="225.4" x2="434.7" y2="228.8"/>
									<line class="compass-st5" x1="434.5" y1="219" x2="430" y2="222.7"/>
									<line class="compass-st5" x1="429.3" y1="212.9" x2="425" y2="216.8"/>
									<line class="compass-st5" x1="423.8" y1="207.1" x2="419.7" y2="211.2"/>
									<line class="compass-st5" x1="418" y1="201.6" x2="414.1" y2="205.9"/>
									<line class="compass-st5" x1="411.9" y1="196.4" x2="408.2" y2="200.9"/>
									<line class="compass-st5" x1="405.5" y1="191.5" x2="402.1" y2="196.2"/>
									<line class="compass-st5" x1="399" y1="187" x2="395.8" y2="191.9"/>
									<line class="compass-st5" x1="392.1" y1="182.8" x2="389.2" y2="187.9"/>
									<line class="compass-st5" x1="385.1" y1="179" x2="382.5" y2="184.2"/>
									<line class="compass-st5" x1="377.9" y1="175.6" x2="375.5" y2="180.9"/>
									<line class="compass-st5" x1="370.5" y1="172.5" x2="368.4" y2="177.9"/>
									<line class="compass-st5" x1="362.9" y1="169.8" x2="361.1" y2="175.4"/>
									<line class="compass-st5" x1="355.3" y1="167.5" x2="353.8" y2="173.2"/>
									<line class="compass-st5" x1="347.5" y1="165.7" x2="346.3" y2="171.4"/>
									<line class="compass-st5" x1="339.6" y1="164.2" x2="338.7" y2="170"/>
									<line class="compass-st5" x1="331.7" y1="163.2" x2="331.1" y2="169"/>
									<line class="compass-st5" x1="323.7" y1="162.5" x2="323.4" y2="168.4"/>
									<line class="compass-st5" x1="315.7" y1="162.3" x2="315.7" y2="168.2"/>
									<line class="compass-st5" x1="307.7" y1="162.5" x2="308" y2="168.4"/>
									<line class="compass-st5" x1="299.7" y1="163.2" x2="300.3" y2="169"/>
									<line class="compass-st5" x1="291.8" y1="164.2" x2="292.7" y2="170"/>
									<line class="compass-st5" x1="283.9" y1="165.7" x2="285.1" y2="171.4"/>
									<line class="compass-st5" x1="276.1" y1="167.5" x2="277.6" y2="173.2"/>
									<line class="compass-st5" x1="268.5" y1="169.8" x2="270.3" y2="175.4"/>
									<line class="compass-st5" x1="260.9" y1="172.5" x2="263" y2="177.9"/>
									<line class="compass-st5" x1="253.5" y1="175.6" x2="255.9" y2="180.9"/>
									<line class="compass-st5" x1="246.3" y1="179" x2="248.9" y2="184.2"/>
									<line class="compass-st5" x1="239.3" y1="182.8" x2="242.2" y2="187.9"/>
									<line class="compass-st5" x1="232.4" y1="187" x2="235.6" y2="191.9"/>
									<line class="compass-st5" x1="225.9" y1="191.5" x2="229.3" y2="196.2"/>
									<line class="compass-st5" x1="219.5" y1="196.4" x2="223.2" y2="200.9"/>
									<line class="compass-st5" x1="213.4" y1="201.6" x2="217.3" y2="205.9"/>
									<line class="compass-st5" x1="207.6" y1="207.1" x2="211.7" y2="211.2"/>
									<line class="compass-st5" x1="202.1" y1="212.9" x2="206.4" y2="216.8"/>
									<line class="compass-st5" x1="196.9" y1="219" x2="201.4" y2="222.7"/>
									<line class="compass-st5" x1="192" y1="225.4" x2="196.7" y2="228.8"/>
									<line class="compass-st5" x1="187.5" y1="231.9" x2="192.4" y2="235.1"/>
									<line class="compass-st5" x1="183.3" y1="238.8" x2="188.4" y2="241.7"/>
									<line class="compass-st5" x1="179.5" y1="245.8" x2="184.7" y2="248.4"/>
									<line class="compass-st5" x1="176.1" y1="253" x2="181.4" y2="255.4"/>
									<line class="compass-st5" x1="173" y1="260.4" x2="178.4" y2="262.5"/>
									<line class="compass-st5" x1="170.3" y1="268" x2="175.9" y2="269.8"/>
									<line class="compass-st5" x1="168" y1="275.6" x2="173.7" y2="277.1"/>
									<line class="compass-st5" x1="166.2" y1="283.4" x2="171.9" y2="284.6"/>
									<line class="compass-st5" x1="164.7" y1="291.3" x2="170.5" y2="292.2"/>
									<line class="compass-st5" x1="163.7" y1="299.2" x2="169.5" y2="299.8"/>
									<line class="compass-st5" x1="163" y1="307.2" x2="168.9" y2="307.5"/>
									<line class="compass-st5" x1="162.8" y1="315.2" x2="168.7" y2="315.2"/>
									<line class="compass-st5" x1="163" y1="323.2" x2="168.9" y2="322.9"/>
									<line class="compass-st5" x1="163.7" y1="331.2" x2="169.5" y2="330.6"/>
									<line class="compass-st5" x1="164.7" y1="339.1" x2="170.5" y2="338.2"/>
									<line class="compass-st5" x1="166.2" y1="347" x2="171.9" y2="345.8"/>
									<line class="compass-st5" x1="168" y1="354.8" x2="173.7" y2="353.3"/>
									<line class="compass-st5" x1="170.3" y1="362.4" x2="175.9" y2="360.6"/>
									<line class="compass-st5" x1="173" y1="370" x2="178.4" y2="367.9"/>
									<line class="compass-st5" x1="176.1" y1="377.4" x2="181.4" y2="375"/>
									<line class="compass-st5" x1="179.5" y1="384.6" x2="184.7" y2="382"/>
									<line class="compass-st5" x1="183.3" y1="391.6" x2="188.4" y2="388.7"/>
									<line class="compass-st5" x1="187.5" y1="398.5" x2="192.4" y2="395.3"/>
									<line class="compass-st5" x1="192" y1="405" x2="196.7" y2="401.6"/>
									<line class="compass-st5" x1="196.9" y1="411.4" x2="201.4" y2="407.7"/>
									<line class="compass-st5" x1="202.1" y1="417.5" x2="206.4" y2="413.6"/>
									<line class="compass-st5" x1="207.6" y1="423.3" x2="211.7" y2="419.2"/>
									<line class="compass-st5" x1="213.4" y1="428.8" x2="217.3" y2="424.5"/>
									<line class="compass-st5" x1="219.5" y1="434" x2="223.2" y2="429.5"/>
									<line class="compass-st5" x1="225.9" y1="438.9" x2="229.3" y2="434.2"/>
									<line class="compass-st5" x1="232.4" y1="443.4" x2="235.6" y2="438.5"/>
									<line class="compass-st5" x1="239.3" y1="447.6" x2="242.2" y2="442.5"/>
									<line class="compass-st5" x1="246.3" y1="451.4" x2="248.9" y2="446.2"/>
									<line class="compass-st5" x1="253.5" y1="454.8" x2="255.9" y2="449.5"/>
									<line class="compass-st5" x1="260.9" y1="457.9" x2="263" y2="452.5"/>
									<line class="compass-st5" x1="268.5" y1="460.6" x2="270.3" y2="455"/>
									<line class="compass-st5" x1="276.1" y1="462.9" x2="277.6" y2="457.2"/>
									<line class="compass-st5" x1="283.9" y1="464.7" x2="285.1" y2="459"/>
									<line class="compass-st5" x1="291.8" y1="466.2" x2="292.7" y2="460.4"/>
									<line class="compass-st5" x1="299.7" y1="467.2" x2="300.3" y2="461.4"/>
									<line class="compass-st5" x1="307.7" y1="467.9" x2="308" y2="462"/>
									<line class="compass-st5" x1="315.7" y1="468.1" x2="315.7" y2="462.2"/>
									<line class="compass-st5" x1="323.7" y1="467.9" x2="323.4" y2="462"/>
									<line class="compass-st5" x1="331.7" y1="467.2" x2="331.1" y2="461.4"/>
									<line class="compass-st5" x1="339.6" y1="466.2" x2="338.7" y2="460.4"/>
									<line class="compass-st5" x1="347.5" y1="464.7" x2="346.3" y2="459"/>
									<line class="compass-st5" x1="355.3" y1="462.9" x2="353.8" y2="457.2"/>
									<line class="compass-st5" x1="362.9" y1="460.6" x2="361.1" y2="455"/>
									<line class="compass-st5" x1="370.5" y1="457.9" x2="368.4" y2="452.5"/>
									<line class="compass-st5" x1="377.9" y1="454.8" x2="375.5" y2="449.5"/>
									<line class="compass-st5" x1="385.1" y1="451.4" x2="382.5" y2="446.2"/>
									<line class="compass-st5" x1="392.1" y1="447.6" x2="389.2" y2="442.5"/>
									<line class="compass-st5" x1="399" y1="443.4" x2="395.8" y2="438.5"/>
									<line class="compass-st5" x1="405.5" y1="438.9" x2="402.1" y2="434.2"/>
									<line class="compass-st5" x1="411.9" y1="434" x2="408.2" y2="429.5"/>
									<line class="compass-st5" x1="418" y1="428.8" x2="414.1" y2="424.5"/>
									<line class="compass-st5" x1="423.8" y1="423.3" x2="419.7" y2="419.2"/>
									<line class="compass-st5" x1="429.3" y1="417.5" x2="425" y2="413.6"/>
									<line class="compass-st5" x1="434.5" y1="411.4" x2="430" y2="407.7"/>
									<line class="compass-st5" x1="439.4" y1="405" x2="434.7" y2="401.6"/>
									<line class="compass-st5" x1="443.9" y1="398.5" x2="439" y2="395.3"/>
									<line class="compass-st5" x1="448.1" y1="391.6" x2="443" y2="388.7"/>
									<line class="compass-st5" x1="451.9" y1="384.6" x2="446.7" y2="382"/>
									<line class="compass-st5" x1="455.3" y1="377.4" x2="450" y2="375"/>
									<line class="compass-st5" x1="458.4" y1="370" x2="453" y2="367.9"/>
									<line class="compass-st5" x1="461.1" y1="362.4" x2="455.5" y2="360.6"/>
									<line class="compass-st5" x1="463.4" y1="354.8" x2="457.7" y2="353.3"/>
									<line class="compass-st5" x1="465.2" y1="347" x2="459.5" y2="345.8"/>
									<line class="compass-st5" x1="466.7" y1="339.1" x2="460.9" y2="338.2"/>
									<line class="compass-st5" x1="467.7" y1="331.2" x2="461.9" y2="330.6"/>
									<line class="compass-st5" x1="468.4" y1="323.2" x2="462.5" y2="322.9"/>
								</g>
							</svg>  
						</div>
					</div>
					<div class="scroll-down text-center">
						<span>let's go <br> for Trip and Family Vacations</span>
						<span class="scroll-icon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="11px" height="25px" viewBox="0 0 31.494 31.494" style="enable-background:new 0 0 31.494 31.494; transform: rotate(-90deg)" xml:space="preserve">
								<path
								style="fill:#ffffff;"
								d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554 c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587 c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z"/>
							</svg> 
						</span>
					</div>
				</section>
				
			
				<section class="section tabs-stn" id="tabs-stn" style="background-image: url('images/Tourism_Historical_2.jpg')">
					<div class="section-wrap">
						<div class="stn-title">
							<h1>Your Trips</h1>
						</div>

						<!---------mobile links------->
						<ul class="tabs for-mobile">
							<li class="tabs-title row align-bottom">
								<a data-open="reveal-main-salmon">
									<img src="images/tab1-title.svg" alt="">                                
									<span>History and Culture</span>
								</a>
							</li>
							<li class="tabs-title row align-bottom">
								<a data-open="reveal-main-salmon">
									<img src="images/tab2-title.svg" alt="">                               
									<span>Architecture</span>
								</a>
							</li>
							<li class="tabs-title row align-bottom">
								<a data-open="reveal-main-salmon">
									<img src="images/tab3-title.svg" alt="">                               
									<span>Music and Dance</span>
								</a>
							</li>
						</ul>

						<!---------reveals-------->
						<div class="full reveal" id="reveal-main-salmon" style="background-image: url('images/Tourism_Historical_2.jpg')" data-reveal>
							<div class="reveal-inner expanded row align-middle align-center">

								<div class="small-12 columns">

									<img src="images/tab1-title.svg" alt="">
									<span>History and Culture</span>

									<h2>History and Culture</h2>

									<div class="river-description">
										<p>Distance</p>
										<span>87 Miles</span>
									
										<p>Duration</p>
										<span>6 Days & 5 Nights</span>
									</div>
									<p> Standing in front of the mirror and staring at your reflection that questioning gaze baffles you. What is it that the soul seeks for? A break from the monotony and rut will uplift the spirit and liberate one.</p>
									<div class="buttons-wrap">
										<a target="_self" href="" class="button white">Learn More <span></span></a>
										<a target="_self" href="" class="button ">A Typical Day <span></span></a>
									</div>
									<button class="close-button" data-close aria-label="Close modal" type="button">
										<span aria-hidden="true">close</span>
									</button>
								</div>

							</div>
						</div>
						<div class="full reveal" id="reveal-main-salmon" style="background-image: url('images/Tourism_Architecture_2.jpg')" data-reveal>
							<div class="reveal-inner expanded row align-middle align-center">

								<div class="small-12 columns">

									<img src="http://mackayriver.com/wp-content/uploads/2016/08/tab2-title.svg" alt="">
									<span>Architecture</span>

									<h2>Architecture</h2>

									<div class="river-description">
										<p>Distance</p>
										<span>104</span>
										
										<p>Duration</p>
										<span>6 Days & 5 Nights</span>
									</div>
									<p>Standing in front of the mirror and staring at your reflection that questioning gaze baffles you. What is it that the soul seeks for? A break from the monotony and rut will uplift the spirit and liberate one.</p>
									<div class="buttons-wrap">
										<a target="_self" href="map-animation.php" class="button white">Learn More <span></span></a>
										<a target="_self" href="" class="button ">A Typical Day <span></span></a>
									</div>
									<button class="close-button" data-close aria-label="Close modal" type="button">
										<span aria-hidden="true">close</span>
									</button>
								</div>

							</div>
						</div>
						<div class="full reveal" id="reveal-main-salmon" style="background-image: url('images/Tourism_Music_Dance_2.jpg')"data-reveal>
							<div class="reveal-inner expanded row align-middle align-center">

								<div class="small-12 columns">

									<img src="images/tab3-title.svg" alt="">
									<span>Music and Dance</span>

									<h2>Music and Dance</h2>

									<div class="river-description">
										<p>Distance</p>
										<span>65 Miles or 104 Miles</span>
										
										<p>Duration</p>
										<span>4 Days or 6 Days</span>
									</div>
									<p>Standing in front of the mirror and staring at your reflection that questioning gaze baffles you. What is it that the soul seeks for? A break from the monotony and rut will uplift the spirit and liberate one.</p>
									<div class="buttons-wrap">
										<a target="_self" href="" class="button white">Learn More <span></span></a>
										<a target="_self" href="" class="button ">A Typical Day <span></span></a>
									</div>
									<button class="close-button" data-close aria-label="Close modal" type="button">
										<span aria-hidden="true">close</span>
									</button>
								</div>

							</div>
						</div>
					
						<!---------desktop tabs--------->
						<ul class="tabs for-desktop expanded row align-center" data-tabs id="home-tabs">
							<li class="tabs-title row align-bottom is-active">
								<a href="#river1" aria-selected="true" data-img="images/Tourism_Historical_2.jpg">
									<img src="images/tab1-title.svg" alt="">
									<span>History and Culture</span>
								</a>
							</li>
							<li class="tabs-title row align-bottom">
								<a href="#river2"  data-img="images/Tourism_Architecture_2.jpg">
									<img src="images/tab2-title.svg" alt="">
									<span>Architecture</span>
								</a>
							</li>
							<li class="tabs-title row align-bottom">
								<a href="#river3"  data-img="images/Tourism_Music_Dance_2.jpg">
									<img src="images/tab3-title.svg" alt="">
									<span>Music and Dance</span>
								</a>
							</li>
						</ul>
						<div class="tabs-content text-center" data-tabs-content="home-tabs">
							<div class="tabs-panel is-active" id="river1">
								<div class="tab-img-block row align-middle align-center">
									<h2>History and Culture</h2>
									<div class="tabs-description row">
										<div class="small-6 columns align-bottom text-center">
											<h6>Distance</h6>
											<span>87 Miles</span>
										</div>
										<div class="small-6 columns align-bottom text-center">
											<h6>Duration</h6>
											<span>6 Days & 5 Nights</span>
										</div>
									</div>
								</div>
								<p>Standing in front of the mirror and staring at your reflection that questioning gaze baffles you. What is it that the soul seeks for? A break from the monotony and rut will uplift the spirit and liberate one.</p>
								<div class="buttons-wrap">
									<a target="_self" href="" class="button white">Learn More <span></span></a>
									<a target="_self" href="" class="button ">A Typical Day <span></span></a>
								</div>
							</div>
							<div class="tabs-panel" id="river2">
								<div class="tab-img-block row align-middle align-center" style="background-image: url('images/Tourism_Architecture_2.jpg')">
									<h2>Architecture</h2>
									<div class="tabs-description row">
										<div class="small-6 columns align-bottom text-center">
											<h6>Distance</h6>
											<span>104</span>
										</div>
										<div class="small-6 columns align-bottom text-center">
											<h6>Duration</h6>
											<span>6 Days & 5 Nights</span>
										</div>
									</div>
								</div>
								<p>Standing in front of the mirror and staring at your reflection that questioning gaze baffles you. What is it that the soul seeks for? A break from the monotony and rut will uplift the spirit and liberate one.</p>
								<div class="buttons-wrap">
									<a target="_self" href="map-animation.php" class="button white">Learn More <span></span></a>
									<a target="_self" href="" class="button ">A Typical Day <span></span></a>
								</div>
							</div>
							<div class="tabs-panel" id="river3">
								<div class="tab-img-block row align-middle align-center"
									 style="">
									<h2>Music and Dance</h2>
									<div class="tabs-description row">
										<div class="small-6 columns align-bottom text-center">
											<h6>Distance</h6>
											<span>65 Miles or 104 Miles</span>
										</div>
										<div class="small-6 columns align-bottom text-center">
											<h6>Duration</h6>
											<span>4 Days or 6 Days</span>
										</div>
									</div>
								</div>
								<p>Standing in front of the mirror and staring at your reflection that questioning gaze baffles you. What is it that the soul seeks for? A break from the monotony and rut will uplift the spirit and liberate one.</p>
								<div class="buttons-wrap">
									<a target="_self" href="" class="button white">Learn More <span></span></a>
									<a target="_self" href="" class="button ">A Typical Day <span></span></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section tabs-stn" style="background-image: url('images/bg-for-tab1-min.jpg')">
					<div class="section-wrap">
						<div class="stn-title">
							<h1>Family Trip</h1>
						</div>
						<div class="stn-miniature text-center">
							<img src="images/family-rafting-miniature.svg" alt="">
						</div>
						<div class="tabs-content text-center">
							<div class="tabs-panel show">
								<div class="tab-img-block row align-middle align-center" style="">
									<h2>Family Trip</h2>
									<div class="tabs-description row">
										<div class="small-12 columns align-bottom text-center">
											<p>Standing in front of the mirror and staring at your reflection that questioning gaze baffles you. What is it that the soul seeks for? A break from the monotony and rut will uplift the spirit and liberate one.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="buttons-wrap">
						<a target="_self" href="" class="button white">Learn More <span></span></a>
						<a target="_self" href="" class="button ">A Typical Day <span></span></a>
					</div>
				</section>
				<section class="section double">
					<div class="expanded row collapse gallery-wrapper">
						<div class="gallery-title">
							<h1>gallery</h1>
						</div>
							<div class="small-6 columns double-bg dark-mask" style="background-image: url('images/home-video-bg.jpg')">
							<div class="section-wrap video gallery">
								<a href="" class="button">view more <span></span></a>
								<div class="title">
									<h2>video</h2>
									<h4>visit our gallery</h4>
								</div>
							</div>
						</div>
						<div class="small-6 columns double-bg dark-mask" style="background-image: url('images/home-photo-bg.jpg')">
							<div class="section-wrap photo gallery">
								<div class="title">
									<h2>photo</h2>
									<h4>visit our gallery</h4>
								</div>
								<a href="" class="button">view more <span></span></a>
							</div>
						</div>
					</div>
				</section>
				<section class="section whitespace-stn contact-stn">
					<div class="section-wrap expanded row align-middle align-center text-center">
						<div class="small-12 xlarge-6 columns">
							<h2>contact</h2>
							<address>Bangalore <br> dummy, Address <br></address>
							<a href="tel:800-635-5336">000-000-0000</a>
							<a href="tel:208-344-1881">000-000-0000</a>
							<a href="" class="button white">contact us <span></span></a>
						</div>
						<div class="small-12 xlarge-6 columns show-for-xlarge">
							<img src="images/Tourism_New_Map.png" width="705" height="169" alt="">
						</div>
					</div>
				</section>
			</div>
		</div>
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
		<script type='text/javascript' src='js/jquery.form.min.js'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var _wpcf7 = {"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
		/* ]]> */
		</script>
		<script type='text/javascript' src='js/scripts.js'></script>
		<script type='text/javascript' src='js/global.min.js'></script>
		<script type='text/javascript' src='js/mailchimp.min.js'></script>
		<script type='text/javascript' src='js/wp-embed.min.js'></script>
	</body>
</html>