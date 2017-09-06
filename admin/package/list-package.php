	<!--Successfully package Add-->
	<div class="modal fade" id="add-package-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;package Added Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully package Updated-->
	<div class="modal fade" id="Update-package-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;package Updated Successfully</div>
			</div>
		</div>
	</div>

	<!--Successfully package Deleted-->
	<div class="modal fade" id="Deleted-package-successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="data-added-success text-center"><i class="fa fa-check-circle"></i> &nbsp;package Deleted Successfully</div>
			</div>
		</div>
	</div>

	<?php
		require_once "clasess/package.class.php";
		$package = new package();
	 
		//Add and Edit form
		if($_REQUEST['submit']=="addform"){
			if($_REQUEST['url']=="insert"){
			 $result = $package->Addpackage($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#add-package-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=package/list-package'  }, 1000);
					</script> <?php
				}
			}else{
				$result = $package->Updatepackage($_REQUEST);
				if($result==1){ ?>
					<script>
						$("#Update-package-successModal").modal('show');
						setTimeout(function(){ window.location.href='index.php?page=package/list-package'  }, 1000);
					</script> <?php
				}
			}
		}
	 
		//Delete form
		$deleted1 = "Deleted_";
		$deleted2 = $_REQUEST['package_id'];
		$result = $deleted1.$deleted2;
		if($_REQUEST['submit_id']==$result){
		$result = $package->Deletepackage($_REQUEST['package_id']);
			if($result==1){?>
				<script>
					$("#Deleted-package-successModal").modal('show');
					setTimeout(function(){ window.location.href='index.php?page=package/list-package'  }, 1000);
				</script> <?php
			}
		}
	 
		//listing package detials
		$package_arr = $package->getPackage();
	 
	?>
	
	<div class="modal fade" id="edit_form_package" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" id="addAllform"></div>
	</div>
	<!--content start-->
	
	
	

