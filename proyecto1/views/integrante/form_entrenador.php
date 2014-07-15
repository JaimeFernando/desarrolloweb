<?php 
  session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Entrenador.php');
  include ('../../controllers/EntrenadorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
    
  if(isset($_POST['nombre'])){	
	$entrenadorC = new EntrenadorController();
	$entrenadorC->insertaEntrenador($_POST); 
  }
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2>Registro de Entrenandores</h2></div><br/>		
    <form role="form" id="registro_entrenador" action="" method="post">                   
      <div class="form-group">
        <label for="id_pais">Pais:</label>
          <select id="id_pais" name="id_pais" class="form-control">
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
