<?php
include "dbconnection.php";
$id=$_POST["name_id"];
$password=$_POST["password"];

if ($id!="" && $password!="")


{
	$query = "SELECT name, password FROM user WHERE name = '$id' and password = '$password'";
	$result = mysqli_query($con, $query);
	$userData = mysqli_fetch_row ($result);
	if ($userData[0]!="" && $userData[1]!="")
	{
		header ("Location: index.php?option=booking");
	}
	else
	{
		header ("Location: index.php?option=login");
	}
}

else 
{	
header ("Location: index.php?option=login");
}
?>