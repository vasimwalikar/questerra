<?php 
	require_once "header.php";
	
	if($_REQUEST['id']>0){
		$package_detail = $homeObj->getpackageById($_REQUEST['id']);
		extract($package_detail);
	}
	
?>
	<style>
		header{
			height:6%;
		}
	</style>
	
	<div class="page-top" style="padding-bottom:16.9%;"> 
		<div class="block blackish">
			<div class="parallax" style="background:url(images/parallax5.jpg);"></div>
			<div class="container">
				<span>Book The Trip And Enjoy season</span>
				<h1>ABOUT <i>TOURS</i></h1>
			</div>
		</div>
	</div><!-- Page Top -->	
	
	
	<link rel="stylesheet" type="text/css" href="css/tour-details.css">
	
	<link rel='stylesheet' id='nixe-fontello-css'  href='https://nixe-demo2.rtthemes.com/wp-content/themes/nixe/css/fontello/css/fontello.css?ver=4.6.1' type='text/css' media='all' />
	<link rel='stylesheet' id='js_composer_front-css'  href='https://nixe-demo2.rtthemes.com/wp-content/plugins/js_composer_4_11_2/assets/css/js_composer.min.css?ver=4.11.2' type='text/css' media='all' />
	<link rel='stylesheet' id='nixe-theme-style-css'  href='https://nixe-demo2.rtthemes.com/wp-content/themes/nixe-child/style.css?ver=4.6.1' type='text/css' media='all' />
	<link rel='stylesheet' id='nixe-dynamic-css'  href='https://nixe-demo2.rtthemes.com/wp-content/uploads/sites/26/nixe/dynamic-style.css?ver=161017130343' type='text/css' media='all' />
	<link rel='stylesheet' id='nixe-google-fonts-css'  href='//fonts.googleapis.com/css?family=Poppins%3A600%7COpen+Sans%3Aregular%7CLibre+Baskerville%3Aitalic%26amp%3Bsubset%3Dlatin&#038;ver=1.0.0' type='text/css' media='all' />
	<script type='text/javascript' src='https://nixe-demo2.rtthemes.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='https://nixe-demo2.rtthemes.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='https://nixe-demo2.rtthemes.com/wp-content/plugins/revslider-5.2.5.3/public/assets/js/jquery.themepunch.tools.min.js?ver=5.2.5.3'></script>
	<script type='text/javascript' src='https://nixe-demo2.rtthemes.com/wp-content/plugins/revslider-5.2.5.3/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.2.5.3'></script>
	<link rel='https://api.w.org/' href='https://nixe-demo2.rtthemes.com/wp-json/' />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://nixe-demo2.rtthemes.com/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://nixe-demo2.rtthemes.com/wp-includes/wlwmanifest.xml" /> 
	<link rel="canonical" href="https://nixe-demo2.rtthemes.com/" />
	<link rel='shortlink' href='https://nixe-demo2.rtthemes.com/' />
	<link rel="alternate" type="application/json+oembed" href="https://nixe-demo2.rtthemes.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnixe-demo2.rtthemes.com%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://nixe-demo2.rtthemes.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnixe-demo2.rtthemes.com%2F&#038;format=xml" />
	
	<img src="images/mapo2.png" style="padding-bottom:40px;background-color:#F0F0F0;">
	<div id="container" style="padding-bottom: 0px;padding-top: 0px; background-color:#F0F0F0;">   
 
		<!-- main contents -->
		<div id="main_content">
			<div  class="content_row row vc_row wpb_row vc_row-fluid default-style fullwidth" >
	
				<div class="content_row_wrapper nopadding fullwidth" >
					<div class="vc_col-sm-12 wpb_column vc_column_container nopadding" >
						<div class="vc_column-inner">
							<div class="wpb_wrapper" >
								<div class="rt-carousel main-carousel carousel-holder clearfix" data-item-width="1" data-mobile-height="350" data-nav="true" data-dots="true" data-parallax="true" data-timeout="15000" data-autoplay="true">
									<div class="owl-carousel">

										<div class="item has-bg-image  global-style" style="min-height: 700px;">
			
											<div class="slide-content-wrapper default clearfix" style="min-height: 700px;">
												<div class="slide-content  left text-center" style="width: 50%;background-color: #ffffff;">			
													<h2 class="slide_heading" style="font-size:46px; line-height:46px" data-mobile-value="28" data-mobile-line-height="1.5">WELCOME</h2>
													<span class="slide_sub_heading secondary-font"    data-mobile-value="22" data-mobile-line-height="1">An exclusive meet of nature and luxury</span>
													<div class="slide-text"><p><?php echo $package_detail['slider_desc1']; ?></p>
													
														<a class="button_ style-1 hero" href="tours-details.php" title="" style="background-color:#ee4a93;">BOOK NOW</a>
													
													</div>
												</div>
											</div>
											<div class="slide-background" style="background-image: url(<?php echo $package_detail['slider_image1']; ?>);background-repeat: no-repeat;background-size: cover;background-position: center center;">
												
											</div>
										</div>
										<div class="item has-bg-image  global-style" style="min-height: 700px;">
											
											<div class="slide-content-wrapper default clearfix" style="min-height: 700px;">
												<div class="slide-content  left text-center" style="width: 50%;background-color: #ffffff;">			
													<h2 class="slide_heading" style="font-size:48px; line-height:48px" data-mobile-value="28" data-mobile-line-height="1.5">YACHTING</h2>
													<span class="slide_sub_heading secondary-font"    data-mobile-value="22" data-mobile-line-height="1">Peerless comfort with spectacular view</span>
													<div class="slide-text"><p><?php echo $package_detail['slider_desc2']; ?></p>
													<a class="button_ style-1 hero" href="tours-details.php" title="" style="background-color:#ee4a93;">BOOK NOW</a>
													</div>
													
													
												</div>
											</div>
											<div class="slide-background" style="background-image: url(<?php echo $package_detail['slider_image2']; ?>);background-repeat: no-repeat;background-size: cover;background-position: center center;">
												
											</div>
										</div>
										<div class="item has-bg-image  global-style" style="min-height: 700px;">
											
											<div class="slide-content-wrapper default clearfix" style="min-height: 700px;">
												<div class="slide-content  left text-center" style="width: 50%;background-color: #ffffff;">			
													<h2 class="slide_heading" style="font-size:46px; line-height:46px" data-mobile-value="28" data-mobile-line-height="1.5">BEAUTIFUL</h2>
													<span class="slide_sub_heading secondary-font"    data-mobile-value="22" data-mobile-line-height="1">An hidden paradise on the earth</span>
													<div class="slide-text"><p><?php echo $package_detail['slider_desc3']; ?></p>
													<a class="button_ style-1 hero" href="tours-details.php" title="" style="background-color:#ee4a93;">BOOK NOW</a></a>
													</div>
												</div>
											</div>
											<div class="slide-background" style="background-image: url(<?php echo $package_detail['slider_image3']; ?>);background-repeat: no-repeat;background-size: cover;background-position: center center;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div  class="content_row row vc_row wpb_row vc_row-fluid default-style fullwidth fixed_heights rt-flex-wrapper border-top border-bottom" >
				<div class="content_row_wrapper nopadding default" >
					<!--<div class="vc_col-sm-2 wpb_column vc_column_container border-left border-right mobile-border-bottom custom_bg" >
						<div class="vc_column-inner" style="padding-top:60px;padding-bottom:83px;padding-left:30px;padding-right:30px;background-color: rgba(255,255,255,0.1);">
							<div class="wpb_wrapper" >
								<article  class="icon-content-box content-box icon-top icon-style-2">
									<div class="icon-holder"><span class="icon-line-globe"></span></div>
									<div class="text-holder"><h6 class="heading">Driving Passion</h6> <p class="aligncenter">Fueling your desire to learn more about your chosen subject.</p>
									</div>
								</article>
							</div>
						</div>
					</div>-->

					<div class="vc_col-sm-3 wpb_column vc_column_container border-right mobile-border-bottom" >
						<div class="vc_column-inner" style="padding-top:60px;padding-bottom:83px;padding-left:30px;padding-right:30px;">
							<div class="wpb_wrapper" >
								<article  class="icon-content-box content-box icon-top icon-style-2">
								<div class="icon-holder"><span class="he icon-line-umbrella icon-new-heart-1"></span></div>
								<div class="text-holder"><h6 class="heading">Spreading Inspiration</h6> <p class="aligncenter">Inspiring you to relive the past and imagine the future.</p>
								</div>
								</article>
							</div>
						</div>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container border-right mobile-border-bottom custom_bg" >
						<div class="vc_column-inner" style="padding-top:60px;padding-bottom:60px;padding-left:30px;padding-right:30px;background-color: rgba(255,255,255,0.1);">
							<div class="wpb_wrapper" >
								<article  class="icon-content-box content-box icon-top icon-style-2">
									<div class="icon-holder">
										<span class="icon-line-rocket"></span>
									</div>
									<div class="text-holder">
										<h6 class="heading">Handcrafted Experieces</h6> <p class="aligncenter">Locals and industry experts designing the journey's to the last mile.</p>
									</div>
								</article>
							</div>
						</div>
					</div>

					<div class="vc_col-sm-3 wpb_column vc_column_container border-right mobile-border-bottom" >
						<div class="vc_column-inner" style="padding-top:60px;padding-bottom:60px;padding-left:30px;padding-right:30px;">
							<div class="wpb_wrapper" >
								<article  class="icon-content-box content-box icon-top icon-style-2">
									<div class="icon-holder"><span class="icon-star-empty-1"></span></div>
									<div class="text-holder">
										<h6 class="heading">Expanding your Horizons</h6> <p class="aligncenter">Adding perspectives to your thought with the available plethora.</p>
									</div>
								</article>
							</div>
						</div>
					</div>
					
					<div class="vc_col-sm-3 wpb_column vc_column_container border-right mobile-border-bottom" >
						<div class="vc_column-inner" style="padding-top:60px;padding-bottom:60px;padding-left:30px;padding-right:30px;">
							<div class="wpb_wrapper" >
								<article  class="icon-content-box content-box icon-top icon-style-2">
									<div class="icon-holder"><span class="icon-line-rocket"></span></div>
									<div class="text-holder">
										<h6 class="heading">Lasting networks</h6> <p class="aligncenter">Making friends in the world who share the same interests/profession.</p>
									</div>
								</article>
							</div>
						</div>
					</div>
					
					<!--<div class="vc_col-sm-2 wpb_column vc_column_container border-right mobile-border-bottom custom_bg" >
						<div class="vc_column-inner" style="padding-top:60px;padding-bottom:60px;padding-left:30px;padding-right:30px;">
							<div class="wpb_wrapper" >
								<article  class="icon-content-box content-box icon-top icon-style-2">
									<div class="icon-holder"><span class="icon-line-globe"></span></div>
									<div class="text-holder">
										<h6 class="heading">Making Memories</h6> <p class="aligncenter">What's a journey without laughter & Bon-Homie?.</p>
									</div>
								</article>
							</div>
						</div>
					</div>-->
				</div>
			</div>
			

			<!--<div  class="content_row row vc_row wpb_row vc_row-fluid default-style fullwidth" >
				<div class="content_row_wrapper nopadding fullwidth" >
					<div class="vc_col-sm-12 wpb_column vc_column_container nopadding" >
						<div class="vc_column-inner">
							<div class="wpb_wrapper" >
								<div class="rt_features clearfix  nav-columns-3 gallery-align-left">
								<div class="feature_galleries" style="min-height:500px">
								<?php 
									$getPackage_highlight_detail = $homeObj->getpackage_highlight();
									foreach($getPackage_highlight_detail as $getPackage_highlight_detail_arr){
									?>
									<div id="feature-3-gallery" class="feature_gallery_wrapper" data-feature-gallery="<?php echo $getPackage_highlight_detail_arr['id'];?>">
										<div class="gallery-image" data-image="<?php echo $getPackage_highlight_detail_arr['highlights_image'];?>"></div>
									</div>
									<?php } ?>
								</div>
								<div class="feature_contents_wrapper" style="min-height:500px">
									<ul class="feature_nav">
									<?php 
									$getPackage_highlight_detail = $homeObj->getpackage_highlight();
									foreach($getPackage_highlight_detail as $getPackage_highlight_detail_arr){
									?>
										<li class="feature_title  active" id="feature-1-title" data-number="<?php echo $getPackage_highlight_detail_arr['id'];?>"><?php echo $getPackage_highlight_detail_arr['highlights_title'];?></li>
									 <?php } ?>
									</ul>
									<div class="feature_contents">
										<?php 
										$getPackage_highlight_detail = $homeObj->getPackage_highlight();
										foreach($getPackage_highlight_detail as $getPackage_highlight_detail_arr){
										?>
										<div id="feature-1-content" class="feature_content_wrapper  active" data-feature-content="<?php echo $getPackage_highlight_detail_arr['id'];?>">
											<div class="tab_content">
												<h3 class="feature-heading">Timeless</h3>
												<h3><?php echo $getPackage_highlight_detail_arr['highlights_title'];?></h3>
												<p><?php echo $getPackage_highlight_detail_arr['highlights_desc'];?></p>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div><br>-->
		
		<div  class="content_row row vc_row wpb_row vc_row-fluid default-style fullwidth" >
				<div class="content_row_wrapper nopadding fullwidth" >
					<div class="vc_col-sm-12 wpb_column vc_column_container nopadding" >
						<div class="vc_column-inner">
							<div class="wpb_wrapper" >
								<div class="rt_features clearfix  nav-columns-3 gallery-align-left">
								<div class="feature_galleries" style="min-height:500px">
									<div id="feature-1-gallery" class="feature_gallery_wrapper" data-feature-gallery="1">
										<div class="gallery-image" data-image="<?php echo $package_detail['image1']; ?>"></div>
									</div>
									<div id="feature-2-gallery" class="feature_gallery_wrapper" data-feature-gallery="2">
										<div class="gallery-image" data-image="<?php echo $package_detail['image2']; ?>"></div>
									</div>
									<div id="feature-3-gallery" class="feature_gallery_wrapper" data-feature-gallery="3">
										<div class="gallery-image" data-image="<?php echo $package_detail['image3']; ?>"></div>
									</div>
									<div id="feature-4-gallery" class="feature_gallery_wrapper" data-feature-gallery="4">
										<div class="gallery-image" data-image="<?php echo $package_detail['image4']; ?>"></div>
									</div>
									<div id="feature-5-gallery" class="feature_gallery_wrapper" data-feature-gallery="5">
										<div class="gallery-image" data-image="<?php echo $package_detail['image5']; ?>"></div>
									</div>
									<div id="feature-6-gallery" class="feature_gallery_wrapper" data-feature-gallery="6">
										<div class="gallery-image" data-image="<?php echo $package_detail['image6']; ?>"></div>
									</div>
									<div id="feature-7-gallery" class="feature_gallery_wrapper" data-feature-gallery="7">
										<div class="gallery-image" data-image="<?php echo $package_detail['image7']; ?>"></div>
									</div>
									<div id="feature-8-gallery" class="feature_gallery_wrapper" data-feature-gallery="8">
										<div class="gallery-image" data-image="<?php echo $package_detail['image8']; ?>"></div>
									</div>
									<div id="feature-9-gallery" class="feature_gallery_wrapper" data-feature-gallery="9">
										<div class="gallery-image" data-image="<?php echo $package_detail['image9']; ?>"></div>
									</div>
									<div id="feature-10-gallery" class="feature_gallery_wrapper" data-feature-gallery="10">
										<div class="gallery-image" data-image="<?php echo $package_detail['image10']; ?>"></div>
									</div>
								</div>
								
								<div class="feature_contents_wrapper" style="min-height:500px">
									<ul class="feature_nav">
										<li class="feature_title  active" id="feature-1-title" data-number="1"><?php echo $package_detail['title1']; ?></li>
										<li class="feature_title " id="feature-2-title" data-number="2"><?php echo $package_detail['title2']; ?></li>
										<li class="feature_title " id="feature-3-title" data-number="3"><?php echo $package_detail['title3']; ?></li>
										<li class="feature_title " id="feature-4-title" data-number="4"><?php echo $package_detail['title4']; ?></li>
										<li class="feature_title " id="feature-5-title" data-number="5"><?php echo $package_detail['title5']; ?></li>
										<li class="feature_title " id="feature-6-title" data-number="6"><?php echo $package_detail['title6']; ?></li>
										<li class="feature_title " id="feature-7-title" data-number="7"><?php echo $package_detail['title7']; ?></li>
										<li class="feature_title " id="feature-8-title" data-number="8"><?php echo $package_detail['title8']; ?></li>
										<li class="feature_title " id="feature-9-title" data-number="9"><?php echo $package_detail['title9']; ?></li>
										<li class="feature_title " id="feature-10-title" data-number="10"><?php echo $package_detail['title10']; ?></li>
									</ul>
									<div class="feature_contents">
										<div id="feature-1-content" class="feature_content_wrapper  active" data-feature-content="1">
											<div class="tab_content">
												<h3 class="feature-heading"><?php echo $package_detail['title1']; ?></h3>
												<h3><?php echo $package_detail['title1']; ?></h3>
												<p><?php echo $package_detail['desc1']; ?></p>
											</div>
										</div>
										<div id="feature-2-content" class="feature_content_wrapper" data-feature-content="2">
											<div class="tab_content">
												<h3 class="feature-heading"><?php echo $package_detail['title2']; ?></h3>
												<h3><?php echo $package_detail['title2']; ?></h3>
												<p><?php echo $package_detail['desc2']; ?></p>
											</div>
										</div>
										<div id="feature-3-content" class="feature_content_wrapper" data-feature-content="3">
											<div class="tab_content">
												<h3 class="feature-heading"><?php echo $package_detail['title3']; ?></h3>
												<h3><?php echo $package_detail['title3']; ?></h3>
												<p><?php echo $package_detail['desc3']; ?></p>
											</div>
										</div>
										<div id="feature-4-content" class="feature_content_wrapper" data-feature-content="4">
											<div class="tab_content">
												<h3 class="feature-heading"><?php echo $package_detail['title4']; ?></h3>
												<h3><?php echo $package_detail['title4']; ?></h3>
												<p><?php echo $package_detail['desc4']; ?></p>
											</div>
										</div>
										<div id="feature-5-content" class="feature_content_wrapper" data-feature-content="5">
											<div class="tab_content">
												<h3 class="feature-heading"><?php echo $package_detail['title5']; ?></h3>
												<h3><?php echo $package_detail['title5']; ?></h3>
												<p><?php echo $package_detail['desc5']; ?></p>
											</div>
										</div>
										<div id="feature-6-content" class="feature_content_wrapper" data-feature-content="6">
											<div class="tab_content">
												<h3 class="feature-heading"><?php echo $package_detail['title6']; ?></h3>
												<h3><?php echo $package_detail['title6']; ?></h3>
												<p><?php echo $package_detail['desc6']; ?></p>
											</div>
										</div>
										<div id="feature-7-content" class="feature_content_wrapper" data-feature-content="7">
											<div class="tab_content">
												<h3 class="feature-heading"><?php echo $package_detail['title7']; ?></h3>
												<h3><?php echo $package_detail['title7']; ?></h3>
												<p><?php echo $package_detail['desc7']; ?></p>
												
											</div>
										</div>
										<div id="feature-8-content" class="feature_content_wrapper" data-feature-content="8">
											<div class="tab_content">
											<h3 class="feature-heading"><?php echo $package_detail['title8']; ?></h3>
											<h3><?php echo $package_detail['title8']; ?></h3>
											<p><?php echo $package_detail['desc8']; ?></p></div>
										</div>
										<div id="feature-9-content" class="feature_content_wrapper" data-feature-content="9">
											<div class="tab_content">
											<h3 class="feature-heading"><?php echo $package_detail['title9']; ?></h3>
											<h3><?php echo $package_detail['title9']; ?></h3>
											<p><?php echo $package_detail['desc9']; ?></p></div>
										</div>
										<div id="feature-10-content" class="feature_content_wrapper" data-feature-content="10">
											<div class="tab_content">
											<h3 class="feature-heading"><?php echo $package_detail['title10']; ?></h3>
											<h3><?php echo $package_detail['title10']; ?></h3>
											<p><?php echo $package_detail['desc10']; ?></p></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div><br>
			
</div><!-- / end #main_content -->



</div><!-- / end #container --> 

<div class="full-screen-menu-holder">
<span class="full-screen-menu-close icon-cancel"></span>
<div class="full-screen-menu-wrapper">
<div class="full-screen-menu-contents">
<ul id="fullscreen_navigation" class="menu"><li id='fs-menu-item-2938'  class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2741 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children" data-depth='0'><a  href="https://nixe-demo2.rtthemes.com/">HOME</a> 
<ul class="sub-menu">
<li id='fs-menu-item-2944'  class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2741 current_page_item" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/">Home Page 1</a> </li>
<li id='fs-menu-item-2939'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/home-page-2/">Home Page 2</a> </li>
<li id='fs-menu-item-2940'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/home-page-3/">Home Page 3</a> </li>
<li id='fs-menu-item-2941'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/home-page-4/">Home Page 4</a> </li>
<li id='fs-menu-item-2942'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/home-page-5/">Home Page 5</a> </li>
<li id='fs-menu-item-2943'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/home-page-6/">Home Page 6</a> </li>
</ul>
</li>
<li id='fs-menu-item-2949'  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children" data-depth='0'><a  href="https://nixe-demo2.rtthemes.com/about-us/">ABOUT US</a> 
<ul class="sub-menu">
<li id='fs-menu-item-2950'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/activities/">Activities</a> </li>
<li id='fs-menu-item-2957'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/services/">Services</a> </li>
<li id='fs-menu-item-2952'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/our-team/">Our Team</a> </li>
<li id='fs-menu-item-2953'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/testimonials/">Testimonials</a> </li>
<li id='fs-menu-item-2951'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/contact-us/">Contact Us</a> </li>
</ul>
</li>
<li id='fs-menu-item-3020'  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children" data-depth='0'><a  href="#">ROOMS</a> 
<ul class="sub-menu">
<li id='fs-menu-item-3019'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/our-rooms/">Rooms Classic List</a> </li>
<li id='fs-menu-item-3017'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/our-rooms-3/">Rooms Animated List</a> </li>
<li id='fs-menu-item-3018'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/our-rooms-2/">Rooms Fullscreen Page</a> </li>
</ul>
</li>
<li id='fs-menu-item-2921'  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children" data-depth='0'><a  href="#">PHOTO GALLERY</a> 
<ul class="sub-menu">
<li id='fs-menu-item-2956'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/photo-gallery-metro-style/">Metro Photo Gallery</a> </li>
<li id='fs-menu-item-2954'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/masonry-photo-gallery/">Masonry Photo Gallery</a> </li>
<li id='fs-menu-item-2955'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/grid-photo-gallery/">Grid Photo Gallery</a> </li>
</ul>
</li>
<li id='fs-menu-item-2930'  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children" data-depth='0'><a  href="#">NEWS &#038; EVENTS</a> 
<ul class="sub-menu">
<li id='fs-menu-item-2962'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/news-events/">Blog – Full Width</a> </li>
<li id='fs-menu-item-2960'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/blog-masonry/">Blog Masonry</a> </li>
<li id='fs-menu-item-2963'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/blog-right-sidebar/">Blog – Right Sidebar</a> </li>
<li id='fs-menu-item-2961'  class="menu-item menu-item-type-post_type menu-item-object-page" data-depth='1'><a  href="https://nixe-demo2.rtthemes.com/blog-left-sidebar/">Blog – Left Sidebar</a> </li>
<li id='fs-menu-item-2931'  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children" data-depth='1'><a  href="#">Single Posts</a> 
	<ul class="sub-menu">
<li id='fs-menu-item-2967'  class="menu-item menu-item-type-post_type menu-item-object-post" data-depth='2'><a  href="https://nixe-demo2.rtthemes.com/2016/06/14/new-boats-arrived/">Standard</a> </li>
<li id='fs-menu-item-2965'  class="menu-item menu-item-type-post_type menu-item-object-post" data-depth='2'><a  href="https://nixe-demo2.rtthemes.com/2016/06/14/fishing-courses-starting-in-july/">Slideshow</a> </li>
<li id='fs-menu-item-2964'  class="menu-item menu-item-type-post_type menu-item-object-post" data-depth='2'><a  href="https://nixe-demo2.rtthemes.com/2016/06/14/fusce-mattis-lacus-blandit-convallis/">Photo Gallery</a> </li>
<li id='fs-menu-item-2966'  class="menu-item menu-item-type-post_type menu-item-object-post" data-depth='2'><a  href="https://nixe-demo2.rtthemes.com/2016/06/14/aliquam-vestibulum-sem-turpis/">Video</a> </li>
	</ul>
</li>
</ul>
</li>
<li id='fs-menu-item-2958'  class="menu-button menu-item menu-item-type-post_type menu-item-object-page" data-depth='0'><a  href="https://nixe-demo2.rtthemes.com/booking-form/">BOOK</a> </li>
</ul><form method="get"  action="https://nixe-demo2.rtthemes.com//"  class="wp-search-form rt_form">
	<ul>
		<li><input type="text" class='search showtextback' placeholder="search" name="s" /><span class="icon-search-1"></span></li>
	</ul>
	</form></div>
</div>
</div>
<script type='text/javascript'>
/* <![CDATA[ */
var rtframework_params = {"ajax_url":"https:\/\/nixe-demo2.rtthemes.com\/wp-admin\/admin-ajax.php","rttheme_template_dir":"https:\/\/nixe-demo2.rtthemes.com\/wp-content\/themes\/nixe","popup_blocker_message":"Please disable your pop-up blocker and click the \"Open\" link again.","wpml_lang":"","content_top_padding":"20","content_bottom_padding":"40","content_left_padding":"40","content_right_padding":"40","body_top_padding":"0","body_bottom_padding":"0","theme_slug":"nixe"};
/* ]]> */
</script>
<script type='text/javascript' src='https://nixe-demo2.rtthemes.com/wp-content/themes/nixe/js/app.min.js?ver=4.6.1'></script>
<script type='text/javascript' src='https://nixe-demo2.rtthemes.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"https:\/\/nixe-demo2.rtthemes.com\/wp-content\/themes\/nixe\/images\/preloader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ...","cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://nixe-demo2.rtthemes.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.4'></script>
<script type='text/javascript' src='https://nixe-demo2.rtthemes.com/wp-includes/js/wp-embed.min.js?ver=4.6.1'></script>
<script type='text/javascript' src='https://nixe-demo2.rtthemes.com/wp-content/plugins/js_composer_4_11_2/assets/js/dist/js_composer_front.min.js?ver=4.11.2'></script>
<!-- DEMO ONLY SCRIPTS -->
<script type="text/javascript">/*<![CDATA[ */ 
				
				//languages
				(function($){
					"use strict";
					$(".nixe-language-menu a").on('click', function(event) { 
						alert("NIXE supports WPML plugin! The language list will be automatically added to your pages when you install the plugin. ");
					});
				})(jQuery); 

			/* ]]>*/</script>
<!-- / DEMO ONLY SCRIPTS -->
</body>
</html>
<?php
	require_once "footer.php";
?>