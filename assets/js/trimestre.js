////////////////////////////////////////////////////////
$(document).ready(function(){
$("#HT").click(function(J) {
   J.preventDefault();
    if ($(this).hasClass('activado')){
      $("#btn-menu").show();
      // $('.menu').hide();
     // $('.btn-menu').hide();
    } else {
      //$('.menu li ul').show();
      //$('.btn-menu').show();
      //$("#menu1").show();
      //btn-menu
        $('.menu').show();
      $('.btn-menu').show();

      }
        $("#HT").click(function(){
     $('.menu').show();
  });
});
});
///////////////////////////////////////////////////
