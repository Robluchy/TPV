
<?php
 include_once ('header.php');
 include_once ('conexion.php');


 $query = "SELECT 
				* 
			FROM 
      clientes";


	$resultado = mysqli_query($con, $query ) or die
	("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));



echo ("<div class='grid'>");  //    
    echo ("<div class='order-last pl-2 xl:pl-48 lg:pl-32 md:pl-20 sm:pl-0 pt-20 w-10/12 overflow-hidden grid gap-2 grid-cols-2 xl:grid-cols-6 lg:grid-cols-4 md:grid-cols-3  sm:grid-cols-2 grid-rows-1'>");

        while($rows = mysqli_fetch_array($resultado)){	
        
	    echo "<div class='justify-self-end mb-4 hover:text-white'>
	    		<a href='cliente.php?id=".$rows['id_cliente']."'>
	    		<img class='shadow-lg shadow-slate-900  hover:drop-shadow-2xl hover:shadow-yellow-400' src='".$rows["foto"]."'></a>
                <p class='my-2 hover:text-white text-2xl text-center'>".$rows['nombre']."</p>
            </div>";	
	    }

	echo("</div>");	
	

    echo ("<div class='justify-self-center order-first mt-12'>");

        if(!isset($_GET["id"])) exit();

        $detalle = mysqli_real_escape_string($con ,$_GET["id"]);

        $query2 = "SELECT 
                        * 
                    FROM 
                        clientes
                        WHERE 
                            id_cliente=".$detalle;

        $resultado2 = mysqli_query($con,$query2);

    
        while($rows = mysqli_fetch_array($resultado2)){	
                
            echo '<div id="accordion-open" data-accordion="open" class=" p-5">

            <h2 id="accordion-open-heading-1">
                <button type="button" class="flex items-center justify-between p-5  font-medium border border-gray-200 dark:border-gray-700 border-b-0 text-left text-gray-500 dark:text-gray-400 bg-gray-800" data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1">
                    <span class="flex items-center w-60 "><img class="w-20 h-w-20 mr-3 border-2 border-double border-yellow-400" src="'.$rows["foto"].'"> ' .$rows["nombre"].'</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>

            <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
              <div class="p-5 border border-gray-700 border-b-0 bg-gray-700">
                <p class="text-white">Telephone: '.$rows["telefono"].'</p>
                <p class="text-white">Address: '.$rows["direccion"].'</p>
                <p class="text-white">Entry date: '.$rows["fecha_alta"].'</p>
              </div>
            </div>';
            
	        }

    echo ("</div>");
    
echo ("</div>");
        
?>

<!-- 
<p class="text-white">Telephon: '.$rows["telefono"].'</p>
                <p class="text-white">Address: '.$rows["direccion"].'</p>
                <p class="text-white">Entry date: '.$rows["fecha_alta"].'</p>
                
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



 -->
