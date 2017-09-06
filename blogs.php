<?php 
	require_once "header.php";
	
?>
<link rel="stylesheet" href="css/blog.css" type="text/css" />
	


<div class="page-top"> 
	<div class="block blackish">
		<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
		<div class="container">
			<span>Book The Trip And Enjoy season</span>
			<h1>OUR <i>BLOGS</i></h1>
		</div>
	</div>
</div><!-- Page Top -->	

<section><img src="images/mapo2.png" style="background-color:#F0F0F0;">
	<div class="block gray">
		<div class="container">
			<div class="row">
			<!-- blogs page details -->
				<div class="col-md-9 column">
					<div class="blog remove-ext">
						<div class="row">
							<?php 
								$getBlog_detail = $homeObj->getAllBlog($_REQUEST['cat_id']);
								foreach($getBlog_detail as $getBlog_detail_arr){
							?>
							<div class="col-md-4">
								<div class="blog-post">
									<div class="blog-post-img">
										<div class="post-img"><img src="<?php echo $getBlog_detail_arr['blog_image'];?>" alt="" /><a href="blog-details.php?id=<?php echo $getBlog_detail_arr['id']; ?>" title=""><i class="fa fa-link"></i></a></div>
									</div>
									<strong><?php echo $getBlog_detail_arr['date_created'];?></strong>
									<span>Posted By <a href="#" title="">Admin</a></span>
									<h3>
										<a href="blog-details.php?id=<?php echo $getBlog_detail_arr['id']; ?>" title="<?php echo $getBlog_detail_arr['blog_title'];?>"><?php echo substr($getBlog_detail_arr['blog_title'],0,25);?>..</a>
									</h3>
								</div>
							</div>
							<?php }
							?>
						</div><br>
					</div>
				</div>
				<!-- Blogs page categories -->
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