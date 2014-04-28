<?php
include "dbconnection.php";



$room_type=$_POST["room_type"];
$quantity=$_POST["quantity"];
$check_in=$_POST["check_in"];
$check_out=$_POST["check_out"];
$timestamp_check_in=strtotime($check_in);
$timestamp_check_out=strtotime($check_out);
$user = $_POST["user_id"];

if($room_type!="" && $quantity!="" && $check_in!="" && $check_out!="")
{	
	//$room_id = "SELECT  FROM type WHERE type_id = '$room_type'";
	//$room_num = mysqli_query($con, $room_id);
	//$roomData = mysqli_fetch_row ($room_num);
	//$room_number = $roomData[3];
	//print_r (mysqli_fetch_row($room_num));
	//die();

	
	

	$price_id = "SELECT price, room_number FROM type WHERE type_id = '$room_type'";
	$result = mysqli_query($con, $price_id);
	$userData = mysqli_fetch_row ($result);
	$roomprice = $userData[0];
	$room_number = $userData[1];

	mysqli_query($con,"INSERT INTO bilik (type_id, room_number) VALUES ('$room_type', '$room_number')");
	$id=mysqli_insert_id($con);
    //print_r(mysqli_fetch_row($result));
   // die();
	
	
	$a=mysqli_query($con,"INSERT INTO booking (user_id, date_start, date_end, blk_id) VALUES ('$user', '$timestamp_check_in', '$timestamp_check_out', '$id')");
	$booking_id = mysqli_insert_id($con);

	mysqli_close($con);

	header ("Location: index.php?option=pay&book=$booking_id&price=$roomprice&room=$room_number"); 
}

else 
	
{	
	header ("Location: index.php?option=booking");
}
?>