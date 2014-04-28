<?php


$con=mysqli_connect("example.com","peter","abc123","my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Persons");

while($row = mysqli_fetch_array($result)) {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br>";
}

mysqli_close($con);
?>
