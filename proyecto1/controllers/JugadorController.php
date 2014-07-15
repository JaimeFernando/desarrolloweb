<?php
	class JugadorController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}
		public function insertaJugador($datos){
			echo "<pre>datos:";
			print_r ($datos);
			echo "</pre>";
			$jugador = new Jugador();
			$jugador->set_nombre($datos['numero']);
			$jugador->set_nombre($datos['id_integrante']);
			$jugador->set_nombre($datos['id_posicion']);	
			
			if(count($jugador->errores)>0){
				print_r($jugador->errores);	
			}
		}	
		

	}


?>