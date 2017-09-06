
<?php require_once "header.php";?>
	
	
		<div class="page-top"> 
			<div class="block blackish">
				<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
				<div class="container">
					<span>Book The Trip And Enjoy season</span>
					<h1>TRIP <i>PACKAGES</i></h1>
				</div>
			</div>
		</div><!-- Page Top -->	


		<section>
			<div class="block gray">
				<div class="container">
					<div class="row">
						<div class="col-md-12 column">
							<div class="title">
								<span>Choose your Questerra Experience</span>
								<h2>What <span>interests You ?</span></h2>
								<p>Choose from our range of hand crafted experiences from Arts to Buisness; Music to History; Architecture to Fashion and more.</p>
							</div><!-- Title -->
							<div class="price-table">
								<div class="parallax"></div>
								<div class="row">
								
								
									<?php 
										$getPackage_detail = $homeObj->getPackage();
										foreach($getPackage_detail as $getPackage_detail_arr){
									?>
								
									<div class="col-md-3">
										<div class="table"  style="background-color:#ee4a93;">
											<span><img src="<?php echo $getPackage_detail_arr['icon_image'];?>" alt="" /></span>
											<i><?php echo $getPackage_detail_arr['package_title'];?></i>
											<h4><?php  $query=mysql_query("select * from packages_category where id='".$getPackage_detail_arr['pkg_cat_id']."'");
															$represent_this=mysql_fetch_array($query);
															echo $represent_this['packages_category_name']; 
											 ?></h4>
											<ul>
												<li><?php echo $getPackage_detail_arr['location1'];?></li>
												<li><?php echo $getPackage_detail_arr['location2'];?></li>
												<li><?php echo $getPackage_detail_arr['location3'];?></li>
											</ul>
											<i>Package starting from</i>
											<strong><span>$</span> <?php echo $getPackage_detail_arr['package_price'];?> <i>ONLY</i></strong>
											<a href="tours-details.php?id=<?php echo $getPackage_detail_arr['id'];?>" title="">BOOK NOW</a>
											
											<style>
												#tooltip1 { position: relative; }
												#tooltip1 a span { display: none; color: #FFFFFF; }
												#tooltip1 a:hover span { display: block; position: absolute; width: 250px; background: #ee4a93; margin-left: -15px; top: -5px; color: #FFFFFF; padding: 5px 5px; border-radius: 10px; border: 2px solid #ffc801; }
												 @media only screen and (min-width: 410px) and (max-width:750px){#tooltip1{margin-left:15%;}}
@media only screen and (min-width: 330px) and (max-width:400px){#tooltip1{margin-left:10%;}}
@media only screen and (min-width: 765px) and (max-width:1024px){#tooltip1{margin-left:32%;}}
											</style>
											<p id="tooltip1" style="color: #fff; background-color: #5bc0de; padding: 10px 5px;font-size: 15px;line-height: 1.33;border-radius: 25px;font-weight: 400;text-align: center;vertical-align: middle;cursor: pointer; width:230px; left:20px;">
												<a href="#" style="color:#fff; font-family: arimo; font-size:15px; font-weight:300;">
													Check Available Dates
													<span>
														<?php 
															$data = $getPackage_detail_arr['pkg_date'];
															list($data1, $data2, $data3, $data4, $data5) = split('[,.-]', $data);
															echo "$data1<br>$data2<br>$data3<br>\n";
														?>
													</span>
												</a>
											</p>
										</div><!-- Table -->
									</div>
									<?php }
									?>
								
								</div>
							</div><!-- Price Table -->
						</div>
					</div>
				</div>
			</div>
		</section><!-- Price Table -->
			
  

			

		<?php require_once "footer.php";?>

