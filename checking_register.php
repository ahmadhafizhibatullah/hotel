<?php
include "dbconnection.php";
$name=$_POST["name"];
$email=$_POST["email"];
$ic_number=$_POST["ic_number"];
$phone_number=$_POST["phone_number"];
$password=$_POST["password"];
$con_password=$_POST["con_password"];
if ($name!="" && $email!="" && $ic_number!="" && $phone_number!="" && $password!="" && $con_password!="")
{
	mysqli_query($con,"INSERT INTO user (name, email_address, ic_number, phone_number, password) VALUES ('$name', '$email', '$ic_number', '$phone_number', '$password')");
	$user = mysqli_insert_id($con);
	mysqli_close($con);
	header ("Location: index.php?option=booking&user=$user");

}

else 
	
{	
header ("Location: index.php?option=register");
}
?>