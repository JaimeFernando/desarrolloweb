<?php

class Autor extends Modelo{
    public $nombre_tabla = 'autor';
    public $pk = 'id_autor';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'email'=>array(),
		
		
   );
    
    public $errores = array( );
    
    private $nombre;
	private $apellido;
	private $email;
    
       
    
    function Integrante(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    //-----------------------------------------------------------------------------------
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

            
        $this->nombre = trim($valor);
        
    }





    
    
    
}

?>