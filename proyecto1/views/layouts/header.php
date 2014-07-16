<?php 
  define('BASEURL','http://localhost/desarrolloweb/proyecto1');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo Bootstrap</title>
    
	<link href="../css/miestilo.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--BoostrapValidator-->
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
	<!--Boostrap-Datetimepicker-->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/pygments-manni.css" />
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css" type="text/css" media="screen"/>
    
    
  </head>
  <body>
  	<!--Natvar--> 	
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>        
      </button>
      <a class="navbar-brand" href="../../index.php">Fifa.com</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../equipo/form_equipo.php">Equipo</a></li>
            <li><a href="../integrante/form_integrante.php">Integrante</a></li>
            <li><a href="../posicion/form_posicion.php">Posici&oacute;n</a></li>
            <li><a href="../estadio/form_estadio.php">Estadio</a></li>
            <li><a href="../pais/form_pais.php">Pais</a></li>
            <li><a href="../continente/form_continente.php">Continente</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!--Natvar-->
  
  	<div class="container">
    	<div class="row" align="center">
			<div class="col-lg-10 col-lg-offset-1">
            	<img src="../img/copa.png">
            	<img src="../img/image2.png">
            </div>        
        </div> <!--Renglon-->    