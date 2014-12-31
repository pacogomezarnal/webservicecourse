<?php
/**
* db
*
* Gestor de Bases de datos utilizando la nueva api mejorada de php mysqli orientada a objetos
*
* @author Paco Gómez
* @author http://es.linkedin.com/pub/paco-gomez-arnal/7/387/807/
*
* @version 1.0
*/
class db
	{
		/**
		* string del servidor
		*/
		private $servidor="mysql.hostinger.es";
		/**
		* string del usuario
		*/
		private $usuario="u244213308_gedus";
		/**
		* string del password
		*/
		private $pass="paco01";
		/**
		* string de la base de datos
		*/
		private $base_datos="u244213308_mysuh";
		/**
		* descriptor a la conexión con la base de datos
		*/
		private $descriptor;
		
		/**
		* información del error o conexión habilitada
		*/
		private $info;
		
		function __construct()
		{
		}
		
		/**
		* Realiza la conexión con la base de datos devolviendo el estado de la misma
		*
		* @return conectado boolean
		*/	
		public function conectar_base_datos()
		{
			$this->descriptor = new mysqli($this->servidor, $this->usuario, $this->pass, $this->base_datos);
			if ($this->descriptor->connect_errno) {
				$this->$info="Fallo al contenctar a MySQL: (" . $this->descriptor->connect_errno . ") " . $this->descriptor->connect_error;
				return false;
			}else{
				$this->info="Conectado al servidor MySQL: " .$this->descriptor->host_info;
				return true;
			}
		}
		/**
		* Devuelve el estado de la conexión actual
		*
		* @return info string
		*/	
		public function getInfo(){
			return $this->info;
		}
		/**
		* Devuelve una tabla con todos los lugares almacenados en la tabla de la base de datos lugares
		*
		* @return str string
		*/	
		public function getCorredores(){
			$result=array();
			if($resultado = $this->descriptor->query("SELECT * FROM api_corredor")){
				for ($num_fila = 0; $num_fila < $resultado->num_rows; $num_fila++) {
					$resultado->data_seek($num_fila);
					$result[] = $resultado->fetch_assoc();
				}
			}else{
				$result=null;
			}
			return $result;
		}
		
	}
?>