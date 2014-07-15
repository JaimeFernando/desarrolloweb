<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'equipo';
    public $pk = 'id_equipo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'id_pais'=>array(),
        'escudo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $id_pais;
    private $escudo;
       
    
    function Equipo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    //--------------------------------------------------------------------------------------------------
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

	//--------------------------------------------------------------------------------------------------
    public function get_foto(){
        return $this->escudo;
    } 

    public function set_foto($valor){

        $er = new Er();
        
        if ( !$er->valida_imagen($valor) )
		{
            $this->errores[] = "Este imagen (".$valor.") no es valida";
        }      
        $this->escudo = trim($valor);
        
    }
   
}

?>