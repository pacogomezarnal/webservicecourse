<?php
	class encode{
		private $jsonObj=array("autor"=>"Paco Gomez");
		
		function __construct(){
			$this->jsonObj["fecha"]=date('d-M-Y');
		}
		
		function encodeJSON($result="OK")
		{
			$this->jsonObj["Resultado"]=$result;
			return json_encode($this->jsonObj);
		}
	}
?>