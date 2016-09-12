
<?php 
	include("conexion.php"); //incluimos la clase conexion.php, para trabajar con la bd

	$sql = "select * from usuarios"; //consulta para traer todos los registros de la tabla
	$resultado=$conexion->query($sql); //ejecutamos la consulta anterior en la bd

	if (!$resultado) { //por si hay algun problema
	    echo "Ops, problemas";
	    exit;
	}

	//escribimos codigo html en el echo
	//creamos una tabla html
	echo "
		<table border style='width: 100%'>
		<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Edad</th>
		</tr>\n
		"; //el salto de linea lo ocupo solo para que no se vea tan desordenado el codigo fuente html

	//por cada tupla que retorna la bd en la consulta
	//escribimos una fila de la tabla html
	//con id, nombre, edad
	//Recordar lo de fetch_assoc()
	while ($usuario = $resultado->fetch_assoc()) {
		echo "<tr>\n";
	    echo "<td>".$usuario['id']."</td>";
	    echo "<td>".$usuario['nombre']."</td>";
	    echo "<td>".$usuario['edad']."</td>";
	    echo "</tr>\n";
	}
	//cerramos la tabla html cuando termina el while
	echo "</table>";

?>

