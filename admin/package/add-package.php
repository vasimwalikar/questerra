<?php
	require_once "clasess/package.class.php";
	$packageObj = new package();
	if($_REQUEST['submit'] == "Submit"){
  
		$packageObj->addPackage($_REQUEST);
		
		/* redirect to the browser */
		echo "<script> location.href='index.php?page=package/list-package'; </script>";
	}
	 $category_arr =$packageObj->getCategory();
	
?>	
	
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
		
			<div class="box box-primary">
				
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="post" enctype="multipart/form-data">
				
					<!-- First Look -->
					<div class="box-header with-border">
						<h3 class="box-title">1. First Look Of Package</h3>
					</div>
					<div class="box-body">
						<div class="form-group col-md-3">
							<label >Select Category</label>
							<select name="pkg_cat_id" class="form-control">
								<option value="">Select category</option>
								<?php foreach ($category_arr as $category) { ?>
								
									<option value="<?php echo $category['id']?>"><?php echo $category['packages_category_name']?> </option>
									
								<?php } ?>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label for="Icon Image">Package Icon Image</label>
							<input type="file" name="icon_image" id="icon_image">
							<p class="help-block">94 X 94 ( In Pixel )</p>
						</div>
						<div class="form-group col-md-3">
							<label for="Package Title "> Package Title </label>
							<input name="package_title" id="package_title" type="text" class="form-control" placeholder="Enter Package Title" required>
						</div>
						
						<div class="form-group col-md-3">
							<label for="Package Price "> Package Price </label>
							<input name="package_price" id="package_price" type="text" class="form-control" placeholder="Enter Price" required>
						</div>
					</div>	
					<div class="box-body">
						<div class="form-group col-md-3">
							<label for="location1">Name of Location 1 </label>
							<input name="location1" id="location1" type="text" class="form-control" placeholder="Enter Name of Location 1" required>
						</div>
						<div class="form-group col-md-3">
							<label for="location2">Name of Location 2 </label>
							<input name="location2" id="location2" type="text" class="form-control" placeholder="Enter Name of Location 2" required>
						</div>
						<div class="form-group col-md-3">
							<label for="location3">Name of Location 3 </label>
							<input name="location3" id="location3" type="text" class="form-control" placeholder="Enter Name of Location 3" required>
						</div>
						<div class="form-group col-md-3">
							<label for="date">Add Date</label>
							<input name="date" id="date" type="text" class="form-control" placeholder="Enter All Dates for Package" required>
						</div>
					</div>	
					<!-- End First Look -->
					
					<!--Package Details Page------>
					<div class="box-header with-border">
						<h3 class="box-title">2. Package Details (Slider Content)</h3>
					</div>
					<div class="box-body">
						<div class="form-group col-md-2">
							<label for="Slider Description">Slider Description 1</label>
							<textarea name="slider_desc1" id="slider_desc1" class="form-control" placeholder="Enter Description..." style="height: 80px;" required></textarea>
						</div>
						<div class="form-group col-md-2">
							<label for="Slider-Image1">Slider Image 1</label>
							<input type="file" name="slider_image1" id="slider_image1">
							<p class="help-block">1600X1000 (In Pixel)</p>
						</div>
						<div class="form-group col-md-2">
							<label for="Slider Description">Slider Description 2</label>
							<textarea name="slider_desc2" id="slider_desc2" class="form-control" placeholder="Enter Description..." style="height: 80px;" required></textarea>
						</div>
						<div class="form-group col-md-2">
							<label for="Slider-Image2">Slider Image 2</label>
							<input type="file" name="slider_image2" id="slider_image2">
							<p class="help-block">1600X1000 (In Pixel)</p>
						</div>
						<div class="form-group col-md-2">
							<label for="Slider Description">Slider Description 3</label>
							<textarea name="slider_desc3" id="slider_desc3" class="form-control" placeholder="Enter Description..." style="height: 80px;" required></textarea>
						</div>
						<div class="form-group col-md-2">
							<label for="Image">Slider Image 2</label>
							<input type="file" name="slider_image3" id="slider_image3">
							<p class="help-block">1600X1000 (In Pixel)</p>
						</div>
					</div>
					
					
					<!--Package Highlights Page------>
					<div class="box-header with-border">
						<h3 class="box-title">3. Package HIghlights (Slider Content)</h3>
					</div>
					<div class="box-body">
						<div class="form-group col-md-3">
								<label for="title1">Title 1 </label>
								<input name="title1" id="title1" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 1</label>
								<input type="file" name="image1" id="image1">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 1</label>
								<textarea name="desc1" id="desc1" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
						
						<div class="form-group col-md-3">
								<label for="title2">Title 2 </label>
								<input name="title2" id="title2" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 2</label>
								<input type="file" name="image2" id="image2">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 2</label>
								<textarea name="desc2" id="desc2" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group col-md-3">
								<label for="title3">Title 3 </label>
								<input name="title3" id="title3" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 3</label>
								<input type="file" name="image3" id="image3">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 3</label>
								<textarea name="desc3" id="desc3" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
						
						<div class="form-group col-md-3">
								<label for="title4">Title 4 </label>
								<input name="title4" id="title4" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 4</label>
								<input type="file" name="image4" id="image4">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 4</label>
								<textarea name="desc4" id="desc4" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group col-md-3">
								<label for="title5">Title 5 </label>
								<input name="title5" id="title5" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 5</label>
								<input type="file" name="image5" id="image5">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 5</label>
								<textarea name="desc5" id="desc5" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
						
						<div class="form-group col-md-3">
								<label for="title6">Title 6 </label>
								<input name="title6" id="title6" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 6</label>
								<input type="file" name="image6" id="image6">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 6</label>
								<textarea name="desc6" id="desc6" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group col-md-3">
								<label for="title7">Title 7 </label>
								<input name="title7" id="title7" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 7</label>
								<input type="file" name="image7" id="image7">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 7</label>
								<textarea name="desc7" id="desc7" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
						
						<div class="form-group col-md-3">
								<label for="title8">Title 8 </label>
								<input name="title8" id="title8" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 8</label>
								<input type="file" name="image8" id="image8">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 8</label>
								<textarea name="desc8" id="desc8" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
					</div>
					
					<div class="box-body">
						<div class="form-group col-md-3">
								<label for="title9">Title 9 </label>
								<input name="title9" id="title9" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 9</label>
								<input type="file" name="image9" id="image9">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 9</label>
								<textarea name="desc9" id="desc9" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
						
						<div class="form-group col-md-3">
								<label for="title10">Title 10 </label>
								<input name="title10" id="title10" type="text" class="form-control" placeholder="Enter Name of Title " required>
								
								<label for="Image">Image 10</label>
								<input type="file" name="image10" id="image10">
								<p class="help-block">836X500 (In Pixel)</p>
						</div>
						<div class="form-group col-md-3">
								<label for="Description">Description 10</label>
								<textarea name="desc10" id="desc10" class="form-control" placeholder="Enter Description..." style="height: 100px;" required></textarea>
						</div>
					</div>
					
					
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
					</div>
				</form>
			</div>
			  <!-- /.box -->
		</div>
	</div>