<?php 
  define('BASEURL','http://localhost/desarrolloweb/examen3');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Revista</title>

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
   


    <link href="../css/carousel.css" rel="stylesheet">
  </head>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="../../index.php">Revista</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="../site/inicio.php">Inicio</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrar <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a class="fancybox" data-fancybox-type="iframe" href="../articulo/from_articulo.php">Articulo</a></li>
                    <li><a class="fancybox" data-fancybox-type="iframe" href="../autor/from_autor.php">Autor</a></li>
                   <li><a class="fancybox" data-fancybox-type="iframe" href="../indice/from_indice.php">Indice</a></li>
                    <li><a class="fancybox" data-fancybox-type="iframe" href="../revista/form_revista.php">Revista</a></li>
                    <li><a class="fancybox" data-fancybox-type="iframe" href="../status/from_status.php">Status</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="../img/campeon_Alemania.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>¡¡¡Alemania Campeon!!!</h1>
              <p>Alemania es ahora el Campeon Mundialista de Futbol...!!!<br/>
              		Felicidades Muchachos..!!!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">