<?php 
include_once("login.php");

$username=$_GET['username'];
$password=$_GET['password'];
$email=$_GET['email'];
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $email;
echo "<br>";
$sql="INSERT INTO loginsystem(user_name,user_pass,user_email) VALUES($username,$password,$email)";
mysqli_query($conn,$sql);


?>