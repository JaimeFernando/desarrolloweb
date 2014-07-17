<?php 
 session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header2.php');
  
  
  if(isset($_POST['nombre'])){	
	$revistaC = new RevistaController();
	$revistaC->insertaRevista($_POST,$_FILES); 
  }
  ?>
  <div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<div><h2>Registro de Revistas</h2></div><br/>		
    <form role="form" id="registro_revista" action="" method="post"  enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="portada">Portada:</label>
        <input type="file" class="form-control" id="portada" name="portada">
        </div>
        <div class="form-group">
        <label for="fecha">Fecha:</label> 
           <div class='input-group date' id='datetimepicker2' data-date-format="YYYY/MM/DD">                    
               <input type='text' class="form-control" id="fecha" name="fecha"/>
                   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                   </span>
               </div>
      	</div>    
        <div class="form-group">
        <label for="volumen">Volumen:</label>
        <input type="number" class="form-control" id="volumen" name="volumen" placeholder="Volumen">
      </div><div class="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
      </div>
      <div class="form-group">
        <label for="subtitulo">Subtitulo:</label>
        <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtitulo">
      </div>
      <div class="form-group">
        <label for="numero">N&uacute;mero:</label>
        <input type="number" class="form-control" id="numero" name="numero" placeholder="N&uacute;mero">
      </div>
      <div class="form-group">
        <label for="clave">Clave:</label>
        <input type="number" class="form-control" id="clave" name="clave" placeholder="Clave">
      </div>
      <div class="form-group">
        <label for="directorio">Directorio:</label>
        <textarea type="text" class="form-control" id="directorio" name="directorio" placeholder="Directorio"></textarea>
      </div>
      <div class="form-group">
        <label for="editorial">Editorial:</label>
        <textarea type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial"></textarea>
      </div>
      <div class="form-group">
        <label for="id_status">Status:</label>
          <select id="id_status" name="id_status" class="form-control">
            <option>Selecciona</option>
            <option>001</option>
            <option>002</option>                    
          </select>
      </div><br/>
      <button type="submit" class="btn btn-default">Enviar</button>     
    </form>
       	
</div>

  
  
  
  
  
  
  
  
  
  
  
  <?php include ('../layouts/footer2.php'); ?>
