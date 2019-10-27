$(function(){
  $.post('../views3/instructorr.php').done(function(respuesta){
    $('#INSTRUCTOR').html(respuesta);
  });
});
