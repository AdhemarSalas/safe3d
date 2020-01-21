<?php
$con=mysqli_connect("localhost","root","","temperaturas");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Error al conectarse a MySQL: " . mysqli_connect_error();
  }

	$sql="SELECT * FROM datos_temp";
	$result=mysqli_query($con,$sql);

	$rows=$result->fetch_all(MYSQLI_ASSOC);

	foreach ($rows as $row) {
	}
	$m2 = (explode('/',(explode('B:',$row['Datos']))[1]));
	// $m2 =
	echo($m2[0]." °C");
	// echo ($ext);

	mysqli_free_result($result);

	mysqli_close($con);
 ?>
