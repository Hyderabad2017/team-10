<?php
$conn=new mysqli("localhost","root","","iandeye");
if($conn->connect_error)
{
 	 die("Connection failed". $conn->connect_error);
}
else
 	echo "Connection"." "."successful";
if(isset($_POST['admin-submit']))
{
	$email=$_POST['email'];
	$sql="SELECT * from admin where email='$email'";
	$result=$conn->query($sql);
	if($result->num_rows==1)
	{
		echo"<br> Login successful";
		$newsql="select count(*) from scribe";
		$result=$conn->query($newsql);
		echo"<br>NUMBER OF REGSITERED SCRIBES = ";
		echo $result->num_rows;
		
		$newsql1="select * from scribe";
		echo"<br>SCRIBE REGISTERS";
		echo"<br>";
		echo "<table border='4' class='stats' cellspacing='0'><tr><th>EMAIL</th> <th>NAME</th><th>CONTACT</th><th>location</th><th>qualification</th><th>language</th></tr>";
		echo"<br>";
		$results=$conn->query($newsql1);
		while ($row = $results->fetch_assoc()) {
			echo "<tr><td>".$row['email']."</td><td>".$row['name']."</td><td>".$row['contact']."</td><td>".$row['location']."</td><td>".$row['qualification']."</td><td>".$row['language']."</td></tr>";
			echo "<br>";
			}
		echo"</table>";
		$newsql="select * from student";
		echo "<br><br>STUDENT REGISTERS";
		echo "<table border='4' class='stats' cellspacing='0'><tr><th>EMAIL</th> <th>NAME</th><th>CONTACT</th><th>exam</th><th>qualification</th><th>location</th></tr>";
		$results=$conn->query($newsql);
		while ($row = $results->fetch_assoc()) {
			echo "<tr><td>".$row['email']."</td><td>".$row['name']."</td><td>".$row['contact']."</td><td>".$row['exam']."</td><td>".$row['qualification']."</td><td>".$row['location']."</td></tr>";
			echo "<br>";
		
		}
	}
	else{
		echo "<br>NOT AUTHORISED AS ADMIN";
		
	}	
}

?>
<!DOCTYPE html>
<head>
<html lang="en">
<head>

<h1><p align="center" style="color:#FCFBFA  ;">ADMIN LOGIN</p></h1>
</head>
<form method="post">
<br><br><br><br><br>
<h3><p align="center" style="color:#FCFBFA;">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email"></p></h3>

<p align="center"><input type="submit" name="admin-submit" value="Register"></p>
</form>
</body>
</html>