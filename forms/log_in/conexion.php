<?php
/*Declaramos las variables que contendran los
 atributos de la base de datos*/
$server="sql10.freesqldatabase.com";
$user="sql10370529";
$pass="EmAT4gv6w5";
$db="sql10370529";
// Creamos la conexion por medio de una variable
$conexion = mysqli_connect($server, $user, $pass, $db);
// verificamos si la conexion fue existosa
if (!$conexion) {//si la conexion fallo
	  /*mostraremos al usuario los errores*/
      die("Upss!! La conexion ha fallado: " . mysqli_connect_error());
} else {//si no hubiese un error le notificamos que la conexion fue existosa
      echo "Se establecio la conexio a la base de datos: $db <br>";
}
 
 ?>