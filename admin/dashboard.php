<?php 
	require_once "clasess/get.total.class.php";
	$total = new get_total_records();

	$testimonials="testimonials";
	$blog="blog";
	$facts="facts";
	$tours="tours";
	$press_media="press_media";
	$enquiry ="enquiry_form";
	$packages_category="packages_category";
	$package="package";
	
	
?>
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=testimonials/list-testimonials">
					<span class="info-box-icon bg-aqua"><i class="fa fa-comments-o"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">testimonials</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($testimonials) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=blog/list-blog">
					<span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">blog</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($blog) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=facts/list-facts">
					<span class="info-box-icon bg-yellow"><i class="fa fa-pie-chart"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">facts</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($facts) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=press_media/list-press_media">
					<span class="info-box-icon bg-red"><i class="fa fa-newspaper-o"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">press_media</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($press_media) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->

	<!-- =========================================================== -->
	
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=enquiry/list-enquiry">
					<span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">enquiry</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($enquiry) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=package/list-package">
					<span class="info-box-icon bg-yellow"><i class="fa fa-flag-o"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">package</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($package) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<a class="small-box-footer" href="index.php?page=packages_category/list-packages_category">
					<span class="info-box-icon bg-green"><i class="fa fa-files-o"></i></span>
				</a>
				<div class="info-box-content">
					<span class="info-box-text">packages_category</span>
					<span class="info-box-number"><?php $total_arr = $total->allRecords($packages_category) ?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		
	</div>

	<!-- =========================================================== -->
