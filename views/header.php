<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo RUTA; ?>/images/icondv.ico.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>/css/estilos.css">
	<meta charset="utf-8">
	<title>¿Dónde viene?</title>
	<script type="text/javascript" src="<?php echo RUTA; ?>/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?php echo RUTA; ?>/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<header>
			<nav class="bg-dark fixed-top">
				<nav class="navbar navbar-expand-lg navbar-light bg-dark">
				  <a href="<?php echo RUTA; ?>"><img class="izquierda" src="<?php echo RUTA; ?>/images/title02.png" style="width: 120px;"></a>
				  <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">

				      <li class="nav-item dropdown" style="color: #ffffff;">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">
				          Productos
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="<?php echo RUTA; ?>/views/prod-dv-movil.php">¿Dónde viene? móvil</a>
				          <a class="dropdown-item" href="<?php echo RUTA; ?>/views/prod-dv-web.php">¿Dónde viene? web</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="<?php echo RUTA; ?>/views/prod-ben-com.php">Beneficios para la comunidad</a>
				        </div>
				      </li>

				      <li class="nav-item dropdown" style="color: #ffffff;">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">
				          Compañia
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="<?php echo RUTA; ?>/views/cia-qui-som.php">¿Quienes somos?</a>
				          <a class="dropdown-item" href="<?php echo RUTA; ?>/views/cia-op-lab.php">Oportunidades laborales</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="<?php echo RUTA; ?>/views/cia-lin-bus.php">Lineas de buses dentro de la app</a>
				        </div>
				      </li>

				    </ul>
				    <div>
				    	<form class="form-inline my-2 my-lg-0" name="busqueda" action="<?php echo RUTA; ?>/buscar.php" method="get">
					      <input class="form-control mr-sm-2" name="busqueda" placeholder="Escribe aqui lo que buscas" aria-label="Search">
					      <button class="btn btn-secondary my-2 my-sm-0 fa fa-search" type="submit"> Buscar</button>
					    </form>
				    </div>
				  </div>
				</nav>
			</nav>
		</header>
	</div>
