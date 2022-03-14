<?php 
session_start();
 include_once('conexion.php');
$query = "DELETE FROM productos WHERE id_producto =". $_GET['id'];

$resultado = mysqli_query($con, $query ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));

header("Location: items.php");
die();
 ?>
