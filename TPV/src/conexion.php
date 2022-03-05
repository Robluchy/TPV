<?php
$servername = "localhost"; // Nombre/IP del servidor
$database = "lol"; // Nombre de la BBDD a la que se conecta
$username = "root"; // Nombre del usuario
$password = ""; // Contraseña del usuario
// Creamos la conexión
$con = mysqli_connect($servername, $username, $password, $database);
// Comprobamos la conexión

if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
?>
