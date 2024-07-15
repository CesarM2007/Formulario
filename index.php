<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>

	<style>
		form{
			border-style: solid;
			border-width: 1xp;
			width: 500px;
			padding: 50px;
			margin-top: 200px;
			margin-left: 650px;
			margin-right: 650px;
			margin-bottom: 200px;
		}
	</style>

</head>



<body>
	<form action="procesar.php" method="post">

		<h1>
			Bienvenido al formulario #1
		</h1>
		Nombre: <input type="text" name="nombre"><br><br>
	 
		Correo: <input type="text" name="correo"><br><br>
	
		Direccion: <input type="text" name="direccion"><br><br>

		<h3>
			Genero
		</h3>

		<input type="radio" id="masculino" name="genero" value="Masculino">
		<label for="masculino">Masculino</label><br>
		<input type="radio" id="femenino" name="genero" value="Femenino">
		<label for="femenino">Femenino</label><br>
		
		<input type="submit" value="Enviar">
	</form>
</body>

</html>
