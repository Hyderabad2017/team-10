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
<h1><p align="center" style="color:#FCFBFA  ;">STUDENT STATUS</p></h1>
</head>
<form method="post">
<br><br><br><br><br>


<?php
session_start();
$email=$_SESSION['email'];

	

	$sql="SELECT * from student where email='$email' and status=1 ";
	$result=$conn->query($sql);
	if($result->num_rows==1)
	{
		echo"<br> Login successful";		
		$newsql="select * from student where email='$email' and status=1";
		$result=$conn->query($newsql);
		$row=$result->fetch_assoc();
		$scribemail=$row['scribeemail'];
		$newsql1="select * from scribe where email='$scribemail'";
		echo"<br>SCRIBE ACCEPTED";
		echo"<br>";
		echo"<br>";
		echo "&nbsp"."&nbsp";
		echo "<table border='4' class='stats' cellspacing='0'><tr><th>EMAIL</th> <th>NAME</th><th>CONTACT</th><th>location</th><th>qualification</th><th>language</th></tr>";
		$results=$conn->query($newsql1);
		while ($row = $results->fetch_assoc()) {
			echo "<tr><td>".$row['email']."</td><td>".$row['name']."</td><td>".$row['contact']."</td><td>".$row['location']."</td><td>".$row['qualification']."</td><td>".$row['language']."</td></tr>";
			echo "<br>";
			}
		echo"</table>";
	}
	else{
		echo "<br>NOT SELECTED";
	}

?>