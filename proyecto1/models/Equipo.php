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

              
        $this->nombre = trim($valor);
        
    }
	  //--------------------------------------------------------------------------------------------------
    public function get_id_pais(){
        return $this->id_pais;
    } 

    public function set_id_pais($valor){
  
        $this->id_pais = trim($valor);
        
    }

	//--------------------------------------------------------------------------------------------------
    public function get_escudo(){
        return $this->escudo;
    } 

    public function set_escudo($valor){

        $er = new Er();
        
        if ( !$er->valida_imagen($valor['name']) )
		{
            $this->errores[] = "Este imagen (".$valor.") no es valida";
        }      
        $this->escudo = trim($valor['name']);
        
    }
   
}

?>