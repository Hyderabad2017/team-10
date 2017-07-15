
<html lang="en">
  <head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header class="container">

  <div class="row text-left">
  <h1 class="col-sm-8">I&EYE</h1>
  <nav class="col-sm-4 text-right"><h2>Student Details</h2></nav>
  </div>
  </header>
  </br>
<section class="container-fluid">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    <!-- Collect the nav links, forms, and other content for toggling -->
   
<?php
include "connect1.php";
 $sql= mysqli_query($con,"SELECT * FROM student_table");
 while($row = mysqli_fetch_array($sql))
 { ?>
  
   <img src = "<?php echo $row['img_path']; ?>" />
    <br/><br/><br/><br/>
   <?php
 }
 ?>
 
</body>
</html>