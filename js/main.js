// color navbar
$(window).scroll(function(){
  if($("#Menu").offset().top > 56){
     $("#Menu").addClass("mynavbarscroll");
  }else{
     $("#Menu").removeClass("mynavbarscroll");
  }
});
// click de la barra social
$(document).ready(function(){
$('#s-icons').click(function() {
$('.navbar-nav').toggleClass("show");
   });
});
// Boton ir Arriba
$(document).ready(function(){

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

});
// validar campo solo numeros
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;
}
