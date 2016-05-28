<?php
//conexion a la base de datos
mysql_connect("127.0.0.1", "root", "") or die(mysql_error()) ;
mysql_select_db("jummp") or die(mysql_error()) ;
if ( !isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 16MB
	$nombre = $_REQUEST['nombre'];
	$descripcion = $_REQUEST['descripcion'];
	$latitud = $_REQUEST['latitud'];
	$longitud = $_REQUEST['longitud'];
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 16384;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		$directorio="../image/";
		$archivo=$_FILES['imagen']['tmp_name'];
		$nombrearchivo=$_FILES['imagen']['name'];
		 
		move_uploaded_file($archivo, $directorio."/".$nombrearchivo);
		  
		$directorio=$directorio."/".$nombrearchivo;
		$resultado = @mysql_query("INSERT INTO restaurante (nombre, descripcion, latitud, longitud, imagen) VALUES ('$nombre','$descripcion','$latitud','$longitud','$nombrearchivo')") ;

		if ($resultado){
			echo "el archivo ha sido copiado exitosamente";
		} else {
			echo "ocurrio un error al copiar el archivo.";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}
?>