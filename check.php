<?php
$conn=new mysqli("localhost","root","","iandeye");
if($conn->connect_error)
 {
 	 die("Connection failed". $conn->connect_error);
 }
$choices = array();
if(isset($_POST['submit']))
{  
$sql="select * from student";
$res=$conn->query($sql);


    while ($row = $res->fetch_assoc() )
    {
        echo "<input type='checkbox' name='products[]' value='".$row['name']."'>"
        .$row['name'];
    }
	foreach ($choices as $value) {
    echo "$value <br>";
}
}
?>
</html>
<head>
</head>
<body>
<form>
<input type="submit" name="submit">
</form>
</body>
</html>