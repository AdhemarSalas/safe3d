<?php
$con=mysqli_connect("localhost","root","","video_stream");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Error al conectarse a MySQL: " . mysqli_connect_error();
  }

	$sql="SELECT * FROM data";
	$result=mysqli_query($con,$sql);

	$rows=$result->fetch_all(MYSQLI_ASSOC);

	foreach ($rows as $row) {
	}
	echo($row['video_data']);
 ?>
