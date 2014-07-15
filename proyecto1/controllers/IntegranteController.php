<?php
	class IntegranteController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}
		public function insertaIntegrante($datos){
			echo "<pre>datos:";
			print_r ($datos);
			echo "</pre>";
			$integrante = new Integrante();
			$integrante->set_nombre($datos['nombre']);
			$integrante->set_nombre($datos['apellido']);
			$integrante->set_nombre($datos['peso']);	
			$integrante->set_nombre($datos['estatura']);
			$integrante->set_nombre($datos['foto']);
			$integrante->set_nombre($datos['edad']);
			$integrante->set_nombre($datos['id_equipo']);	
			
			if(count($integrante->errores)>0){
				print_r($integrante->errores);	
			}
		}	
		

	}


?>