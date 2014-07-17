<?php

class Indice extends Modelo{
    public $nombre_tabla = 'indice';
    public $pk = 'id_indice';
    
    
    public $atributos = array(
        'titulo'=>array(),
        'numero'=>array(),
        'id_revista'=>array(),
    );
    
    public $errores = array( );
    
    private $titulo;
	private $numero;
	private $id_revista;
    
       
    
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
    
    public function get_titulo(){
        return $this->titulo;
    } 

    public function set_titulo($valor){
  
        $this->nombre = trim($valor);
        
    }





    
    
    
}

?>