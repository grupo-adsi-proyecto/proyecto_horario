

/* $(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
}); */

$("#rol").click(function(){
var opcion =  $(this)[0].value;
//alert(opcion);
//logica para el administrador y el coordinador
if(opcion==1 || opcion==2){
  $("#inputDocumento").show();
  $("#inputPassword").show();
  $("#inputFicha").hide();
}
//logica para el instructor
if(opcion==3){
  $("#inputDocumento").show();
  $("#inputPassword").hide();
  $("#inputFicha").hide();
}
//logica para el aprendiz
if(opcion==4){

  $("#inputDocumento").hide();
  $("#inputPassword").hide();
  $("#inputFicha").show();
}

});

