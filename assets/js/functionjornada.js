$(function(){
  $.post('../views3/jornada.php').done(function(respuesta){
    $('#JORNADA').html(respuesta);
  });
});
