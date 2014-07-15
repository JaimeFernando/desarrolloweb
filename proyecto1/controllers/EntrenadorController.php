<?php
	class EntrenadorController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}
		public function insertaEntrenador($datos){
			echo "<pre>datos:";
			print_r ($datos);
			echo "</pre>";
			$entrenador = new Entrenador();
			$entrenador->set_nombre($datos['id_pais']);
			
			
			if(count($entrenador->errores)>0){
				print_r($entrenador->errores);	
			}
		}	
		

	}


?>