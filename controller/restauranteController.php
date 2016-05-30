<?php
	$accion='buscar';
	require_once("../model/resturantes.php");
	switch($accion)
	{
		case 'buscar':
			$restaurante=new restaurante(0,"");
			$j=$restaurante->buscar();
			echo $j;	
			break;
	}
?>