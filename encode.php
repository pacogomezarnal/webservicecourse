<?php
/**
* encode
*
* Gestiona y codifica la informacion necesaria para generar el json
*
* @author Paco Gómez
* @author http://es.linkedin.com/pub/paco-gomez-arnal/7/387/807/
*
* @version 1.0
*/
	class encode{
		private $jsonObj=array("autor"=>"Paco Gomez");
		
		function __construct(){
			$this->jsonObj["fecha"]=date('d-M-Y');
		}
		
		function addInf($inf){
			array_push($this->jsonObj,$inf);
		}
		
		function encodeJSON($result="OK",$descripcion="")
		{
			$this->jsonObj["Resultado"]=$result;
			$this->jsonObj["Descripcion"]=$descripcion;
			return json_encode($this->jsonObj);
			
		}
	}
?>