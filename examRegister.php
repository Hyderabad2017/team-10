<?php
$conn=new mysqli("localhost","root","","eyeandiExam");
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
   $sql="INSERT into scribes(date,start,duration,medium,day,qualification)values('$date','$start','$duration','$medium','$day','$qualification')";
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
<h1><p align="center" style="color:#FCFBFA  ;">REGISTRATION FORM</p></h1>
</head>
<body background = "blue.jpg">
<form method="post">
<br><br><br><br><br>
  <h3><p align="center" style="color:#FCFBFA;">Exam Date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="calendar" name="date"></p></h3>
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
<h3><p align="center" style="color:#FCFBFA;">Maximum Qualification Required&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  
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