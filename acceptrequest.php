<?php
$conn=new mysqli("localhost","root","","iandeye");
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
       <h1>Accept Student</h1>
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
 <input type="submit" name="accept-submit" value="Accept Request">
 </div>
<?php
if(isset($_POST['accept-submit']))
{  $email=$_SESSION['email'];
  echo "$email";
   $status=1;
	//$sql="SELECT * from studentregister";
	 $sql="UPDATE  student set scribeemail='$email',status='$status' where status=0";
   $conn->query($sql);
   //if($conn->query($sql))
    //echo "updated";
 // else
   //  echo "not updated"; 	
    }
?>
</form>

</body>
