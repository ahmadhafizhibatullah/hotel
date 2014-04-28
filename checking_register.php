<?php
include "dbconnection.php";
$name=$_POST["name"];
$email=$_POST["email"];
$ic_number=$_POST["ic_number"];
$phone_number=$_POST["phone_number"];
if ($name!="" && $email!="" && $ic_number!="" && $phone_number!="")
{
	mysqli_query($con,"INSERT INTO user (name, email_address, ic_number, phone_number) VALUES ('$name', '$email', '$ic_number', '$phone_number')");
	$user = mysqli_insert_id($con);
	mysqli_close($con);
	header ("Location: index.php?option=booking&user=$user");

}

else 
	
{	
header ("Location: index.php?option=register");
}
?>