<?php
$conn=new mysqli("localhost","root","","eyeandi");
if($conn->connect_error)
 {
 	 die("Connection failed". $conn->connect_error);

 }
 else
 	echo "Connection successful";
  session_start();
  

?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body background = "blue.jpg">
<br><br><br><br><br>


  <form method="post" >
 
  
<p align="center"><input type="submit" name="accept-submit" value="Accept Request"></p>
<?php
if(isset($_POST['accept-submit']))
{  $email=$_SESSION['email'];
  echo "$email";
   $status=1;
	//$sql="SELECT * from studentregister";
	 $sql="UPDATE  student_details set scribeemail='$email',status_s='$status' where status_s=0";
   $conn->query($sql);
   //if($conn->query($sql))
    //echo "updated";
 // else
   //  echo "not updated"; 	

    }

?>
</form>

</body>



