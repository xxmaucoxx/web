function Coordenadas()
{	alert('inicio');
	$.ajax({
		type:'post',
		url:'../controller/restauranteController.php',
		dataType:'json',
		data:"accion=buscar",
		success:function(html)
		{	
		}
	});
}