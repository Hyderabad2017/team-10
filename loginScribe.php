<?php
$conn=new mysqli("localhost","root","","iandeye");
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
	$password=$_POST['password'];
	$sql="SELECT * from scribe where email='$email' and password='$password'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
		echo"<br> Login successful";
		$_SESSION['email']=$email;
		header('location:afterscribelogin.php');
	}
	else
		echo"<br> Login failed";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="main.css">
      <style>
        .jumbotron {
        margin-bottom: 0px;
        background-image: url(red-polygon.jpg);
        background-position: 0% 25%;
        background-size: cover;
        background-repeat: no-repeat;
        color: white;
        text-shadow: black 0.3em 0.3em 0.3em;
        margin:0;
        }
        img{
        align: center;
        width:75%; /* you can use % */
        height: 25%;
        margin: 15px auto;
        display: block;
        }
		</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <form method="post" >
  <div class="container">
     <div class="jumbotron">
       <h1>Scribe Login</h1>
     </div>
     <br></br>         
       </div>
	    <div class="col-sm-4">
         <br>
         <br>
         <br>
       </div>
         <div class="col-sm-8">
           <br>
		   <div class="inputwrap">
			 <div class="col-sm-8">
         <div class="col-sm-4">
             <div class="inputwrap">
 </div>


  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <h3><p align="center">Email &nbsp&nbsp&nbsp&nbsp<input type="text" name="email"></p></h3>
  <h3><p align="center">Password &nbsp&nbsp&nbsp&nbsp<input type="password" name="password"></p></h3>
  
<p align="center"><input type="submit" name="login-submit" value="Login"></p>
<p align="center"><a href="scriberegister.php">New user? Click here</a></p>
</form>

</body>