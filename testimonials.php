<?php require_once "header.php";?>

	<div class="page-top"> 
		<div class="block blackish">
			<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
			<div class="container">
				<span>Book The Trip And Enjoy season</span>
				<h1>OUR <i>TESTIMONIALS</i></h1>
			</div>
		</div>
	</div><!-- Page Top -->	

	<section><section><img src="images/mapo2.png" style="background-color:#F3EEEB;">
		<div class="block whitish">
		<div style="background:url(images/parallax8.jpg);" class="parallax"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 column">
						<div class="welcome-box">
							<h2>WELCOME <span>TO QUESTERRA</span></h2>
							<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl .Nulleget urna mattis consectetur purus sit amet fermentum</p>
							
						</div><!-- Welcome Box -->
					</div>
				</div>
			</div>
		</div>
	</section>



	<section>
		<div class="block">
			<div class="container">
			
			
				<?php 
					$getAlltestimonial_detail = $homeObj->getAlltestimonial();
					foreach($getAlltestimonial_detail as $getAlltestimonial_detail_arr){
				?>	
					<div class="row">
						<div class="col-md-2 column">
							<div class="video">
								<div class="play">
									<img src="<?php echo $getAlltestimonial_detail_arr['testimonials_image'];?>" alt=""/>
								</div>
								
							</div><!-- Video --> 
						</div>
						<div class="col-md-10 column">
							<div class="simple-text">
								<h3><?php echo $getAlltestimonial_detail_arr['testimonials_name'];?></h3>
								<h4><?php echo $getAlltestimonial_detail_arr['position'];?></h4>
								<p><?php echo $getAlltestimonial_detail_arr['testimonials_desc'];?></p>
							</div>
						</div>
					</div>
					<br>
				<?php	}
									
				?>
			</div>
		</div>
	</section>


<!--<section>
	<div class="block remove-gap">
		<div class="container">
			<div class="row">
				<div class="title">
					<span>BOOK THE TRIP AND ENJOY SEASON</span>
					<h2>RESORT <span>SPECIALS</span></h2>
					<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam um dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				</div>

				<div class="col-md-12">
					<div class="deals">
						<div class="row">
							<div class="col-md-4">
								<div class="deal">
									<div class="deal-img">
										<img src="images/resource/deal7.jpg" alt="" />
										<div class="deal-price"><span><i>Limited Offer</i><strong>$201</strong></span></div>
										<div class="deal-hover">
											<div class="deal-hover-wrap">
												<span>Starting From<strong>$305</strong></span>
												<p>Sed do eiusmod tempor incididunt ut laboare et dolore magna aliqua.</p>
												<a href="#" title="">BOOK NOW</a>
											</div>
										</div>
									</div>
									<div class="deal-detail">
										<i>PARIS FRANCE</i>
										<h4>Fall Zip Adventure Package </h4>
										<span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
										<p>10945 REVIEWS</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="deal">
									<div class="deal-img">
										<img src="images/resource/deal8.jpg" alt="" />
										<div class="deal-price"><span><i>Limited Offer</i><strong>$201</strong></span></div>
										<div class="deal-hover">
											<div class="deal-hover-wrap">
												<span>Starting From<strong>$305</strong></span>
												<p>Sed do eiusmod tempor incididunt ut laboare et dolore magna aliqua.</p>
												<a href="#" title="">BOOK NOW</a>
											</div>
										</div>
									</div>
									<div class="deal-detail">
										<i>NEW YORK</i>
										<h4>Downtown Dinner Package </h4>
										<span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
										<p>12145 REVIEWS</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="deal">
									<div class="deal-img">
										<img src="images/resource/deal9.jpg" alt="" />
										<div class="deal-price"><span><i>Limited Offer</i><strong>$201</strong></span></div>
										<div class="deal-hover">
											<div class="deal-hover-wrap">
												<span>Starting From<strong>$305</strong></span>
												<p>Sed do eiusmod tempor incididunt ut laboare et dolore magna aliqua.</p>
												<a href="#" title="">BOOK NOW</a>
											</div>
										</div>
									</div>
									<div class="deal-detail">
										<i>THAILAND</i>
										<h4>Picnic on the Parkway </h4>
										<span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
										<p>10945 REVIEWS</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->


<?php require_once "footer.php"; ?>