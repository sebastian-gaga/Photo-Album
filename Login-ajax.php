<?php 
session_start();
include 'includes/connect.php';
if($_POST)
{
    $username = $_POST['name'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE name= '$username' AND password = '$password'";
    $rows = mysqli_query($link,$query);
    $record = mysqli_fetch_array($rows);
    $result = mysqli_num_rows($rows);
    if($result > 0 )
    {
               $_SESSION['userid'] = $record['user_id'];
               $_SESSION['name'] = $record['name'];
               $_SESSION['email'] = $record['email'];
               $_SESSION['login'] = 'true';
    echo "success";
    }
  }

?>