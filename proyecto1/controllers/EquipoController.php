<?php
	class EquipoController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}
		public function insertaEquipo($datos){
			echo "<pre>datos:";
			print_r ($datos);
			echo "</pre>";
			$equipo = new Equipo();
			$equipo->set_nombre($datos['nombre']);
			$equipo->set_nombre($datos['id_pais']);
			$equipo->set_nombre($datos['escudo']);	
			
			if(count($equipo->errores)>0){
				print_r($equipo->errores);	
			}
		}	
		

	}


?>