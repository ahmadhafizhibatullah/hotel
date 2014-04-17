<?php
$id=$_POST["ID"];
$password=$_POST["password"];

if ($id!="" && $password!="")
{
	header ("Location: index.php?option=booking");
}

else 
{	
header ("Location: index.php");
}
?>