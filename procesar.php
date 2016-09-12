<?php
include("conexion.php"); //incluimos la conexion a la bd!

if($_POST['nombre'] && $_POST['edad']){ //si es que llegan datos por POST

	$nombre=$_POST['nombre']; //guardamos los datos del formulario 
	$edad=$_POST['edad'];    //en nuevas variables

	//escribimos la consulta que queremos ejecutar y la guardamos en $consulta
	//puede ir cualquier consulta sql valida, en este caso sera un insert
	$consulta="INSERT INTO `usuarios` (`id`, `nombre`, `edad`) VALUES (NULL, '".$nombre."', '".$edad."')"; 
	
	$resultado=$conexion->query($consulta); //Ejecutamos la consulta en la bd

	if(!$resultado){ //si es que no se ejecuta bien, hay algun error
		echo "ups, hay problemas al guardar";
	}else{ //si es que se ejecuta bien
		//cerramos la etiqueta <?php, para incluir html
		?> 

		<script>//etiqueta html para incluir codigo javascript
		alert("Usuario ingresado"); //mostramos un mensaje
		window.location="index.php"; //redireccionamos a la pagina principal
		//para guardar formulario sin recargar pagina se debe usar AJAX
		</script> <!-- cerramos etiqueta script-->

		<?php //abrimos nuevamente una etiqueta <?php para seguir con el codigo php

	}

}

?>