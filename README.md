# isw1209
Ayudantía isw del 12-09

Primero crear la base de datos en phpmyadmin.<br>
En este ejemplo uso:<br>
Base de datos: ***bd***
<br>
Tabla: ***usuarios***
<br>
Columnas tabla: 
* ***id*** (seleccionar checkbox A_I al momento de crearla, para definirlo como autoincrementable, debería quedar como primary key)
* ***nombre*** (varchar lngitud 50)
* ***edad*** (int)

Archivos: index.php: Pagina inicial, formulario y se incluye mostrar.php para ver tabla con registros<br>
conexion.php : Crea una conexion a la bd usando mysqli()<br>
procesar.php : Recibe los datos del formulario, crea la consulta insert y la ejecuta en la bd con los datos obtenidos<br>
mostrar.php : Ejecuta otra consulta sql para traer todos los registros y mostrarlos en una tabla html
