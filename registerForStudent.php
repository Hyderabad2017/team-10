<?php
$conn=new mysqli("localhost","root","","iandeye");
if($conn->connect_error)
{
 	 die("Connection failed". $conn->connect_error);
}
else
 	echo "Connection"." "."successful";
if(isset($_POST['register-submit']))
 {
   $date=$_POST['date'];
  // echo"availability =" .$x;
   $start=$_POST['start'];
   $duration=$_POST['duration'];
   $medium=$_POST['medium'];
   $day=$_POST['day'];
   $qualification=$_POST['qualification'];
   $email=$_POST['email'];
   $name=$_POST['name'];
   $contact=$_POST['contact'];
   $location=$_POST['location'];
   $sql="INSERT into student(location,name,contact,email,date,start,duration,medium,day,qualification)values('$location','$name','$contact',$email','$date','$start','$duration','$medium','$day','$qualification')";
   $res=$conn->query($sql);
if($res)
  echo" inserted";
else
  echo "not inserted";
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<h1><p align="center" style="color:#FCFBFA  ;">EXAM SELECTION</p></h1>
</head>
<body background = "blue.jpg">
<form method="post">
<br><br><br><br><br>
  <h3><p align="center" style="color:#FCFBFA;">Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="email"></p></h3>
  <h3><p align="center" style="color:#FCFBFA;">Student Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="name"></p></h3>
  <h3><p align="center" style="color:#FCFBFA;">Contact &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="contact"></p></h3>
  <h3><p align="center" style="color:#FCFBFA;">Location &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="location"></p></h3>

  <h3><p align="center" style="color:#FCFBFA;">Exam Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="date" name="date"></p></h3>
  <h3><p align="center" style="color:#FCFBFA;">Start Time&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="start"></p></h3>
  
  
  <h3><p align="center" style="color:#FCFBFA;">Duration &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
  <select name ="duration" id="duration">
  <option value="1">1 HOUR</option>
  <option value="2">2 HOURS</option>
  <option value="3">3 HOURS</option>
</select>
</p></h3>
  <h3><p align="center" style="color:#FCFBFA;">Language&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
  <select name ="medium" id="medium">
  <option value="hindi">hindi</option>
  <option value="english">english</option>
  <option value="telugu">telugu</option>  
</select>
</p></h3>
<h3><p align="center" style="color:#FCFBFA;">Exam Day&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
  <select name ="day" id="day"> 
  <option value="weekend">weekend</option>
  <option value="weekday">weekday</option>
  
  
</select>
</p></h3>
<h3><p align="center" style="color:#FCFBFA;"> Qualification&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
  <select name ="qualification" id="qualification">
  <option value="Btech">Btech</option>
  <option value="Bcom">Bcom</option>
    <option value="12">12th</option>
  <option value="11">11th</option>
  <option value="below grade 10">below grade 10</option>
  
</select>
</p></h3>


  <p align="center"><input type="submit" name="register-submit" value="Register"></p>
  <p align="center"><a href="loginform.php">log in?</a></p>

</form>
</body>