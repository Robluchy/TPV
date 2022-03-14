<!DOCTYPE html >

<html lang="en" class="font-mono bg-gradient-to-r from-indigo-800 to-fuchsia-900 ">

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

<body>
<?php

include_once("conexion.php");
session_start();

if (!isset($_SESSION['user'])) {



  $nombre = $_POST['nombre'];

  $pass = $_POST['pass'];

  $_SESSION["user"] = $_POST['nombre'];
  $_SESSION["pass"] = $_POST['pass'];

  $query = "SELECT * FROM empleados WHERE username='$nombre' and pass='$pass'";

  $resultado = mysqli_query($con, $query) or die("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));

    if(mysqli_num_rows($resultado) > 0){

  }else{
    session_destroy();
    header('Location: '."login.php");
    exit;
  }
}

?>

<nav class=" mb-1 border-gray-200 px-2 sm:px-4 py-2.5 rounded bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex"></a>

    <div class="flex items-center md:order-2">
        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4  focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
            <span class="sr-only">User</span>
            <img class="w-8 h-8 rounded-full" src="./img/tft.png" alt="user photo">
        </button>

        <div class="hidden my-4 text-base list-none  rounded divide-y  shadow bg-gray-700 divide-gray-600" id="dropdown">
            <ul class="py-1" aria-labelledby="dropdown">
                <li>
                    <a href="profile.php" class="block py-2 px-4 text-sm  hover:bg-gray-600 text-gray-200 hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="administrator.php" class="block py-2 px-4 text-sm  hover:bg-gray-600 text-gray-200 hover:text-white">Administrator</a>
                </li>
                <li>
                    <a href="logout.php" class="block py-2 px-4 text-sm  hover:bg-gray-600 text-gray-200 hover:text-white">Sign out</a>
                </li>
            </ul>
        </div>

        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm  rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>

    </div>

    <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">

        <li>
                <a href="home.php" class="block py-2 pr-4 pl-3  border-b  md:border-0 md:p-0 text-gray-300 hover:bg-gray-700 hover:text-white md:hover:bg-transparent border-gray-700">
                    Dashboard
                </a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-300 border-b border-gray-100  bg-transparent md:border-0  md:p-0 md:w-auto ">
                    Add Dropdown <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
  
                <div id="dropdownNavbar" class="hidden z-10 w-44 text-base list-none rounded divide-y shadow bg-gray-700 divide-gray-600">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="addcat.php" class="block py-2 px-4 text-sm text-white hover:bg-slate-600 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Add Category</a>
                    </li>
                    <li>
                        <a href="addcli.php" class="block py-2 px-4 text-sm text-white hover:bg-slate-600 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Add Client</a>
                    </li>
                    <li>
                        <a href="addp.php" class="block py-2 px-4 text-sm text-white hover:bg-slate-600 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Add Product</a>
                    </li>
                    </ul>

                </div>
        </li>
           
        </ul>
    </div>
</div>
</nav>


<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>

<?php
include_once('footer.php');
?> 