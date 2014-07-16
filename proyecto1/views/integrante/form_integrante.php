<?php 
  session_start();
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  include ('../../controllers/IntegranteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
    
  if(isset($_POST['nombre'])){	
	$integranteC = new IntegranteController();
	$integranteC->insertaIntegrante($_POST); 
  }
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2>Registro de Integrantes</h2></div><br/>		
    <form role="form" id="registro_integrante" action="" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido">
      </div><div class="form-group">
        <label for="abstract">Peso:</label>
        <input type="number" class="form-control" id="peso" name="peso" placeholder="Peso">
      </div><div class="form-group">
        <label for="estatura">Estatura:</label>
        <input type="number" class="form-control" id="estatura" name="estatura" placeholder="Estatura">
      </div>                           
      <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" class="form-control" name="foto" id="foto">
      </div>
      <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad">
      </div>              
      <div class="form-group">
        <label for="id_equipo">Equipo:</label>
          <select id="id_equipo" name="id_equipo" class="form-control">
            <option>Selecciona</option>
            <option>001</option>
            <option>002</option>                    
          </select>
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>     
    </form>
   	<div align="center">
        <p><a class="fancybox" data-fancybox-type="iframe" href="form_entrenador.php" role="button">Entrenador</a></p> 
        <p><a class="fancybox" data-fancybox-type="iframe" href="form_jugador.php" role="button">Jugador</a></p> 
    </div>  
       	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>
