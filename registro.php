<?php
  session_start();
  if($_SESSION['cargo']==null || $_SESSION['cargo']=='' ){
    header("location:index.php");
  }
  if($_SESSION['cargo']=='Trabajador' || $_SESSION['cargo']=='Pasante'){
    header("location:index.php");
  }
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

  </head>
  <body>
    <!-- <img id="precarga" src="imag/load.svg" alt=""> -->



<form class="form-register" action="php/registrar.php" method="post" onsubmit="return validar();">



<div class="container">
      <h1>Registro</h1>

      <div class="textb">
        <input type="text" id="nombre" name="nombre" autocomplete="off" required>
        <span data-placeholder="Usuario"></span>

      </div>

        <div class="textb">
          <input type="password" id="clave" name="clave" autocomplete="off" required>
          <span data-placeholder="Contraseña"></span>

        </div>
<div class="Titulo2"><h3>Cargo</h3><br></div>

        <div class="container" >

         <ul class="list">
          <li class="list__item">
           <input type="radio" class="radio-btn" name="cargo" value="Jefe" id="Jefe" required />
           <label for="Jefe" class="label">Jefe</label>
          </li>
          <li class="list__item">
           <input type="radio" class="radio-btn" name="cargo" value="Trabajador" id="Trabajador" required/>
           <label for="Trabajador" class="label">Trabajador</label>
          </li>
          <li class="list__item">
           <input type="radio" class="radio-btn" name="cargo" value="Pasante" id="Pasante" required />
           <label for="Pasante" class="label">Pasante</label>
          </li>
         </ul>
        </div>

          <input type="submit" class="Ingresar" value="Registrar">
    </form>

<a href="interfaz.php">
<div class="box">
  <span></span>
  <span></span>
</div>
</a>

<script src="java/java1.js">
</script>

  </body>
</html>
