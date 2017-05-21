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
			<h1>Registrar</h1>
		</header>
		<main class="center">
			<form method="post" action="pagina">
				<table>
					<tr>
						<td>Nombre: </td>
						<td><input type="text" name="name"></td>
						<td>Apellidos: </td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>DNI: </td>
						<td><input type="text" name="dni"></td>
						<td>Fecha de Nacimiento: </td>
						<td><input type="date" name="birthdate"></td>
					</tr>
					<tr>
						<td>Nombre de Usuario: </td>
						<td><input type="text" name="username"></td>
						<td>E-mail: </td>
						<td><input type="email" name="mail"></td>
					</tr>
					<tr>
						<td>Contraseña: </td>
						<td><input type="password" name="pass"></td>
						<td>Repetir Contraseña: </td>
						<td><input type="password" name="rpass"></td>
					</tr>
				</table>
				<br><br><br><br>
				<input type="submit" class="button" value="ACEPTAR">
				<input type="reset" class="button" value="ATRAS">
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