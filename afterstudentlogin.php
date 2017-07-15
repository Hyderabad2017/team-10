<?php
$conn=new mysqli("localhost","root","","iandeye");
if($conn->connect_error)
{
 	 die("Connection failed". $conn->connect_error);
}
else
 	echo "Connection"." "."successful";
session_start();
$email=$_SESSION['email'];
$_SESSION['email']=$email;
?>
<!DOCTYPE html>
<head>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<body background = "blue.jpg">
<h1><p align="center" style="color:#FCFBFA  ;">STUDENT LOGIN</p></h1>
</head>
<form method="post">
<br><br><br><br><br>
<br> Login successful		
		<br>
	<a href=examRegister.php>EXAM REGISTER</a><br><br> 
	<a href=studentStatus.php>STUDENT SATUS</a><br><br>

</html>