<?php
/*
Designaholic Templates
Header
*/
?>

<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Designaholic</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon.png">

	<link rel="stylesheet" href="css/resets.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slide_out_menu/component.css" />

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>

	<script src="scripts/modernizr.custom.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<header class="hide_options">
		<nav id="top_menu">
			<div class="container">
				<div class="top_branding">
					<a href="index.php"><img src="img/logo_designaholic.jpg" alt="Designaholic"></a>
				</div>
				<div class="burger" id="burger">
					<div></div><div></div><div></div>
				</div>
				<ul id="list">
					<li><a href="reciente.php">Reciente</a></li>
					<li><a href="acerca.php">Acerca</a></li>
					<li><a href="archivo.php">Columnas</a></li>
					<li><a href="categories.php">Categorías</a></li>
					<li><a href="archivo.php">Archivo</a></li>
					<li><a href="autores.php">Autores</a></li>
				</ul>
				<div class="search" id="search">
					<a href="#">Buscar</a>
				</div>
			</div>
		</nav>
		<?php include 'includes/top_slide_out_menu.php' ?>

		<div class="searchbox">
			<input type="search" placeholder="Escribe aquí para buscar">
		</div>


	</header>
