<?php
$name=$_POST["name"];
$email=$_POST["email"];
$ic_number=$_POST["ic_number"];
$phone_number=$_POST["phone_number"];
if ($name!="" && $email!="" && $ic_number!="" && $phone_number!="")
{
	header ("Location: index.php?option=booking");
}

else 
	
{	
header ("Location: index.php?option=register");
}
?>