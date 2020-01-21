function validar() {
  var nombre,clave,cargo;
  nombre = document.getElementById("nombre").value;
  clave = document.getElementById("clave").value;
  cargo = document.getElementById("cargo").value;

  if (cargo===""){
    alert("Porfavor seleccione el cargo");
    return false;
  }

  if (nombre==="" || clave===""){
    alert("Porfavor llena todos los campos");
    return false;
  }

  else if (nombre.lenght>30){
    alert("Nombre de usuario muy extenso");
    return false;
  }

  else if (clave.lenght>30){
    alert("Contraseña muy extensa");
    return false;
  }

  else if (cargo.lenght>30){
    alert("Error cargo");
    return false;
  }

}
$(".textb input").on("focus",function mover() {
  $(this).addClass("focus");
});

$(".textb input").on("blur",function fijar() {
  if($(this).val() == "")
  $(this).removeClass("focus");
});

function salir(){
  window.location="interfaz.php";
}

$(window).on("load", function(){

  $(".container").css("opacity",1)
});
