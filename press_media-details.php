<?php 
	require_once "header.php";
	
	if($_REQUEST['id']>0){
		
		$press_media_detail = $homeObj->getpress_mediaById($_REQUEST['id']);
		
		extract($press_media_detail);
	}


?>
	
<link rel="stylesheet" href="css/style1.css" type="text/css" />

<div class="page-top"> 
	<div class="block blackish">
		<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<span>Book The Trip And Enjoy season</span>
			<h1>PRESS MEDIA <i>DETAILS</i></h1>
		</div>
	</div>
</div><!-- Page Top -->	

<section><img src="images/mapo2.png" style="background-color:#F0F0F0;">
	<div class="block gray">
		<div class="container">
			<div class="row">
			<!-- blog details -->
				<div class="col-md-12 column">
					<div class="single-post">
						<div class="col-md-5 column">
							<div class="single-img">
								<img src="<?php echo $press_media_detail['press_media_image']; ?>" alt="" />
							</div>
						</div>
						<div class="col-md-7 column">
							<h3><?php echo $press_media_detail['press_media_title']; ?></h3><br>
							<p><?php echo $press_media_detail['press_media_desc']; ?></p>
							<p><a href="<?php echo $press_media_detail['press_media_link']; ?>">More Information &nbsp;(<?php echo $press_media_detail['press_media_link']; ?>)</a></p>
						</div>
					</div>
				</div>
				<!-- blogs categories -->
			</div>
		</div><br>
	</div><br>
</section><br>


<?php require_once "footer.php";?>