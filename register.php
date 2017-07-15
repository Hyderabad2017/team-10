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
   $availability=$_POST['availability'];
   echo"availability =" .$x;
   $location=$_POST['location'];
   $language=$_POST['language'];
   $qualification=$_POST['qualification'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $sql="INSERT into scribes(email,password,location,language,availability,qualification)values('$email','$password','$location','$language','$availability','$qualification')";
   $res=$conn->query($sql);
if($res)
  echo" inserted";
else
  echo "not inserted";




 }
 

/*if((isset($_POST['register-submit'])))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  //echo"username :$username";
  $sql="INSERT into userstable (username,password)values('$username','$password')";
  $conn->query($sql);
  //"INSERT INTO users_db (email,name,mobile,password,role,ld) VALUES ('$email','$name','$phone','$password','$role','$ld')";
  echo" \nregistration successful";

}*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
<h1><p align="center" style="color:#FCFBFA  ;">REGISTRATION FORM</p></h1>
</head>
<body background = "blue.jpg">
<form method="post">
<br><br><br><br><br>
  <h3><p align="center" style="color:#FCFBFA;">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email"></p></h3>
  <h3><p align="center" style="color:#FCFBFA;">Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="password"></p></h3>
  
  
  <h3><p align="center" style="color:#FCFBFA;">Location &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
  <select name ="location" id="location">
  <option value="hyderabad">hyderabad</option>
  
  
</select>
</p></h3>
  <h3><p align="center" style="color:#FCFBFA;">Language&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
  <select name ="language" id="language">
  <option value="hindi">hindi</option>
  <option value="english">english</option>
  <option value="telugu">telugu</option>
  
</select>
</p></h3>
<h3><p align="center" style="color:#FCFBFA;">Availability&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
  <select name ="availability" id="availability"> 
  <option value="weekend">weekend</option>
  <option value="weekday">weekday</option>
  
  
</select>
</p></h3>
<h3><p align="center" style="color:#FCFBFA;">Qualification&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
  <select name ="qualification" id="qualification">
  <option value="Btech">Btech</option>
  <option value="Bcom">Bcom</option>
  <option value="below grade 10">below grade 10</option>
  
</select>
</p></h3>


  <p align="center"><input type="submit" name="register-submit" value="Register"></p>
  <p align="center"><a href="loginform.php">log in?</a></p>

</from>

</body>
