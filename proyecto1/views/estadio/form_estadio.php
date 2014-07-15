<?php 
 session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Estadio.php');
  include ('../../controllers/EstadioController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
    
  if(isset($_POST['nombre'])){	
	$estadioC = new EstadioController();
	$estadioC->insertaEstadio($_POST); 
  }
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2>Registro de Estadios</h2></div><br/>		
    <form role="form" id="registro_estadio" action="" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>              
      <div class="form-group">
        <label for="id_ciudad">Ciudad:</label>
          <select id="id_ciudad" name="id_ciudad" class="form-control">
            <option>Selecciona</option>
            <option>001</option>
            <option>002</option>                    
          </select>
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
        	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>
