$(function(){

  //lista seleccionada
  
  $.post('../views3/dia.php').done(function(respuesta){
    $('#DIA').html(respuesta);
  });
  //lista variante

})


