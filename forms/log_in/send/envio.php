<?php
/*llamamos las lineas de codigo contenidas en la conexion
 para comprobar la conexion*/
/*include("conexion.php");*/

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
 
/*Definimos las variables que contendran los datos que se insertaran*/
$name = $_POST['username'];//(este es para nombre)usamos el metodo POST para obtener los datos 
$mail = $_POST['email'];//de los inputs (el correo)
$pass = $_POST['pass'];//mensaje
if (isset($_POST['btn']) == true) {//Si el usario presiona el boton registrar
     /*Verificamo que los campos no esten vacios*/
if ($name==null && $pass==null) {
	if ($mail == null) {
		echo "Upps!! has dejado los campos vacios";//si el usuario desea continuar reguistrando, tendra que ir al enlace
	}	
} else {
/*Si no estan vacios pasamos a  evaluar si por lo menos uno esta vacio*/
if (strlen($name)>=1  &&  strlen($pass)>=1 ) {

	if (strlen($mail)>=1) {

		/*Aqui veo cuantos registros hay para sumar uno mas que es el nuevo*/



		    /*Establecemos una variable para que dentro de ella pondremos las instrucciones   Mysql para insertar los datos*/
$query = "INSERT INTO usuarios VALUES ('', '$name', '$mail', '$pass')";
/*Denominamos una variable para que realice la consulta,en este caso
 se insertaran atributos*/
$insertar = mysqli_query($conexion, $query);
/*Evaluamos el valor que devuelve la funcion mysql_query}
 para saber si se agrego con exito*/

if ($insertar == true) {
	echo "<h1>TE HAS REGISTRADO </h1>";//el usario puede volver a ingresar otro atributo
}else {//si hubiese un problema
echo "Upps!! No hemos podido registar tus datos";//para que pueda retornar al index y volver a intentarlo
}//fin  sino para posibles errores al registrar
	}//fin si mss esta vacio 
} else {
	echo "Upps!! has dejado vacio al menos un campo";//si el usuario desea continuar reguistrando, tendra que ir al enlace
}//fin de sino para al menos un input que esta vacio
}//fin de sino para los inputs vacio
} //fin del if para boton registrar
?> <!-- fin php -->