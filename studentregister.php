<?php
$conn=new mysqli("localhost","root","","eyeandi");
if($conn->connect_error)
 {
 	 die("Connection failed". $conn->connect_error);

 }
 else
 	echo "Connection"." "."successful";
 if(isset($_POST['register-submit']))
 {
  
  $email=$_POST['email'];
  $name=$_POST['name'];
  $contact=$_POST['contact'];

$sql="INSERT into studentregister(email,contact,name)values('$email','$name','$contact')";
$res=$conn->query($sql);
if($res)
  echo "row inserted";
else
  echo "failed"; 


 }
 


?>


<!DOCTYPE html>
<html lang="en">
<head>
<h1><p align="center" style="color:#FCFBFA  ;">STUDENT REGISTRATION FORM</p></h1>
</head>
<body background = "blue.jpg">
<form method="post">
<br><br><br><br><br>
  <h3><p align="center" style="color:#FCFBFA;">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email"></p></h3>
  <h3><p align="center" style="color:#FCFBFA;">contact&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="contact"></p></h3>
  <h3><p align="center" style="color:#FCFBFA;">name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name"></p></h3>
  
  
 
  




  <p align="center"><input type="submit" name="register-submit" value="Register"></p>
  <p align="center"><a href="studentlogin.php">log in?</a></p>

</from>

</body>
