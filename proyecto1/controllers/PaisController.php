<?php
	class PaisController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}
		public function insertaPais($datos,$archivos){
			/*echo "<pre>datos:";
			print_r ($datos);
			echo "</pre>";*/
			$pais = new Pais();
			$pais->set_nombre($datos['nombre']);
			$pais->set_bandera($archivos['bandera']);
			$pais->set_continente($datos['id_continente']);	
			
			if(count($pais->errores)>0){
				print_r($pais->errores);
				die();	
			}
			else{
				$pais->inserta($pais->get_atributos());
				move_uploaded_file($archivos['bandera']['tmp_name'],
				"../img/banderas/".$archivos['bandera']['name']);
				
				
			}	
			
		}	
		

	}


?>