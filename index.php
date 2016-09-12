<html>
	<head>
		<title>BD</title>
	</head>
	<body style="text-align: center; background-color: #16C0D6; padding: 20px">
		<div style="width: 40%; margin: 0 auto; text-align: center">
			<h1>Ejemplo guardando datos en la bd</h1>

			<!-- Creamos formulario con metodo POST, 
				y recibimos los datos en procesar.php-->
			<form action="procesar.php" method="POST">

				<fieldset> 	<!-- fieldset Solo para fines visuales, crea un marco para agrupar el contenido -->
					<legend>Formulario</legend>
					
					Nombre
					<br>
					<input name="nombre" type="text"></input>
					<br>
					Edad
					<br>
					<input name="edad" min=1 type="number"></input>
					<br>
					<br>
					<input type="submit" value="Guardar"></input>
				</fieldset>

			</form>
			
			<?php //agregamos codigo php
			//incluimos lo que esta en mostrar.php, que es una tabla con los
			//registros de la bd. Esto mostrará todo lo que hay en mostrar.php
			include("mostrar.php"); 
			?>

		</div>

	</body>
</html>