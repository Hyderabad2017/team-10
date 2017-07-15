<!DOCTYPE html>
<html lang="en">
<head>
	<title>Some Title</title>
</head>
<body>
   	<h1><p align="center" style="color:#FCFBFA  ;">  LOGIN FORM </p></h1>
  	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  		<h3><p align="center" style="color:#FCFBFA  ;">Email <p></h3>
		<input type="text" name="email">
		<p align="center"><input type="submit" name="login-submit" value="Login"></p>
		<p align="center" style="color:#FCFBFA  ;"><a href="studentregister.php">New user? Click here</a></p>
	</form>
</body>
</html>