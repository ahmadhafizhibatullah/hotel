<?php
$room_type=$_POST["room_type"];
$quantity=$_POST["quantity"];
$check_in=$_POST["check_in"];
$check_out=$_POST["check_out"];


if ($room_type!="" && $quantity!="" && $check_in!="" && $check_out!="")
{
	header ("Location: index.php?option=pay"); 
}

else 
	
{	
	header ("Location: index.php?option=booking");
}
?>