<?php
	require_once "database/database_connect.php";
	require_once "generic.class.php";
	class package extends database {
		public function __construct(){
			parent::database();
		}
    
		//Insert package table
		function addPackage($request){
			extract($request);
			
			$icon_image = time().($_FILES['icon_image']['name']);
			$icon_image = str_replace(' ','_',$icon_image);
			
			$slider_image1 = time().($_FILES['slider_image1']['name']); 
			$slider_image1 = str_replace(' ','_',$slider_image1);
			
			$slider_image2 = time().($_FILES['slider_image2']['name']); 
			$slider_image2 = str_replace(' ','_',$slider_image2);
			
			$slider_image3 = time().($_FILES['slider_image3']['name']); 
			$slider_image3 = str_replace(' ','_',$slider_image3);
			
			$image1 = time().($_FILES['image1']['name']); 
			$image1 = str_replace(' ','_',$image1);
			
			$image2 = time().($_FILES['image2']['name']); 
			$image2 = str_replace(' ','_',$image2);
			
			$image3 = time().($_FILES['image3']['name']); 
			$image3 = str_replace(' ','_',$image3);
			
			$image4 = time().($_FILES['image4']['name']); 
			$image4 = str_replace(' ','_',$image4);
			
			$image5 = time().($_FILES['image5']['name']); 
			$image5 = str_replace(' ','_',$image5);
			
			$image6 = time().($_FILES['image6']['name']); 
			$image6 = str_replace(' ','_',$image6);
			
			$image7 = time().($_FILES['image7']['name']); 
			$image7 = str_replace(' ','_',$image7);
			
			$image8 = time().($_FILES['image8']['name']); 
			$image8 = str_replace(' ','_',$image8);
			
			$image9 = time().($_FILES['image9']['name']); 
			$image9 = str_replace(' ','_',$image9);
			
			$image10 = time().($_FILES['image10']['name']); 
			$image10 = str_replace(' ','_',$image10);
			
			$target_path = "uploads/package/";
			
			$query = "INSERT INTO package(pkg_cat_id, date_created, icon_image, package_title, package_price, location1, location2, location3, pkg_date, slider_desc1, slider_image1, slider_desc2, slider_image2, slider_desc3, slider_image3, title1, image1, desc1, title2, image2, desc2, title3, image3, desc3, title4, image4, desc4, title5, image5, desc5, title6, image6, desc6, title7, image7, desc7, title8, image8, desc8, title9, image9, desc9, title10, image10, desc10) VALUES ('".Generic::preventSqlInjection($pkg_cat_id)."',NOW(), 
			'$icon_image', '".Generic::preventSqlInjection($package_title)."', '".Generic::preventSqlInjection($package_price)."', '".Generic::preventSqlInjection($location1)."', '".Generic::preventSqlInjection($location2)."', '".Generic::preventSqlInjection($location3)."', '".Generic::preventSqlInjection($pkg_date)."', '".Generic::preventSqlInjection($slider_desc1)."', '$slider_image1', '".Generic::preventSqlInjection($slider_desc2)."', '$slider_image2', '".Generic::preventSqlInjection($slider_desc3)."', '$slider_image3', '".Generic::preventSqlInjection($title1)."', '$image1', '".Generic::preventSqlInjection($desc1)."', '".Generic::preventSqlInjection($title2)."', '$image2', '".Generic::preventSqlInjection($desc2)."', '".Generic::preventSqlInjection($title3)."', '$image3', '".Generic::preventSqlInjection($desc3)."', '".Generic::preventSqlInjection($title4)."', '$image4', '".Generic::preventSqlInjection($desc4)."', '".Generic::preventSqlInjection($title5)."', '$image5', '".Generic::preventSqlInjection($desc5)."', '".Generic::preventSqlInjection($title6)."', '$image6', '".Generic::preventSqlInjection($desc6)."', '".Generic::preventSqlInjection($title7)."', '$image7', '".Generic::preventSqlInjection($desc7)."', '".Generic::preventSqlInjection($title8)."', '$image8', '".Generic::preventSqlInjection($desc8)."', '".Generic::preventSqlInjection($title9)."', '$image9', '".Generic::preventSqlInjection($desc9)."', '".Generic::preventSqlInjection($title10)."', '$image10', '".Generic::preventSqlInjection($desc10)."')";
			
			$result = mysql_query($query);
			
			if($result){
			
				move_uploaded_file($_FILES['icon_image']["tmp_name"],$target_path.$icon_image);
				move_uploaded_file($_FILES['slider_image1']["tmp_name"],$target_path.$slider_image1);
				move_uploaded_file($_FILES['slider_image2']["tmp_name"],$target_path.$slider_image2);
				move_uploaded_file($_FILES['slider_image3']["tmp_name"],$target_path.$slider_image3);
				move_uploaded_file($_FILES['image1']["tmp_name"],$target_path.$image1);
				move_uploaded_file($_FILES['image2']["tmp_name"],$target_path.$image2);
				move_uploaded_file($_FILES['image3']["tmp_name"],$target_path.$image3);
				move_uploaded_file($_FILES['image4']["tmp_name"],$target_path.$image4);
				move_uploaded_file($_FILES['image5']["tmp_name"],$target_path.$image5);
				move_uploaded_file($_FILES['image6']["tmp_name"],$target_path.$image6);
				move_uploaded_file($_FILES['image7']["tmp_name"],$target_path.$image7);
				move_uploaded_file($_FILES['image8']["tmp_name"],$target_path.$image8);
				move_uploaded_file($_FILES['image9']["tmp_name"],$target_path.$image9);
				move_uploaded_file($_FILES['image10']["tmp_name"],$target_path.$image10);
			
				return 1;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
		
		//Get all package list
		function getPackage(){
		  $query = "select package.id,package.pkg_cat_id,package.date_created,package.date_updated,package.icon_image,package.package_title,package.package_price,package.location1,package.location2,package.location3,package.pkg_date,package.slider_desc1,package.slider_image1,package.slider_desc2,package.slider_image2,package.slider_desc3,package.slider_image3,package.title1,package.image1,package.desc1,package.title2,package.image2,package.desc2,package.title3,package.image3,package.desc3,package.title4,package.image4,package.desc4,package.title5,package.image5,package.desc5,package.title6,package.image6,package.desc6,package.title7,package.image7,package.desc7,package.title8,package.image8,package.desc8,package.title9,package.image9,package.desc9,package.title10,package.image10,package.desc10,packages_category.packages_category_name from package inner join packages_category on package.pkg_cat_id = packages_category.id ";
		  $result = mysql_query($query);
		  if($result){
			$data = array();
			while($row=mysql_fetch_assoc($result)){
				$row['icon_image'] = $row['icon_image'] !==""? $this->Check_exists_img($row['icon_image']) : "dist/img/boxed-bg.jpg";
				$row['slider_image1'] = $row['slider_image1'] !==""? $this->Check_exists_img($row['slider_image1']) : "dist/img/boxed-bg.jpg";
				$row['slider_image2'] = $row['slider_image2'] !==""? $this->Check_exists_img($row['slider_image2']) : "dist/img/boxed-bg.jpg";
				$row['slider_image3'] = $row['slider_image3'] !==""? $this->Check_exists_img($row['slider_image3']) : "dist/img/boxed-bg.jpg";
				$row['image1'] = $row['image1'] !==""? $this->Check_exists_img($row['image1']) : "dist/img/boxed-bg.jpg";
				$row['image2'] = $row['image2'] !==""? $this->Check_exists_img($row['image2']) : "dist/img/boxed-bg.jpg";
				$row['image3'] = $row['image3'] !==""? $this->Check_exists_img($row['image3']) : "dist/img/boxed-bg.jpg";
				$row['image4'] = $row['image4'] !==""? $this->Check_exists_img($row['image4']) : "dist/img/boxed-bg.jpg";
				$row['image5'] = $row['image5'] !==""? $this->Check_exists_img($row['image5']) : "dist/img/boxed-bg.jpg";
				$row['image6'] = $row['image6'] !==""? $this->Check_exists_img($row['image6']) : "dist/img/boxed-bg.jpg";
				$row['image7'] = $row['image7'] !==""? $this->Check_exists_img($row['image7']) : "dist/img/boxed-bg.jpg";
				$row['image8'] = $row['image8'] !==""? $this->Check_exists_img($row['image8']) : "dist/img/boxed-bg.jpg";
				$row['image9'] = $row['image9'] !==""? $this->Check_exists_img($row['image9']) : "dist/img/boxed-bg.jpg";
				$row['image10'] = $row['image10'] !==""? $this->Check_exists_img($row['image10']) : "dist/img/boxed-bg.jpg";
				array_push($data,$row);
			 }
			 return $data;
		  }else{
			die("error in mysql query" . mysql_error());
		  }
		}
		
		/**
		*get single package details
		*/
		function getPackageByID($package_id){
		  $query = "select * from package where id = $package_id";
		  $result = mysql_query($query);
		  if($result){
			$row = mysql_fetch_assoc($result);
			$row['icon_image'] = $row['icon_image'] !==""? $this->Check_exists_img($row['icon_image']) : "dist/img/boxed-bg.jpg";
			$row['slider_image1'] = $row['slider_image1'] !==""? $this->Check_exists_img($row['slider_image1']) : "img/boxed-bg.jpg";
			$row['slider_image2'] = $row['slider_image2'] !==""? $this->Check_exists_img($row['slider_image2']) : "img/boxed-bg.jpg";
			$row['slider_image3'] = $row['slider_image3'] !==""? $this->Check_exists_img($row['slider_image3']) : "img/boxed-bg.jpg";
			$row['image1'] = $row['image1'] !==""? $this->Check_exists_img($row['image1']) : "img/boxed-bg.jpg";
			$row['image2'] = $row['image2'] !==""? $this->Check_exists_img($row['image2']) : "img/boxed-bg.jpg";
			$row['image3'] = $row['image3'] !==""? $this->Check_exists_img($row['image3']) : "img/boxed-bg.jpg";
			$row['image4'] = $row['image4'] !==""? $this->Check_exists_img($row['image4']) : "img/boxed-bg.jpg";
			$row['image5'] = $row['image5'] !==""? $this->Check_exists_img($row['image5']) : "img/boxed-bg.jpg";
			$row['image6'] = $row['image6'] !==""? $this->Check_exists_img($row['image6']) : "img/boxed-bg.jpg";
			$row['image7'] = $row['image7'] !==""? $this->Check_exists_img($row['image7']) : "img/boxed-bg.jpg";
			$row['image8'] = $row['image8'] !==""? $this->Check_exists_img($row['image8']) : "img/boxed-bg.jpg";
			$row['image9'] = $row['image9'] !==""? $this->Check_exists_img($row['image9']) : "img/boxed-bg.jpg";
			$row['image10'] = $row['image10'] !==""? $this->Check_exists_img($row['image10']) : "img/boxed-bg.jpg";
			return $row;
		  }
		}
		
		/**
		*Update package
		*/
		function Updatepackage($request){
			extract($request);
			
			if($_FILES['icon_image']['name'] !==""){
				$icon_image = time().($_FILES['icon_image']['name']); 
				$icon_image = str_replace(' ','_',$icon_image);
				$cond1 = ",icon_image='$icon_image'";
			}
			if($_FILES['slider_image1']['name'] !==""){
				$slider_image1 = time().($_FILES['slider_image1']['name']); 
				$slider_image1 = str_replace(' ','_',$slider_image1);
				$cond2 = ",slider_image1='$slider_image1'";
			}
			if($_FILES['slider_image2']['name'] !==""){
				$slider_image2 = time().($_FILES['slider_image2']['name']); 
				$slider_image2 = str_replace(' ','_',$slider_image2);
				$cond3 = ",slider_image2='$slider_image2'";
			}
			if($_FILES['slider_image3']['name'] !==""){
				$slider_image3 = time().($_FILES['slider_image3']['name']); 
				$slider_image3 = str_replace(' ','_',$slider_image3);
				$cond4 = ",slider_image3='$slider_image3'";
			}
			if($_FILES['image1']['name'] !==""){
				$image1 = time().($_FILES['image1']['name']); 
				$image1 = str_replace(' ','_',$image1);
				$cond5 = ",image1='$image1'";
			}
			if($_FILES['image2']['name'] !==""){
				$image2 = time().($_FILES['image2']['name']); 
				$image2 = str_replace(' ','_',$image2);
				$cond6 = ",image2='$image2'";
			}
			if($_FILES['image3']['name'] !==""){
				$image3 = time().($_FILES['image3']['name']); 
				$image3 = str_replace(' ','_',$image3);
				$cond7 = ",image3='$image3'";
			}
			if($_FILES['image4']['name'] !==""){
				$image4 = time().($_FILES['image4']['name']); 
				$image4 = str_replace(' ','_',$image4);
				$cond8 = ",image4='$image4'";
			}
			if($_FILES['image5']['name'] !==""){
				$image5 = time().($_FILES['image5']['name']); 
				$image5 = str_replace(' ','_',$image5);
				$cond9 = ",image5='$image5'";
			}
			if($_FILES['image6']['name'] !==""){
				$image6 = time().($_FILES['image6']['name']); 
				$image6 = str_replace(' ','_',$image6);
				$cond10 = ",image6='$image6'";
			}
			if($_FILES['image7']['name'] !==""){
				$image7 = time().($_FILES['image7']['name']); 
				$image7 = str_replace(' ','_',$image7);
				$cond11 = ",image7='$image7'";
			}
			if($_FILES['image8']['name'] !==""){
				$image8 = time().($_FILES['image8']['name']); 
				$image8 = str_replace(' ','_',$image8);
				$cond12 = ",image8='$image8'";
			}
			if($_FILES['image9']['name'] !==""){
				$image9 = time().($_FILES['image9']['name']); 
				$image9 = str_replace(' ','_',$image9);
				$cond13 = ",image9='$image9'";
			}
			if($_FILES['image10']['name'] !==""){
				$image10 = time().($_FILES['image10']['name']); 
				$image10 = str_replace(' ','_',$image10);
				$cond14 = ",image10='$image10'";
			}
			
			
			$query = "update package set date_updated = NOW(),pkg_cat_id = '".Generic::preventSqlInjection($pkg_cat_id)."', package_title = '".Generic::preventSqlInjection($package_title)."', package_price = '".Generic::preventSqlInjection($package_price)."', location1 = '".Generic::preventSqlInjection($location1)."', location2 = '".Generic::preventSqlInjection($location2)."', location3 = '".Generic::preventSqlInjection($location3)."', pkg_date = '".Generic::preventSqlInjection($pkg_date)."', slider_desc1 = '".Generic::preventSqlInjection($slider_desc1)."',
			slider_desc2 = '".Generic::preventSqlInjection($slider_desc2)."', slider_desc3 = '".Generic::preventSqlInjection($slider_desc3)."', title1 = '".Generic::preventSqlInjection($title1)."', desc1 = '".Generic::preventSqlInjection($desc1)."', title2 = '".Generic::preventSqlInjection($title2)."', desc2 = '".Generic::preventSqlInjection($desc2)."', title3 = '".Generic::preventSqlInjection($title3)."', desc3 = '".Generic::preventSqlInjection($desc3)."', title4 = '".Generic::preventSqlInjection($title4)."', desc4 = '".Generic::preventSqlInjection($desc4)."', title5 = '".Generic::preventSqlInjection($title5)."', desc5 = '".Generic::preventSqlInjection($desc5)."', title6 = '".Generic::preventSqlInjection($title6)."', desc6 = '".Generic::preventSqlInjection($desc6)."', title7 = '".Generic::preventSqlInjection($title7)."', desc7 = '".Generic::preventSqlInjection($desc7)."', title8 = '".Generic::preventSqlInjection($title8)."', desc8 = '".Generic::preventSqlInjection($desc8)."', title9 = '".Generic::preventSqlInjection($title9)."', desc9 = '".Generic::preventSqlInjection($desc9)."', title10 = '".Generic::preventSqlInjection($title10)."', desc10 = '".Generic::preventSqlInjection($desc10)."' ".$cond1." ".$cond2." ".$cond3." ".$cond4." ".$cond5." ".$cond6." ".$cond7." ".$cond8." ".$cond9." ".$cond10." ".$cond11." ".$cond12." ".$cond13." ".$cond14." where id = $package_id";
			
			
			
			
			$result = mysql_query($query);
			if($result){
				$target_path = "uploads/package/";
				move_uploaded_file($_FILES['icon_image']["tmp_name"],$target_path.$icon_image);
				move_uploaded_file($_FILES['slider_image1']["tmp_name"],$target_path.$slider_image1);
				move_uploaded_file($_FILES['slider_image2']["tmp_name"],$target_path.$slider_image2);
				move_uploaded_file($_FILES['slider_image3']["tmp_name"],$target_path.$slider_image3);
				move_uploaded_file($_FILES['image1']["tmp_name"],$target_path.$image1);
				move_uploaded_file($_FILES['image2']["tmp_name"],$target_path.$image2);
				move_uploaded_file($_FILES['image3']["tmp_name"],$target_path.$image3);
				move_uploaded_file($_FILES['image4']["tmp_name"],$target_path.$image4);
				move_uploaded_file($_FILES['image5']["tmp_name"],$target_path.$image5);
				move_uploaded_file($_FILES['image6']["tmp_name"],$target_path.$image6);
				move_uploaded_file($_FILES['image7']["tmp_name"],$target_path.$image7);
				move_uploaded_file($_FILES['image8']["tmp_name"],$target_path.$image8);
				move_uploaded_file($_FILES['image9']["tmp_name"],$target_path.$image9);
				move_uploaded_file($_FILES['image10']["tmp_name"],$target_path.$image10);
				return 1;
			}else{
				die("error in mysql query" . mysql_error());
			}
		}
		
		/**
		*Delete package by id
		*/
		function Deletepackage($id){
		  $query = "delete from package where id = $id";
		  $result = mysql_query($query);
		  if($result){
			return 1;
		  }else{
			die("error in mysql query" . mysql_error());
		  }
		}
		
		// functions  for catrgory table
		function getCategory(){
			$data = array(); 
			$query = "select * from packages_category";
			$result = mysql_query($query);
		   
			if($result){
				while($row = mysql_fetch_assoc($result)){
					array_push($data,$row);
				}
				return $data;
			}else{
				die("error in mysql query " . mysql_error());
			}
		}
		
		/* check img exists or not 
		  */
		 function Check_exists_img($img){
		   if(file_exists("uploads/package/$img")){
			   $fileName = "uploads/package/$img";
		   }else{
			   $fileName = "admin/uploads/package/$img";
		   }
			 return $fileName;
		 }
	}  