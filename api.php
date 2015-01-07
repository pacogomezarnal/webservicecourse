<?php
require_once("encode.php");
require_once("db.php");
/**
* api
*
* Api de datos de corredores
*
* @author Paco Gómez
* @author http://es.linkedin.com/pub/paco-gomez-arnal/7/387/807/
*
* @example http://edutictic.esy.es/api/cliente.php?accion=corredores Counting in action by a 3rd party.
*
* @version 1.0
*/
	//Objeto que devolveremos una vez realizada la petición
	$jsonObject=new encode();
	//Comprobamos que la petición del cliente es correcta
	if(isset($_GET["accion"])){
		if($_GET["accion"]=="corredores")
		{
			//Objeto base de datos
			$db=new db();
			
			//REcuperamos los datos de los corredores
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
		}else{
			echo $jsonObject->encodeJSON("ERROR","No se ha solicitado ninguna informacion");
		}
	}else{
		echo $jsonObject->encodeJSON("ERROR","Error en el formato de peticion");
	}





?>