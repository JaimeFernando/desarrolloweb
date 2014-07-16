<?php 
  session_start();
  include ('../layouts/header.php');
  ?>
  <div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<div><h2>Registro de Indices</h2></div><br/>		
    <form role="form" id="registro_indice" action="" method="post">
      <div class="form-group">
        <label for="titulo">Titulo:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
      </div>
      <div class="form-group">
        <label for="numero">N&uacute;mero:</label>
        <input type="number" class="form-control" id="numero" name="numero" placeholder="N&uacute;mero">
      </div>              
      <div class="form-group">
        <label for="id_revista">Revista:</label>
          <select id="id_revista" name="id_revista" class="form-control">
            <option>Selecciona</option>
            <option>001</option>
            <option>002</option>                    
          </select>
      </div><br/>
      <button type="submit" class="btn btn-default">Enviar</button>     
    </form>
       	
</div>

  
  
  
  
  
  
  
  
  
  
  
  <?php include ('../layouts/footer.php'); ?>
