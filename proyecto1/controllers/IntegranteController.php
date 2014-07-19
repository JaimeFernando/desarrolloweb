<?php
	class IntegranteController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}
		public function insertaIntegrante($datos,$archivos){
			/*echo "<pre>datos:";
			print_r ($datos);
			echo "</pre>";*/
			$integrante = new Integrante();
			$integrante->set_nombre($datos['nombre']);
			$integrante->set_apellido($datos['apellido']);
			$integrante->set_peso($datos['peso']);	
			$integrante->set_estatura($datos['estatura']);
			$integrante->set_foto($archivos['foto']);
			$integrante->set_edad($datos['edad']);
			$integrante->set_id_equipo($datos['id_equipo']);	
			
			if(count($integrante->errores)>0){
				print_r($integrante->errores);
				die();	
			}
			else{
				$integrante->inserta($integrante->get_atributos());
				move_uploaded_file($archivos['foto']['tmp_name'],
				"../img/fotointegrantes/".$archivos['foto']['name']);
			}
		}	
		

	}


?>