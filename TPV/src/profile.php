<!DOCTYPE html >

<html lang="en" class="bg-gradient-to-r from-indigo-800 to-fuchsia-900 ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPV TFT</title>
    <link rel="icon" href="./img/tft.png">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="javascript.js"></script>
    
</head>

<?php
session_start();
include_once('conexion.php');


$query = "SELECT 
                  *
              FROM
                  empleados where id_empleado = 1";

$resultado = mysqli_query($con, $query) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));

while($rows = mysqli_fetch_array($resultado)){	
echo '<div class="flex items-center justify-center h-screen bg-transparent">
   <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xl">
     <img class="mb-3 w-32 h-32 rounded-full shadow-lg mx-auto" src='.$rows["foto"].'>
     <h1 class="text-2xl text-gray-700">'.$rows["nombre"].'</h1>
     <h3 class="text-xl text-black ">'.$rows["email"].'</h3>
     <p class="text-sm text-black mt-4">Position '.$rows["puesto"].'</p>
     <p class="text-xl text-black mt-4">The company is happy with your work keep it up '.$rows["nombre"].'</p>';}
     ?>    
     <button onclick="window.location.href='home.php'" href="" class="bg-indigo-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Dashboard</button>
   </div>
 </div>



