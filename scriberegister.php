<?php
$conn=new mysqli("localhost","root","","iandeye");
if($conn->connect_error)
 {
 	 die("Connection failed". $conn->connect_error);
 }
 $emailErr=$email=$nameErr=$name="";
 if(isset($_POST['submit']))
 {
	 if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
	 if (empty($_POST['email'])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST['email']);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
   $email=$_POST['email'];
   $name=$_POST['name'];
   $location=$_POST['location'];
   $contact=$_POST['contact'];
   $language=$_POST['language'];
   $qualification=$_POST['qualification'];
   $password=$_POST['password'];
   $sql="INSERT into scribe(email,name,contact,location,qualification,language,password)values('$email','$name','$contact','$location','$qualification','$language','$password')";
   $res=$conn->query($sql);
 }
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
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
        #fixbg{

        background-image: url(greycubes.png);
        padding: 10px;


        }
        .col-md-5{
        color: #fff;

        }

      </style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 <body>
 <form method="post">
   <div class="container">
     <div class="jumbotron">
       <h1>Scribe Registration</h1>
     </div>
     <br></br>
       <div class="col-sm-8">
         <div class="col-sm-4">
  <select name="language">
  <option value="ENGLISH">ENGLISH</option>
  <option value="HINDI">HINDI</option>
  <option value="TELUGU">TELUGU</option>
</select>     
       </div>
	    <div class="col-sm-4">
         <br>
         <br>
         <br>
       </div>
         <div class="col-sm-8">
           <br>
             <div class="inputwrap">
         Name Of Scribe:
         <input type="text" name ="name"><?php echo $nameErr;?>
             </div>
             <br>
               <div class="inputwrap">
           <!--time format, redo-->
          Location:
          <input type="text" name ="location">
              </div>
             <br>
<<<<<<< HEAD

   <div class="inputwrap">          
  Medium<br>
  <select name="language">
  <option value="ENGLISH">ENGLISH</option>
  <option value="HINDI">HINDI</option>
  <option value="TELUGU">TELUGU</option>
</select>
</div>
<br>
<div class="inputwrap">  
=======
             <div class="inputwrap">
>>>>>>> 7b02d8b4bc5d77853e3687bdafc80bad72b9e224
          Qualification:<br>
          <input type="text" name ="qualification">
              </div>
             <br>
             <div class="inputwrap">
         Contact no:<br>
         <input type="text" name ="contact">
           
           <br>
             </div>

             <div class="inputwrap"> 
         Email: <br>
		 </div>
			   <input type="text" name ="email"><?php echo $emailErr;?>
        
		   
               <div class="inputwrap">
           <!--time format, redo-->
          Password:<br>
          <input type="password" name ="password">
            
              
		 <br>
            <input type="submit" name="submit"/>
           </div>
       </div>
     </form>
   </div>
 </body>
</html> 