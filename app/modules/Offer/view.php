<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
		<title>Banco de tiempo (Segovia)</title>
		<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];  ?>/css/app.css">
		<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];  ?>/css/offer.css">
	</head>
	<body>
		<!--Cabecera con logo-->
		<header>
			<img src="http://<?php echo $_SERVER["HTTP_HOST"];  ?>/pictures/encabezado.jpg" alt="Banco de tiempo">
			<h1>Crear Oferta</h1>
		</header>
		<main class="center">
			<form method="post" action="pagina">
				<span class="tipo">¿Qué desea ofertar?</span>
				<br></br>
				<textarea rows="6" cols="60">Descripción del servicio</textarea>
				<br></br>					
				<span class="tipo">Categoria de este servicio</span>
				<br></br>
				<textarea rows="3" cols="60">Introduzca la categoria si la tiene</textarea>
				<br></br>
				<span class="tipo">¿Cuanto va a contar este servicio?</span>
				<br></br>
				<textarea rows="3" cols="60">Introduzca el tiempo que va a costar este servicio</textarea>
				<br></br>
				<input type="submit" class="button" value="Crear">
				<input type="reset" class="button" value="Cancelar">
			</form>
		</main>
		<footer class="center">
			<center>
				<p class="inline">Ayuntamiento de Segovia &copy;</p>
				<p class="inline center">2017 - Plaza mayor, 1</p>
				<p class="inline">Tlf: 921419800</p>
				<p><a href="http://www.segovia.es" target="_blank">www.segovia.es</a></p>
			</center>
		</footer>
	</body>
</html>