<?php 
	require_once "header.php";
	
?>
<link rel="stylesheet" href="css/blog.css" type="text/css" />
	


<div class="page-top"> 
	<div class="block blackish">
		<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<span>Book The Trip And Enjoy season</span>
			<h1>OUR <i>FACTS</i></h1>
		</div>
	</div>
</div><!-- Page Top -->	

<section><img src="images/mapo2.png" style="background-color:#F0F0F0;">
	<div class="block gray">
		<div class="container">
			<div class="row">
			<!-- blogs page details --->
				<div class="col-md-12 column">
					<div class="blog remove-ext">
						<div class="row">
							<?php 
								$getFacts_detail = $homeObj->getAllFacts($_REQUEST['cat_id']);
								foreach($getFacts_detail as $getFacts_detail_arr){
							?>
							<div class="col-md-4">
								<div class="blog-post">
									<div class="blog-post-img">
										<div class="post-img"><img src="<?php echo $getFacts_detail_arr['facts_image'];?>" alt="" /><a href="facts-details.php?id=<?php echo $getFacts_detail_arr['id']; ?>" title=""><i class="fa fa-link"></i></a></div>
									</div>
									<strong><?php echo $getFacts_detail_arr['date_created'];?></strong>
									<span>Posted By <a href="#" title="">Admin</a></span>
									<h3>
										<a href="facts-details.php?id=<?php echo $getFacts_detail_arr['id']; ?>" title="<?php echo $getFacts_detail_arr['facts_title'];?>"><?php echo $getFacts_detail_arr['facts_title'];?></a>
									</h3>
								</div>
							</div>
							<?php }
							?>
						</div><br>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
</section>

<?php require_once "footer.php";?>