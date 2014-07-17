<?php
	class StatusController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}
		public function insertaStatus($datos){
			echo "<pre>datos:";
			print_r ($datos);
			echo "</pre>";
			$status = new Status();
			$status->set_nombre($datos['status']);	
			
			
			if(count($status->errores)>0){
				print_r($status->errores);
				die();	
			}
			$status->inserta($status->get_atributos());
		}	
		

	}


?>