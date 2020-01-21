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
    <title>Interfaz de Monitoreo</title>
    <link rel="stylesheet" href="css/style25.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="java/java7.js">
    </script>
    <!-- <script src="/socket.io/socket.io.js"></script> -->

  </head>
  <body onload="actualizar()">

  <div class="popup" id="popup1">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 1</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup1')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_1" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=1" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox1" name="printstate2" value="stateP" onchange="javascript:checking('checkbox1','rep1',1)" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup2">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 2</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup2')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_2" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=2" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox2" name="printstate2" value="stateP" onchange="javascript:checking('checkbox2','rep2','2')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup3">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 3</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup3')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_3" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=3" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox3" name="printstate2" value="stateP" onchange="javascript:checking('checkbox3','rep3','3')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup4">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 4</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup4')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_4" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=4" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox4" name="printstate2" value="stateP" onchange="javascript:checking('checkbox4','rep4','4')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup5">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 5</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup5')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_5" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=5" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox5" name="printstate2" value="stateP" onchange="javascript:checking('checkbox5','rep5','5')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup6">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 6</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup6')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_6" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=6" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox6" name="printstate2" value="stateP" onchange="javascript:checking('checkbox6','rep6','6')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup7">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 7</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup7')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_7" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=7" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox7" name="printstate2" value="stateP" onchange="javascript:checking('checkbox7','rep7','7')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup8">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 8</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup8')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_8" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=8" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox8" name="printstate2" value="stateP" onchange="javascript:checking('checkbox8','rep8','8')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup9">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 9</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup9')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_9" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=9" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox9" name="printstate2" value="stateP" onchange="javascript:checking('checkbox9','rep9','9')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup10">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 10</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup10')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_10" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=10" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox10" name="printstate2" value="stateP" onchange="javascript:checking('checkbox10','rep10','10')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup11">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 11</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup11')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_11" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=11" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox11" name="printstate2" value="stateP" onchange="javascript:checking('checkbox11','rep11','11')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup12">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 12</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup12')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_12" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=12" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox12" name="printstate2" value="stateP" onchange="javascript:checking('checkbox12','rep12','12')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup13">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 13</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup13')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_13" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=13" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox13" name="printstate2" value="stateP" onchange="javascript:checking('checkbox13','rep13','13')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup14">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 14</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup14')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_14" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=14" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox14" name="printstate2" value="stateP" onchange="javascript:checking('checkbox14','rep14','14')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup15">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 15</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup15')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_15" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=15" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox15" name="printstate2" value="stateP" onchange="javascript:checking('checkbox15','rep15','15')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>
  <div class="popup" id="popup16">
        <div class="Impresoras3D">
          <div id="top1">
            <div id="top1A">

            </div>
            <div id="top1B">
              <h2>Impresora 16</h2>
            </div>
            <div id="top1C">
              <a href="javascript:popupCERRAR('popup16')">
                <img src="imag/delete.svg" alt="">
              </a>
            </div>

          </div>
          <div id="mid1">
            <div id="camaraweb">
              <img class="camara" id="Webcam_16" src="imag/initial.png">
            </div>
          </div>
          <div id="mid2">
              <a href="php/impresora.php?pr=16" onclick="return ejecutar()">
            <img src="imag/on.svg">
          </a>
          </div>
          <div id="bot1">
            <div id="sup">
              <h6>Mantenimiento</h6>
            </div>
            <div id="inf">
              <div id="A">
                NO
              </div>
              <div id="B">
                  <input type="checkbox" id="checkbox16" name="printstate2" value="stateP" onchange="javascript:checking('checkbox16','rep16','16')" onclick="return ejecutarDIAG()">
              </div>
              <div id="C">
                SI
              </div>
            </div>
          </div>
      </div>
  </div>

	<div class="container">

    <form class="interfaz-form" action="validar.php" method="post">

      <h1>Interfaz de Monitoreo</h1>

      <div class="impresoras">

          <div class="linea"></div>

          <div class="contenedor">

            <div class="printer" id="printerN1">
              <div id="rep1" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>1</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum1" href="javascript:popupABRIR('popup1')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print1" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6 id="T_E_1">190.0 °C</h6><br>
                         <h6 id="T_B_1">50.0 °C</h6><br>
                         <h6>00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN2">
              <div id="rep2" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>2</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum2" href="javascript:popupABRIR('popup2')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print2" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN3">
              <div id="rep3" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>3</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum3" href="javascript:popupABRIR('popup3')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print3" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN4">
              <div id="rep4" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>4</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum4" href="javascript:popupABRIR('popup4')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print4" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN5">
              <div id="rep5" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>5</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum5" href="javascript:popupABRIR('popup5')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print5" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN6">
              <div id="rep6" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>6</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum6" href="javascript:popupABRIR('popup6')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print6" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN7">
              <div id="rep7" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>7</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum7" href="javascript:popupABRIR('popup7')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print7" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN8">
              <div id="rep8" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>8</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum8" href="javascript:popupABRIR('popup8')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print8" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN9">
              <div id="rep9" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>9</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum9" href="javascript:popupABRIR('popup9')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print9" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN10">
              <div id="rep10" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>10</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum10" href="javascript:popupABRIR('popup10')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print10" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN11">
              <div id="rep11" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>11</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum11" href="javascript:popupABRIR('popup11')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print11" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN12">
              <div id="rep12" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>12</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum12" href="javascript:popupABRIR('popup12')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print12" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN13">
              <div id="rep13" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>13</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum13" href="javascript:popupABRIR('popup13')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print13" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN14">
              <div id="rep14" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>14</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum14" href="javascript:popupABRIR('popup14')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print14" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN15">
              <div id="rep15" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>15</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum15" href="javascript:popupABRIR('popup15')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print15" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>
            <div class="printer" id="printerN16">
              <div id="rep16" class="rep">
                <img src="imag/rep.svg">
              </div>
              <div id ="header">
                   <div id="num">
                     <h3>16</h3>
                   </div>
                   <div id="estado">
                     <a id="popnum16" href="javascript:popupABRIR('popup16')">
                     <h4 id=pop>Opciones</h4>
                     <a/>
                   </div>
                   <div id="est">
                     <input type="checkbox" id="print16" name="printstate" value="print1" disabled>
                     <label for="print1"></label>
                   </div>
               </div>
              <div id ="footer">

                   <div id="imagen">
                     <img src="imag/456.png" alt="" id="encender">
                   </div>
                   <div id="datos">
                     <div id="temp_time">
                       <div id="variables">
                         <h6>Temp. Ext.</h6><br>
                         <h6>Temp. Cama</h6><br>
                         <h6>Tiempo</h6><br>
                       </div>
                       <div id="adquiridos">
                         <h6>  00.0 °C</h6><br>
                         <h6>  00.0 °C</h6><br>
                         <h6>  00:00</h6><br>
                       </div>
                     </div>
                     <div id="nombre_pieza">
                       <h5>Nombre de la pieza</h5>
                     </div>
                   </div>
                </div>
            </div>

          </div>
      </div>

      <div id="Botones">
        <input id="addUser" type="button" class="Boton" value="Agregar nuevo usuario" onclick="usuariomas()">
        <input id="removeUser" type="button" class="Boton" value="Quitar usuario" onclick="usuariomenos()">
        <input id="addPrinter" type="button" class="Boton" value="Agregar impresora" onclick="printmas()">
        <input id="removePrinter" type="button" class="Boton" value="Quitar impresora" onclick="printmenos()">
        <input id="cerrarInterfaz" type="button" class="Salida" value="Cerrar" onclick="salir()">
      </div>

</div>

  </body>
</html>
