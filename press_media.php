<?php require_once "header.php"?>


<div class="page-top"> 
	<div class="block blackish">
		<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<span>Book The Trip And Enjoy season</span>
			<h1>ABOUT <i>PRESS/MEDIA</i></h1>
		</div>
	</div>
</div><!-- Page Top -->	

<section><img src="images/mapo2.png" style="background-color:#F0F0F0;">
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tips">
						<div class="remove-ext">
							<div class="row">
								<?php 
									 $getpress_media_detail = $homeObj->getpress_media();
									 foreach($getpress_media_detail as $getpress_media_detail_arr){ 
								 ?>
									<div class="col-md-2"> 
										<div class="tip">
											<img src="<?php echo $getpress_media_detail_arr['press_media_image'];?>" alt="" />
											<div class="tip-detail">
												<a href="press_media-details.php?id=<?php echo $getpress_media_detail_arr['id']; ?>" title="<?php echo $getpress_media_detail_arr['press_media_title'];?>"><h4><?php echo $getpress_media_detail_arr['press_media_title'];?></h4></a>
												<span><?php echo $getpress_media_detail_arr['date_created'];?></span>
											</div>
										</div>
									</div><!-- Tip -->
								<?php
									}
								?>
							</div><br>
						</div>
					</div><!-- Tips -->
				</div>
			</div>
		</div>
	</div>
</section><!-- TIPS -->

<?php require_once "footer.php"?>
<script type="text/javascript" src="js/jquery2.1.1.js"></script>



