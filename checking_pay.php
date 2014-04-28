<?php
include "dbconnection.php";



$card=$_POST["card"];
$month=$_POST["month"];
$year=$_POST["year"];
$cvv=$_POST["cvv"];
$booking_id=$_POST["booking_id"];
$roomprice = $_POST["price"];



if ( $card!="" && $month!="" && $year!="" && $cvv!="")
{
	mysqli_query($con,"INSERT INTO payment (booking_id, price, card_number, card_expiry_date, card_year, cvv_number) VALUES ('$booking_id', '$roomprice', '$card', '$month', '$year', '$cvv' )");
	
	mysqli_close($con);	

	header ("Location: index.php?option=confirm&price=$roomprice");
}

else

{	
	header ("Location: index.php?option=pay");
}
?>