<?php

class Articulo extends Modelo{
    public $nombre_tabla = 'articulo';
    public $pk = 'id_articulo';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'resumen'=>array(),
        'abstract'=>array(),
		'introduccion'=>array(),
		'metodologia'=>array(),
		'contenido'=>array(),
		'fecha_creacion'=>array(),
        'archivo_pdf'=>array(),
		'id_status'=>array(),
		'conclusiones'=>array(),
		'agradecimientos'=>array(),
		'referencias'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
	private $resumen;
	private $abstract;
	private $introduccion;
	private $metodologia;
	private $contenido;
	private $fecha_creacion;
	private $archivo_pdf;
	private $id_status;
	private $conclusiones;
	private $agradecimientos;
	private $referencias;
    
       
    
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
	    //-----------------------------------------------------------------------------------
    
    public function get_resumen(){
        return $this->resumen;
    } 

    public function set_resumen($valor){

            
        $this->resumen = trim($valor);
        
    }
	
    //-----------------------------------------------------------------------------------
    
    public function get_abstract(){
        return $this->abstract;
    } 

    public function set_abstract($valor){

             
        $this->abstract = trim($valor);
        
    }
	
	    //-----------------------------------------------------------------------------------
    
    public function get_introduccion(){
        return $this->introduccion;
    } 

    public function set_introduccion($valor){

             
        $this->introduccion = trim($valor);
        
    }

	    //-----------------------------------------------------------------------------------
    
    public function get_metodologia(){
        return $this->metodologia;
    } 

    public function set_metodologia($valor){

             
        $this->metodologia = trim($valor);
        
    }

	    //-----------------------------------------------------------------------------------
    
    public function get_contenido(){
        return $this->contenido;
    } 

    public function set_contenido($valor){

             
        $this->contenido = trim($valor);
        
    }
	
		    //-----------------------------------------------------------------------------------
    
    public function get_fecha_creacion(){
        return $this->contenido;
    } 

    public function set_fecha_creacion($valor){

             
        $this->fecha_creacion = trim($valor);
        
    }

		    //-----------------------------------------------------------------------------------
    
    public function get_archivo_pdf(){
        return $this->contenido;
    } 

    public function set_archivo_pdf($valor){

             
        $this->archivo_pdf = trim($valor);
        
    }
	
			    //-----------------------------------------------------------------------------------
    
    public function get_id_status(){
        return $this->contenido;
    } 

    public function set_id_status($valor){

             
        $this->id_status = trim($valor);
        
    }
    
				    //-----------------------------------------------------------------------------------
    
    public function get_conclusiones(){
        return $this->conclusiones;
    } 

    public function set_conclusiones($valor){

             
        $this->conclusiones = trim($valor);
        
    }
	
				    //-----------------------------------------------------------------------------------
    
    public function get_agradecimientos(){
        return $this->agradecimientos;
    } 

    public function set_agradecimientos($valor){

             
        $this->agradecimientos = trim($valor);
        
    }
    
				    //-----------------------------------------------------------------------------------
    
    public function get_referencias(){
        return $this->referencias;
    } 

    public function set_referencias($valor){

             
        $this->referencias = trim($valor);
        
    }
    
}

?>