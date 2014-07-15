<?php 
  session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Posicion.php');
  include ('../../controllers/PosicionController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
    
  if(isset($_POST['nombre'])){	
	$posicionC = new PosicionController();
	$posicionC->insertaPosicion($_POST); 
  }
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2>Registro de Posiciones</h2></div><br/>		
    <form role="form" id="registro_posicion" action="" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="abreviatura">Abreviatura:</label>
        <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="abreviatura">
      </div>             
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
        	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>
