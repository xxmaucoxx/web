$('.datet').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
function continuar(){
	$('.cont-registro').css('left','-600px');
	$('.cont-registro').css('display','none');
	$('.frm-oculto').css('display','block');
	$('.frm-oculto').css('left','0px');
	$('.frm-oculto').css('margin','0px auto 0px auto');
}
function ocultar(){
	$('.frm-oculto').css('left','-600px');
	$('.frm-oculto').css('display','none');
	$('.cont-registro').css('display','block');
	$('.cont-registro').css('left','0px');
	$('.cont-registro').css('margin','0px auto 0px auto');
}