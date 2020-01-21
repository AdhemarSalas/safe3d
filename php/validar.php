<?php

$usuario=$_POST['nombre'];
$clave=$_POST['clave'];
$conexion=mysqli_connect("localhost","root","","print3d");
if (mysqli_connect_errno())
  {
  echo "Error al conectarse a MySQL: " . mysqli_connect_error();
  }
  session_start();

$consulta="SELECT * FROM trabajadores	where nombre='$usuario'and clave='$clave'";
$verificar_nombre = mysqli_query($conexion, "SELECT * FROM trabajadores WHERE nombre = '$usuario'");
$resultado=mysqli_query($conexion, $consulta);
$consulta2="SELECT cargo FROM trabajadores where nombre='$usuario'and clave='$clave'";
$cargo=mysqli_query($conexion,$consulta2);
$filas=mysqli_num_rows($resultado);
$rows=$cargo->fetch_all(MYSQLI_ASSOC);
foreach ($rows as $row) {

}

if($filas>0 && $row['cargo']=='Jefe'){
  $_SESSION['cargo'] = $row['cargo'];
  header("location:../interfaz.php"); 
}
else if($filas>0 && $row['cargo']=='Trabajador'){
  $_SESSION['cargo'] = $row['cargo'];
  header("location:../interfaz2.php");
}
else if($filas>0 && $row['cargo']=='Pasante'){
  $_SESSION['cargo'] = $row['cargo'];
  header("location:../interfaz1.php");
}
else{
  if (mysqli_num_rows($verificar_nombre) > 0){
    echo '<script> alert ("Contraseña incorrecta") </script>';
    echo '<script> window.history.go(-1) </script>';
    exit;
  }
  else{
    echo '<script> alert ("Nombre de Usuario incorrecto") </script>';
    echo '<script> window.history.go(-1) </script>';
    exit;
  }

}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
