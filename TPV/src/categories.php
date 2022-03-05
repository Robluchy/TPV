
<?php
 include_once ('header.php');
 include_once ('conexion.php');


 $query = "SELECT 
				* 
			FROM 
      categorias";


	$resultado = mysqli_query($con, $query ) or die
	("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));



echo ("<div class='flex place-content-center gap-10 pt-20 >");
  echo (" <div class='my-1 px-1 w-12 overflow-hidden sm:w-12 md:w-12 lg:w-12 xl:w-12'>");

while($columna = mysqli_fetch_array($resultado)){	
 
	echo "<div>
			<a href='categories.php?id=".$columna['id_categoria']."'>
			<img class='w-40 shadow-lg shadow-black' src='".$columna["foto"]."'>
            </a><h1 class='text-xl text-center mt-6'>".$columna['nombre']."</h1>
	</div>";	
	}

	
	echo("</div>");	
	
    echo ("<div class='mx-48 mt-12'>");

        if(!isset($_GET["id"])) exit();

        $detalle = mysqli_real_escape_string($con ,$_GET["id"]);

        $query2 = "SELECT 
                        * 
                    FROM 
                        categorias
                        WHERE 
                            id_categoria=".$detalle;

        $resultado2 = mysqli_query($con,$query2);

        echo ("<table class='text-xl' >");
        while($columna = mysqli_fetch_array($resultado2)){	
    
            echo ("<tr><td>Name of Category: </td><td class='italic font-bold'>".$columna['nombre']."</td></tr>");
	    }
        echo("</table>");
        
        ?>
          <div class="mt-6">
        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:ring-green-200 dark:focus:ring-green-800">
          <span class="relative px-5 py-2.5 transition-all ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Edit
          </span>
      </button>

      <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:ring-purple-200 dark:focus:ring-purple-800">
        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 hover:-translate-y-1 hover:scale-110  bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
           Modify 
        </span>
      </button>

      <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-800">
        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 hover:-translate-y-1 hover:scale-110 bg-transparent dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            Remove
        </span>
      </button>
    </div>

	
</div>	




