<?php 
$con=mysqli_connect("localhost","root","","mydb");
//echo $con;

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  else{
  	//echo "connection sucsees";
  }
  ?>