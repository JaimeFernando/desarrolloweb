<?php 
  session_start();
  include ('../layouts/header.php');
  ?>
  <div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<div><h2>Registro de Articulos</h2></div><br/>		
    <form role="form" id="registro_articulo" action="" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="resumen">Resumen:</label>
        <textarea type="text" class="form-control" id="resumen" name="resumen" placeholder="Resumen"></textarea>
      </div><div class="form-group">
        <label for="abstract">Abstract:</label>
        <textarea type="text" class="form-control" id="abstract" name="abstract" placeholder="Abstract"></textarea>
      </div><div class="form-group">
        <label for="introducion">Introducci&oacute;n:</label>
        <textarea type="text" class="form-control" id="introduccion" name="introduccion" placeholder="Introduccion"></textarea>
      </div>
      <div class="form-group">
        <label for="metodologia">Metodologia:</label>
        <textarea type="text" class="form-control" id="metodologia" name="metodologia" placeholder="Metodologia"></textarea>
      </div>
      <div class="form-group">
        <label for="contenido">Contenido:</label>
        <textarea type="text" class="form-control" id="contenido" name="contenido" placeholder="Contenido"></textarea>
      </div>                           
      <div class="form-group">
        <label for="fecha_creacion">Fecha de Creaci&oacute;n</label> 
           <div class='input-group date' id='datetimepicker1'>                    
               <input type='text' class="form-control" />
                   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                   </span>
               </div>
      </div>   
      <div class="form-group">
        <label for="archivo_pdf">PDF:</label>
        <input type="file" class="form-control" id="archivo_pdf" name="archivo_pdf">
      </div>              
      <div class="form-group">
        <label for="id_status">Status:</label>
          <select id="id_status" name="id_status" class="form-control">
            <option>Selecciona</option>
            <option>001</option>
            <option>002</option>                    
          </select>
      </div>         
      <div class="form-group">
        <label for="conclusiones">Conclusiones:</label>
        <textarea type="text" class="form-control" id="conclusiones" name="conclusiones" placeholder="Conclusiones"></textarea>
      </div>
      <div class="form-group">
        <label for="agradecimientos">Agradecimientos:</label>
        <textarea type="text" class="form-control" id="agradecimientos" name="agradecimientos" placeholder="Agradecimientos"></textarea>
      </div>
      <div class="form-group">
        <label for="referencias">Referencias:</label>
        <textarea type="text" class="form-control" id="referencias" name="referencias" placeholder="Referencias"></textarea>
      </div><br/>
      <button type="submit" class="btn btn-default">Enviar</button>     
    </form>
       	
</div>

  
  
  
  
  
  
  
  
  
  
  
  <?php include ('../layouts/footer.php'); ?>
