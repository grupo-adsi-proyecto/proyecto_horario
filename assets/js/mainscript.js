$(document).ready(function(){ 
	var altura = $('.menunumero1').offset().top;
alert

	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura){
           $('.menunumero1').addClass('menu-fixed');     
		}else{
			$('.menunumero1').removeClass('menu-fixed');     

		}
		
	});
});

$