<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!-----Add new packages---------->
							<a href='index.php?page=package/add-package' class="btn btn-primary">Add New packages</a></br></br>
						<!--------new packages --------->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover" style="width:100%; display: block; overflow:auto;">
							<thead>
								<tr>
									<th>Pkg Category</th>
									<th>Icon Image</th>
									<th>Package Title</th>
									<th>Package Price</th>
									<th>Name of Location 1</th>
									<th>Name of Location 2</th>
									<th>Name of Location 3</th>
									<th>Add Date</th>
									<th>Slider Description 1</th>
									<th>NSlider Image 1</th>
									<th>Slider Description 2</th>
									<th>Slider Image 2</th>
									<th>Slider Description 3</th>
									<th>Slider Image 3</th>
									<th>title 1</th>
									<th>Image 1</th>
									<th>Description 1</th>
									<th>title 2</th>
									<th>Image 2</th>
									<th>Description 2</th>
									<th>title 3</th>
									<th>Image 3</th>
									<th>Description 3</th>
									<th>title 4</th>
									<th>Image 4</th>
									<th>Description 4</th>
									<th>title 5</th>
									<th>Image 5</th>
									<th>Description 5</th>
									<th>title 6</th>
									<th>Image 6</th>
									<th>Description 6</th>
									<th>title 7</th>
									<th>Image 7</th>
									<th>Description 7</th>
									<th>title 8</th>
									<th>Image 8</th>
									<th>Description 8</th>
									<th>title 9</th>
									<th>Image 9</th>
									<th>Description 9</th>
									<th>title 10</th>
									<th>Image 10</th>
									<th>Description 10</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($package_arr as $package){ ?>
								<tr>
									<td>
										<?php echo $package['packages_category_name'];?>
									</td>
									<td>
										<img src="<?php echo $package['icon_image'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['package_title'];?>
									</td>
									<td>
										<?php echo $package['package_price'];?>
									</td>
									<td>
										<?php echo $package['location1'];?>
									</td>
									<td>
										<?php echo $package['location2'];?>
									</td>
									<td>
										<?php echo $package['location3'];?>
									</td>
									<td>
										<?php echo $package['pkg_date'];?>
									</td>
									<td>
										<?php echo $package['slider_desc1'];?>
									</td>
									<td>
										<img src="<?php echo $package['slider_image1'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['slider_desc2'];?>
									</td>
									<td>
										<img src="<?php echo $package['slider_image2'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['slider_desc3'];?>
									</td>
									<td>
										<img src="<?php echo $package['slider_image3'];?>" width="50px">
									</td>
									
									<td>
										<?php echo $package['title1'];?>
									</td>
									<td>
										<img src="<?php echo $package['image1'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc1'];?>
									</td>
									
									<td>
										<?php echo $package['title2'];?>
									</td>
									<td>
										<img src="<?php echo $package['image2'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc2'];?>
									</td>
									
									<td>
										<?php echo $package['title3'];?>
									</td>
									<td>
										<img src="<?php echo $package['image3'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc3'];?>
									</td>
									
									<td>
										<?php echo $package['title4'];?>
									</td>
									<td>
										<img src="<?php echo $package['image4'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc4'];?>
									</td>
									
									<td>
										<?php echo $package['title5'];?>
									</td>
									<td>
										<img src="<?php echo $package['image5'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc5'];?>
									</td>
									
									<td>
										<?php echo $package['title6'];?>
									</td>
									<td>
										<img src="<?php echo $package['image6'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc6'];?>
									</td>
									
									<td>
										<?php echo $package['title7'];?>
									</td>
									<td>
										<img src="<?php echo $package['image7'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc7'];?>
									</td>
									
									<td>
										<?php echo $package['title8'];?>
									</td>
									<td>
										<img src="<?php echo $package['image8'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc8'];?>
									</td>
									
									<td>
										<?php echo $package['title9'];?>
									</td>
									<td>
										<img src="<?php echo $package['image9'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc9'];?>
									</td>
									<td>
										<?php echo $package['title10'];?>
									</td>
									<td>
										<img src="<?php echo $package['image10'];?>" width="50px">
									</td>
									<td>
										<?php echo $package['desc10'];?>
									</td>
									
									<td>
										<?php echo $package['date_created'];?>
									</td>
									<td>
										<?php echo $package['date_updated'];?>
									</td>
									<td>
										<a href="index.php?page=package/edit-package&package_id=<?php echo $package['id']; ?>" class="btn bg-green mbottom20">edit</a>
									</td>
									<td>
										<form method="post" id="form_delete_<?php echo $package['id'];?>" name="form_delete_<?php echo $package['id'];?>">
											<input type="hidden" name="package_id" id="package_id" value="<?php echo $package['id'];?>">
											<input type="hidden" name="submit_id" id="submit_id" value="Deleted_<?php echo $package['id'];?>">
											<a href="javascript:void(0);" class="btn bg-red mbottom20" onclick="Deleted(<?php echo $package['id'];?>);">Delete</a>
										</form>
									</td>
								</tr>
							<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Pkg Category</th>
									<th>Icon Image</th>
									<th>Package Title</th>
									<th>Package Price</th>
									<th>Name of Location 1</th>
									<th>Name of Location 2</th>
									<th>Name of Location 3</th>
									<th>Add Date</th>
									<th>Slider Description 1</th>
									<th>NSlider Image 1</th>
									<th>Slider Description 2</th>
									<th>Slider Image 2</th>
									<th>Slider Description 3</th>
									<th>Slider Image 3</th>
									<th>title 1</th>
									<th>Image 1</th>
									<th>Description 1</th>
									<th>title 2</th>
									<th>Image 2</th>
									<th>Description 2</th>
									<th>title 3</th>
									<th>Image 3</th>
									<th>Description 3</th>
									<th>title 4</th>
									<th>Image 4</th>
									<th>Description 4</th>
									<th>title 5</th>
									<th>Image 5</th>
									<th>Description 5</th>
									<th>title 6</th>
									<th>Image 6</th>
									<th>Description 6</th>
									<th>title 7</th>
									<th>Image 7</th>
									<th>Description 7</th>
									<th>title 8</th>
									<th>Image 8</th>
									<th>Description 8</th>
									<th>title 9</th>
									<th>Image 9</th>
									<th>Description 9</th>
									<th>title 10</th>
									<th>Image 10</th>
									<th>Description 10</th>
									<th>Created Date</th>
									<th>Update Date</th>
									<th>Edit </th>
									<th>Delete</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
	
	<script>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"order": [[ 44, "desc" ]]
			});
		});
	</script>


	
	
	