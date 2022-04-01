<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="htmlform";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
$fnm=$_POST['firstname'];
$lnm=$_POST['lastname'];
$eml=$_POST['email'];
$pws=$_POST['psw'];
$rept=$_POST['psw_repeat'];
$rolment=$_POST['rol'];
$dept=$_POST['depart'];
$mssa=$_POST['subject'];

 $sql="INSERT INTO userdata (fname,lname,email,passwords,	reppassword,rol,department,	messages)
 VALUES ('$fnm','$lnm','$eml','$pws','$rept','$rolment','$dept','$mssa')";
 $rs = mysqli_query($conn, $sql);
 if(!$rs)
 echo "data not inserted correctly";
 else {
     echo "one row is affected";
 }
?>