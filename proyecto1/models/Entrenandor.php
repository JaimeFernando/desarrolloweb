<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk = 'id_integrante';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
		'estatura'=>array(),
		'foto'=>array(),
		'edad'=>array(),
		'id_equipo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
	private $apellido;
	private $peso;
	private $estatura;
	private $foto;
	private $edad;
	private $id_equipo;
    
       
    
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

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) )
		{
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }      
        $this->nombre = trim($valor);
        
    }





    
    
    
}

?>