<?php
require_once("conexion.php");
class restaurante
{	
	
	public $mc; 
	
	function __construct()
	{	
		
		$this->mc=new conexion();
	}
	function buscar()
	{	$sql="SELECT * FROM restaurante";
		$this->mc->conectar();
		$res=$this->mc->conex->query($sql);
		$j='';
		if($res->num_rows>0)
		{	while($r=$res->fetch_array())
				$a[]=$r;
			$j=json_encode($a);
		}
		return $j;
	}
}
?> 