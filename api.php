<?php
require_once("encode.php");
require_once("db.php");

$jsonObject=new encode();
$db=new db();

if($db->conectar_base_datos()){
	if($inf=$db->getCorredores()){
		$jsonObject->addInf($inf);
		echo $jsonObject->encodeJSON("OK","Datos de Corredores");
	}else{
		echo $jsonObject->encodeJSON("ERROR","Error con los datos de corredor");
	}
}else{
	echo $jsonObject->encodeJSON("ERROR","Error en la base de datos");
}



?>