<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
		<title>Banco de tiempo (Segovia)</title>
		<link rel="stylesheet" href="http://localhost/css/app.css">
		<link rel="stylesheet" href="http://localhost/css/reactive.css">
	</head>
	<body>
		<!--Cabecera con logo-->
		<header>
			<img src="http://localhost/pictures/encabezado.jpg" alt="Banco de tiempo">
			<h1>Reactivar cuenta</h1>
		</header>
		<main class="center" >			
			<p>¿Desea reactivar su cuenta?</p>
			<br>
			<form method="post" action="pagina">
				<span>Sí</span>
				<input type="radio" name="reactive" id="reactive_1" value="1" autofocus>
				<span>No</span>
				<input type="radio" name="reactive" id="reactive_0" value="0"> 
				<br><br><br><br>
				<input type="submit" class="button" value="ACCEDER "onclick="javascript:activacion();">
				<input type="reset" class="button" value="VOLVER">
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
		<script>
		function activacion(){
			if(document.getElementById('reactive_0').checked) {
				alert("Cuenta no ha sido reactivada");
			}else if(document.getElementById('reactive_1').checked) {
				alert("Cuenta reactivada con éxito");
			}else {
				alert("No se ha marcado ninguna opción");
			}
		}		
		</script>
	</body>
</html>