<?php
$conn=new mysqli("localhost","root","","eyeandi");
if($conn->connect_error)
 {
 	 die("Connection failed". $conn->connect_error);

 }
 else
 	echo "Connection successful";
  session_start();
  $email=$_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1><p align="center" style="color:#FCFBFA  ;"><?php echo"Welcome ".$email; ?> </p></h1>
</head>
<body background = "blue.jpg">
<br><br><br><br><br>


  <form method="post" >
 
  
<p align="center"><input type="submit" name="display-submit" value="display students"></p>
<?php
if(isset($_POST['display-submit']))
{
	//$sql="SELECT * from studentregister";
	$sql2="SELECT * from scribes s,student_details sd where s.location=sd.location and s.language=sd.language_s and s.qualvalue < sd.qualification and s.email='$email'";
	$result=$conn->query($sql2);
    while($row=$result->fetch_assoc())
    {    
    	echo "</p>".$row['email']. " ".$row['contact']. " ".$row['name']." ".$row['duration'];
    	
    	//echo"<a href='acceptrequest.php?email=".$row['email']."'>";
    	echo"<a href='acceptrequest.php'>";
    	echo "select</a>";
    	echo "<br>" ;	  
    }
}
?>
</form>

</body>



