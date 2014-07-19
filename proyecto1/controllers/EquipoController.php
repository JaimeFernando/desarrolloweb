<?php
	class EquipoController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}
		public function insertaEquipo($datos,$archivos){
			/*echo "<pre>datos:";
			print_r ($datos);
			echo "</pre>";*/
			$equipo = new Equipo();
			$equipo->set_nombre($datos['nombre']);
			$equipo->set_id_pais($datos['id_pais']);
			$equipo->set_escudo($archivos['escudo']);	
			
			if(count($equipo->errores)>0){
				print_r($equipo->errores);
				die();	
			}
			else{
				$equipo->inserta($equipo->get_atributos());
				move_uploaded_file($archivos['escudo']['tmp_name'],
				"../img/escudos/".$archivos['escudo']['name']);
			}	
		}	
		

	}


?>