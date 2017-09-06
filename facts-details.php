<?php 
	require_once "header.php";
	
	if($_REQUEST['id']>0){
		
		$facts_detail = $homeObj->getFactsById($_REQUEST['id']);
		
		extract($facts_detail);
	}


?>
	
<link rel="stylesheet" href="css/style1.css" type="text/css" />

<div class="page-top"> 
	<div class="block blackish">
		<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<span>Book The Trip And Enjoy season</span>
			<h1>BLOG <i>DETAILS</i></h1>
		</div>
	</div>
</div><!-- Page Top -->	

<section><img src="images/mapo2.png" style="background-color:#F0F0F0;">
	<div class="block gray">
		<div class="container">
			<div class="row">
			<!-- blog details -->
				<div class="col-md-9 column">
					<div class="single-post">
						<div class="single-img">
							<img src="<?php echo $facts_detail['facts_image']; ?>" alt="" />
						</div>
						<h3><?php echo $facts_detail['facts_title']; ?></h3>
						<p><?php echo $facts_detail['facts_desc']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php require_once "footer.php";?>