<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'entrenandor';
    public $pk = 'id_entrenador';
    
    
    public $atributos = array(
		'id_pais'=>array(),
    );
    
    public $errores = array( );
    
	private $id_pais;
       
    function Entrenador(){
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

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) )
		{
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }      
        $this->nombre = trim($valor);
        
    }





    
    
    
}

?>