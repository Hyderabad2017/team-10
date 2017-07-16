<?php
$conn=new mysqli("localhost","root","","iandeye");
if($conn->connect_error)
{
 	 die("Connection failed". $conn->connect_error);
}
else
 	echo "Connection"." "."successful";


?>
<!DOCTYPE html>
<head>
<html lang="en">
<head>
<body background = "blue.jpg">
<h1><p align="center" style="color:#FCFBFA  ;">ADMIN LOGIN</p></h1>
</head>
<form method="post">
<br><br><br><br><br>

<h3><p align="center" style="color:#FCFBFA;">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email"></p></h3>
<h3><p align="center" style="color:#FCFBFA;">Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password"></p></h3>

<?php

?>
<p align="center"><input type="submit" name="admin-submit" value="Register"></p>
<?php
session_start();
if(isset($_POST['admin-submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT * from admin where email='$email' and password='$password'";
	$result=$conn->query($sql);
	if($result->num_rows==1)
	{
		echo"<br> Login successful";
		$_SESSION['email']=$_POST['email'];
		header('location:afteradmin.php');
		}
	
	else{
		echo "<br>NOT AUTHORISED AS ADMIN";
		
	}
}	
?>
</form>
</body>
</html>