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
       <h1>Admin Login</h1>
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

<h3><p align="center">Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email"></p></h3>
<h3><p align="center">Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password"></p></h3>

<?php
?>
<p align="center"><input type="submit" name="admin-submit" value="Login"></p>
<?php
if(isset($_POST['admin-submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT * from admin where email='$email' and password='$password'";
	$result=$conn->query($sql);
	if($result->num_rows==1)
	{
		echo"<br> Login successful";
		$newsql="select * from scribe";
		$resultsq=$conn->query($newsql);
		echo"<br>NUMBER OF REGSITERED SCRIBES = ";
		echo $resultsq->num_rows;
		echo "<br>";
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
}?>
</form>
</body>
</html>