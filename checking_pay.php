<?php
$first=$_POST["first"];
$last=$_POST["last"];
$card=$_POST["card"];
$month=$_POST["month"];
$year=$_POST["year"];
$cvv=$_POST["cvv"];

if ($first!="" && $last!="" && $card!="" && $month!="" && $year!="" && $cvv!="")
{
	header ("Location: index.php?option=confirm");
}

else

{	
	header ("Location: index.php?option=pay");
}
?>
