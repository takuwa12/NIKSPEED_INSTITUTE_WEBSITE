<?php

error_reporting();

$servername="localhost";
$username="root";
$password="";
$dbname="speed";

$con =mysqli_connect($servername, $username, $password, $dbname);
if($con){
  echo "Connection ok";
}
else{
  echo "Connection failed".mysqli_error($con);
}

$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];

$query="INSERT INTO register (username, password, firstname, lastname, contact)VALUES('$username','$password','$firstname','$lastname','$contact')";
$data = mysqli_query( $con,$query);

if ($data){
  //echo "data sent";
  header("Location: Newlogin.html");
  exit();
}
else{
  echo "data not sent";
}

?>