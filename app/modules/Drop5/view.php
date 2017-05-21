<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
		<title>Banco de tiempo (Segovia)</title>
		<link rel="stylesheet" href="css/app.css">
	</head>
	<body>
		<!--Cabecera con logo-->
		<header>
			<img src="encabezado.jpg" alt="Banco de tiempo">
			<h1>Eliminar cuenta</h1>
		</header>
		<main class="center">
			<form method="post" action="pagina">
				<span class="tipo">¿Está seguro que desea dar de baja su cuenta?</span>
				<br><br>
				<span class="tipo">Sí </span>					
				<input type="checkbox">
				<br><br>
				<span class="tipo">¿Desea donar su tiempo a otro usuario?</span>
				<span class="tipo">Sí </span>					
				<input type="radio" name="donar" value="true">
				<span class="tipo">No </span>					
				<input type="radio" name="donar" value="false">
				<p class="tipo">Motivos por los que quiere dar la baja temporal</p>	
				<textarea rows="10" cols="65">Escriba aquí los motivos</textarea>
				<br><br><br><br>
				<input type="submit" class="button" value="Aceptar">
				<input type="reset" class="button" value="Cancelar">
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