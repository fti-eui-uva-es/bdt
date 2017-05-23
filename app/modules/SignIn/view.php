<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
		<title>Banco de tiempo (Segovia)</title>
		<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];  ?>/css/app.css">
		<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];  ?>/css/signIn.css">
	</head>
	<body>
		<!--Cabecera con logo-->
		<header>
			<img src="http://<?php echo $_SERVER["HTTP_HOST"];  ?>/pictures/encabezado.jpg" alt="Banco de tiempo">
			<h1>Inicio Sesión</h1>
		</header>
		<main class="center">
			<br><br><br><br>
			<form method="post"  action="pagina">
				<span class="tipo" name="nombre">USUARIO: </span>
				<input type="text">
				<br><br><br><br><br><br>
				<span class="tipo" name="pass">CONTRASEÑA: </span>
				<input type="password">
				<br><br><br><br>
				<input type="submit" class="button" value="Entrar">
			</form>					
		</main>
		<footer class="center">
			<p class="inline">Ayuntamiento de Segovia &copy;</p>
			<p class="inline center">2017 - Plaza mayor, 1</p>
			<p class="inline">Tlf: 921419800</p>
			<p><a href="http://www.segovia.es" target="_blank">www.segovia.es</a></p>
		</footer>
	</body>
</html>
