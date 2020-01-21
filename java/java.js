
$(window).on("load", function(){

  $(".container").css("opacity",1)
});

$(".textb input").on("focus",function mover() {
  $(this).addClass("focus");
});

$(".textb input").on("blur",function fijar() {
  if($(this).val() == "")
  $(this).removeClass("focus");
});
