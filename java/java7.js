$(document).ready(function(){
  setInterval(
      function(){
        var xhr1 = new XMLHttpRequest();
        xhr1.open('GET','php/video.php');
        xhr1.onload = function(){
          if(xhr1.status==200){
            document.getElementById("Webcam_1").src = xhr1.responseText
          }else{
              console.log("Error de tipo "+xhr1.status);
            }
          }
          xhr1.send();


        // var url_video;
        // $(url_video).load('php/video.php');
        // document.getElementById("Webcam_1").src = $().load('php/video.php');
      },30
    );
});
/////////////

//////////////////

$(document).ready(function(){
  setInterval(
      function(){
        $('#T_E_1').load('php/tempEXT.php');
        $('#T_B_1').load('php/tempBED.php');
      },30
    );
});


$(".textb input").on("focus",function mover() {
  $(this).addClass("focus");
});

$(".textb input").on("blur",function fijar() {
  if($(this).val() == "")
  $(this).removeClass("focus");
});

$(window).on("load", function(){

  $(".container").css("opacity",1)
  $("#precarga").css("display", "none");
});

function salir(){
  window.location="php/cerrar.php";
}
function usuariomas(){
 window.location="registro.php";
}
function usuariomenos(){
window.location="php/borrar.php";
}
function printmas(){


var opcion = prompt("N° de impresora: ");
if (opcion=='' || opcion==null || opcion<=0 || opcion>16)
opcion=255;
if (opcion!=255){
console.log(opcion);
window.location="php/visible.php?b="+1+"&num2="+opcion;

}

}

function printmenos(){

  var opcion2 = prompt("N° de impresora: ");
  if (opcion2=='' || opcion2==null || opcion2<=0 || opcion2>16)
  opcion2=255;
  if (opcion2!=255){
  console.log(opcion2);
  window.location="php/visible.php?b="+0+"&num2="+opcion2;
}
}

function  actualizar(){
  var xhr = new XMLHttpRequest();
  xhr.open('GET','php/actualizar.php');
  xhr.onload = function(){
    if(xhr.status==200){
      var json = JSON.parse(xhr.responseText);

      for(var i=0;i<16;i++){
        if(json[i].visible=='1'){
          document.getElementById("printerN"+(i+1)).style.opacity=1;
        }else if(json[i].visible=='0'){
          document.getElementById("printerN"+(i+1)).style.opacity=0;
          document.getElementById("popnum"+(i+1)).href = "#";
        }
      }

       for(var k=0;k<16;k++){
        if(json[k].reparacion=='1'){
          document.getElementById("checkbox"+(k+1)).checked=true;
          document.getElementById("rep"+(k+1)).style.opacity=1;
        }else if(json[k].reparacion=='0'){
          document.getElementById("checkbox"+(k+1)).checked=false;
          document.getElementById("rep"+(k+1)).style.opacity=0;
        }
      }

      for(var l=0;l<16;l++){
        if(json[l].estado=='1'){
          document.getElementById("print"+(l+1)).checked=true;
        }else if(json[l].estado=='0'){
          document.getElementById("print"+(l+1)).checked=false;
        }
      }

    }else{
      console.log("Error de tipo "+xhr.status);
    }
  }
  xhr.send();
}

function popupABRIR(popupsource){
  document.getElementById(popupsource).style.display="block";
}

function popupCERRAR(popupsource){
  document.getElementById(popupsource).style.display="none";
}

function ejecutar(){
  var resp = confirm("Desea continuar con la operación");
  if (resp==true){
  return true;}
  else {
  return false;
  }
}

function ejecutarDIAG(){
  var resp = confirm("Desea cambiar el estado de mantenimiento");
  if (resp==true){
  return true;}
  else {
  return false;
  }
}

function checking(check7,check8,au1){
  r = document.getElementById(check7);
  if (r.checked)
  {
    window.location="php/reparacion.php?a="+1+"&num="+au1;
  }
  else
  {
    window.location="php/reparacion.php?a="+0+"&num="+au1;
  }
}

// navigator.getUserMedia = navigator.getUserMedia ||navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUsermedia || navigator.oGetUserMedia;
// if(navigator.getUserMedia){
//  navigator.getUserMedia({video: true}, handleVideo,videoError);
// }
// function handleVideo(stream){
//  // document.querySelector('#a').src = window.URL.createObjectURL(stream);
//  // document.querySelector('#a').src = window.HTMLMediaElement.srcObject(stream);
//  try {
//    document.querySelector('#a').srcObject = stream;
//  } catch (error) {
//    document.querySelector('#a').src = window.URL.createObjectURL(stream);
//  }
// }
// function videoError(e){
//  alert("erro");
// }
