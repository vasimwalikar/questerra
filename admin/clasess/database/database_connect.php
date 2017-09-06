<?php
class database {
  function database(){
	
	$con = mysql_connect("localhost","root","root");
	
   // $con = mysql_connect("localhost","root","");
	
    if($con){
		
		$db = mysql_select_db("questerr_db");
		
		//$db = mysql_select_db("quest");
	   
    }else{
      die("connection failed");
    }
  }
}
?>