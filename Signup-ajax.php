<?php 
include 'includes/connect.php';
$email = $_POST['email'];
$name = $_POST['name'];
$password= $_POST['password'];

 $query = "INSERT into user (email,name,password) values ('$email','$name','$password')";
$result=mysqli_query($link,$query);
if($result){
	echo "success";
}
else{
	echo "error";
}
?>