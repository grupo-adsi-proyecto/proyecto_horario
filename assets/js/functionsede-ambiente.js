$(function(){
  $.post('../views3/sede.php').done(function(respuesta){
    $('#SEDE').html(respuesta);
  });
  $('#SEDE').change(function(){
    var Cod_s = $(this).val();
    $.post('../views3/ambiente.php',{ sede : Cod_s }).done(function(respuesta){
      $('#AMBIENTE').html(respuesta);
    });
  });
});
