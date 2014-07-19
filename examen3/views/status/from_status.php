<?php 
 session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Status.php');
  include ('../../controllers/StatusController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
    
  if(isset($_POST['status'])){	
	$statusC = new StatusController();
	$statusC->insertaStatus($_POST); 
  }
  ?>
  <div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<div><h2>Registro de Status</h2></div><br/>		
    <form role="form" id="registro_status" action="" method="post">
      <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" class="form-control" id="status" name="status" placeholder="Status">
      </div><br/>
      <button type="submit" class="btn btn-default">Enviar</button>     
    </form>
       	
</div>

  
  
  
  
  
  
  
  
  
  
  
  <?php include ('../layouts/footer.php'); ?>
