<?php
$conn=new mysqli("localhost","root","","iandeye");
if($conn->connect_error)
 {
 	 die("Connection failed". $conn->connect_error);
 }
 else
 	echo "Connection successful";
  session_start();
if(isset($_POST['submit']))
{  
	$email=$_POST['email'];
	
	$sql="SELECT * from studentregister where email='$email'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		echo"<br> Login successful";
		$_SESSION['loggeduser']=$email;
		header('location:https:afterstudentlogin');
	}
	else
		echo"<br> Login failed";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1><p align="center">  LOGIN FORM </p></h1>
</head>
<body background = "blue.jpg">
<br><br><br><br><br>


  <form method="post" action="">
  <h3><p align="center">Email &nbsp&nbsp&nbsp&nbsp<input type="text" name="email"></p></h3>
<h3><p align="center">Password &nbsp&nbsp&nbsp&nbsp<input id="password" name="password" placeholder="**********" type="password"></p></h3>
<p align="center"><input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
<p align="center"><a href="student_reg_new.php">New user? Click here</a></p>
</form>

</body>
