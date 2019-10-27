$(function(){
  $.post('../views3/competencia.php').done(function(respuesta){
    $('#COMPETENCIA').html(respuesta);
  });

  $('#COMPETENCIA').change(function(){
    var comp = $(this).val();
    //lista variables
    $.post('../views3/rae.php',{ competencia : comp }).done(function(respuesta){
      $('#RAE').html(respuesta);
    });
  });
});
