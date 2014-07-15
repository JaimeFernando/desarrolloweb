<?php
	class EstadioController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}
		public function insertaEstadio($datos){
			echo "<pre>datos:";
			print_r ($datos);
			echo "</pre>";
			$estadio = new Estadio();
			$estadio->set_nombre($datos['nombre']);
			$estadio->set_nombre($datos['id_ciudad']);
			
			
			if(count($estadio->errores)>0){
				print_r($estadio->errores);	
			}
		}	
		

	}


?>