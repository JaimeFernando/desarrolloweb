<?php 
  include('../../libs/security.php'); 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  
  $revistaC = new RevistaController();
  if(isset($_POST['nombre'])){		
	$revistaC->insertaRevista($_POST,$_FILES); 
  }
  ?>
  <div class="row"> 	 
	<div class="col-lg-4 col-lg-offset-4">
    <?php
		if ($revistaC->muestra_errores) {
	?>
        <div class = "alert alert-danger" >
        	<?php
				foreach ($revistaC->errores as $value){
					echo "<p>$value</p>";	
				}
			?>
        </div>
    <?php		
		}
	?> 
    
	<div><h2>Registro de Revistas</h2></div><br/>		
    <form role="form" id="registro_revista" action="" method="post"  enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $revistaC->get_nombre(); ?>"  placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="portada">Portada:</label>
        <input type="file" class="form-control" id="portada" name="portada" value="<?php echo $revistaC->get_portada(); ?>" 
        </div>
        <div class="form-group">
        <label for="fecha">Fecha:</label> 
           <div class='input-group date' id='datetimepicker2' data-date-format="YYYY/MM/DD">                    
               <input type='text' class="form-control" id="fecha" name="fecha" value="<?php echo $revistaC->get_fecha(); ?>" />
                   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                   </span>
               </div>
      	</div>    
        <div class="form-group">
        <label for="volumen">Volumen:</label>
        <input type="number" class="form-control" id="volumen" name="volumen" placeholder="Volumen" value="<?php echo $revistaC->get_volumen(); ?>" >
      </div><div class="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="<?php echo $revistaC->get_titulo(); ?>" >
      </div>
      <div class="form-group">
        <label for="subtitulo">Subtitulo:</label>
        <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtitulo" value="<?php echo $revistaC->get_subtitulo(); ?>" >
      </div>
      <div class="form-group">
        <label for="numero">N&uacute;mero:</label>
        <input type="number" class="form-control" id="numero" name="numero" placeholder="N&uacute;mero" value="<?php echo $revistaC->get_numero(); ?>" >
      </div>
      <div class="form-group">
        <label for="clave">Clave:</label>
        <input type="number" class="form-control" id="clave" name="clave" placeholder="Clave" value="<?php echo $revistaC->get_clave(); ?>"  >
      </div>
      <div class="form-group">
        <label for="directorio">Directorio:</label>
        <textarea type="text" class="form-control" id="directorio" name="directorio"  placeholder="Directorio" ><?php echo $revistaC->get_directorio(); ?></textarea>
      </div>
      <div class="form-group">
        <label for="editorial">Editorial:</label>
        <textarea type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial"><?php echo $revistaC->get_editorial(); ?></textarea>
      </div>
      <div class="form-group">
        <label>Status:</label>
          <?php echo $revistaC->getDropDown('status','is_status','id_status');?>            
      </div><br/>
      <button type="submit" class="btn btn-default">Enviar</button>     
    </form>
       	
</div>

</div>
<div class="col-lg-8">
	<?php $revistaC->show_grid(); ?>
</div>

  
  
  
  
  
  
  
  
  
  
  
  <?php include ('../layouts/footer.php'); ?>
