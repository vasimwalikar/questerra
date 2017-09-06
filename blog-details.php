<?php 
	require_once "header.php";
	
	if($_REQUEST['id']>0){
		
		$blog_detail = $homeObj->getBlogById($_REQUEST['id']);
		
		extract($blog_detail);

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
							<img src="<?php echo $blog_detail['blog_image_details']; ?>" alt="" />
						</div>
						<h3><?php echo $blog_detail['blog_title']; ?></h3>
						<p><?php echo $blog_detail['blog_desc']; ?></p>
					</div>
				</div>
				<!-- blogs categories -->
				<div class="col-md-3 column">
					<div class="imp-details">
						<h3>Blogs Categories</h3>
						<ul>
							<li>
									<a href="blogs.php" title="">All</a>
								</li>
							<?php 
								$category = $homeObj->getCategory();
								foreach($category as $category_arr){
									?>
								<li>
									<a href="blogs.php?cat_id=<?php echo $category_arr['id']; ?>" title=""><?php echo $category_arr['packages_category_name']?></a>
								</li>
								
							<?php	}
							?>	
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php require_once "footer.php";?>