<?php

session_start();
$id=$_SESSION['userid'];
include 'includes/connect.php';
if (isset($_POST)){
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imagename=basename($_FILES["fileToUpload"]["name"]);
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){

		$query = "INSERT into images (p_name,user_id) values ('$imagename','$id')";
		$result=mysqli_query($link,$query);
		if($result){
		echo "success";
		}
		else{
			echo "error";
		}


	}
	else
	{
        echo "image Not Uploaded";
	}
}