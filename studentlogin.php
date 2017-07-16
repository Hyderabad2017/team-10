<?php
$conn=new mysqli("localhost","root","","eyeandi");
if($conn->connect_error)
 {
 	 die("Connection failed". $conn->connect_error);

 }
 else
 	echo "Connection successful";
  session_start();
if(isset($_POST['login-submit']))
{  
	$email=$_POST['email'];
	$_SESSION['email']=$email;
	
	
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
<h1><p align="center" style="color:#FCFBFA  ;">  LOGIN FORM </p></h1>
</head>
<body background = "blue.jpg">
<br><br><br><br><br>


  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <h3><p align="center" style="color:#FCFBFA  ;">Email &nbsp&nbsp&nbsp&nbsp<input type="text" name="email"></p></h3>
  
<p align="center"><input type="submit" name="login-submit" value="Login"></p>
<p align="center" style="color:#FCFBFA  ;"><a href="studentregister.php">New user? Click here</a></p>
</form>

</body>



