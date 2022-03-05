 
<?php
include_once('header.php');
include_once('conexion.php');

$query = "SELECT 
                  *
              FROM
                  productos";

$resultado = mysqli_query($con, $query) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));







    echo ('<aside class="w-4/12 grid grid-rows-5 grid-cols-2 xl:grid-cols-5 lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-4 pt-12 ">');

        while($columna = mysqli_fetch_array($resultado)){	
        
            echo ("<div class='my-2 justify-self-center transition-all ease-in-out hover:-translate-x-1 hover:scale-150 '>
                    <a href='items.php?id=".$columna['id_producto']."'>
                        <img class='w-14 shadow-2xl shadow-yellow-400 border-2 border-double border-yellow-400' src='".$columna["foto"]."'>
                    </a>
                </div>");  
        }

    echo ("</aside>");


?>
   
