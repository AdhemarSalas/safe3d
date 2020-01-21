  <?php

$conexion=mysqli_connect("localhost","root","","print3d");
if (mysqli_connect_errno())
  {
  echo "Error al conectarse a MySQL: " . mysqli_connect_error();
  }
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$cargo = $_POST["cargo"];

$insertar = "INSERT INTO trabajadores(nombre,clave,cargo) VALUES('$nombre','$clave','$cargo')";

$verificar_nombre = mysqli_query($conexion, "SELECT * FROM trabajadores WHERE nombre = '$nombre'");
if (mysqli_num_rows($verificar_nombre) > 0){
  echo '<script> alert ("El nombre ya existe, cambielo e intente nuevamente") </script>';
  echo '<script> window.history.go(-1) </script>';
  exit;
}
$resultado = mysqli_query($conexion,$insertar);

if(!$resultado){
  echo '<script> alert ("Error en el registro, cambie los datos e intente nuevamente") </script>';
  echo '<script> window.location.href="../registro.php" </script>';

  exit;

}else{
  echo '<script> alert ("Registro completado") </script>';
  echo '<script> window.location.href="../registro.php" </script>';

  exit;
}
mysqli_free_result($resultado);

mysqli_close($conexion);
?>
