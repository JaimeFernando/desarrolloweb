<?php 
 session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
    
  if(isset($_POST['nombre'])){	
	$autorC = new AutorController();
	$autorC->insertaAutor($_POST); 
  }
  ?>
  <div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<div><h2>Registro de Autores</h2></div><br/>		
    <form role="form" id="registro_autor" action="" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
        </div><div class="form-group">
        <label for="abstract">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      </div><br/>
      <button type="submit" class="btn btn-default">Enviar</button>     
    </form>
       	
</div>

  
  
  
  
  
  
  
  
  
  
  
  <?php include ('../layouts/footer.php'); ?>
