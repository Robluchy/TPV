 
<?php
include_once('header.php');
include_once('conexion.php');

$query = "SELECT 
                  *
              FROM
                  productos";

$resultado = mysqli_query($con, $query) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));



echo ("<section class='grid grid-cols-none  xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2'>"); 
            // <<-div para poner las fotos de los productos asi separarlos en dos bloques->>
    echo ('<div class="order-2 sm:order-1 w-4/6 justify-self-center grid grid-rows-5 grid-cols-2 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 pt-10 mb-14 ">');

        while($rows = mysqli_fetch_array($resultado)){	
        
            echo ("<div class=' my-2 justify-self-center transition-all ease-in-out hover:-translate-x-1 hover:scale-150 '>
                    <a href='items.php?id=".$rows['id_producto']."'>
                        <img class='w-14 shadow-2xl shadow-yellow-400 border-2 border-double border-yellow-400' src='".$rows["foto"]."'>
                    </a>
                </div>");  
        }

    echo ("</div>");
            // <<-div para las caracteristicas de los distintos productos->>
    echo ("<div class='order-1 sm:order-2 pt-36 w-full justify-self-center'>");

        if(!isset($_GET["id"])) exit();

        $detalle = mysqli_real_escape_string($con ,$_GET["id"]);

        $query2 = "SELECT 
                        * 
                    FROM 
                        productos
                        WHERE 
                            id_producto=".$detalle;

        $resultado2 = mysqli_query($con,$query2);

    
        while($rows = mysqli_fetch_array($resultado2)){	
    
        echo ('<div id="accordion-open" data-accordion="open" class="ml-16 xl:ml-0 mg:pl-0 md:ml-0 sm:ml-10">
              
                    <h2 id="accordion-open-heading-1">
                        <button type="button" class="flex items-center justify-between p-5 w-9/12  font-medium border border-gray-200 dark:border-gray-700 border-b-0 text-left text-gray-500 dark:text-gray-400 bg-gray-800" data-accordion-target="#accordion-open-body-1" aria-expanded="false" aria-controls="accordion-open-body-1">
                        <span class="flex items-center"><img class="w-20 h-w-20 mr-3 border-2 border-double border-yellow-400" src="'.$rows["foto"].'"> ' .$rows["nombre"].'</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                      <div class="p-5 border border-gray-700 border-b-0 w-9/12  bg-gray-700">
                        <p class="text-white">'.$rows["descripcion"].'</p>
                      </div>
                    </div>
                        
                    <h2 id="accordion-open-heading-2">
                        <button type="button" class="flex items-center justify-between p-5 w-9/12 font-medium border border-gray-700 border-b-0 text-left text-gray-500 dark:text-gray-400 bg-gray-800" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                            <span class="flex items-center">Amount</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                      <div class="p-5 border border-gray-700 border-b-0 w-9/12 bg-gray-700">
                        <p class="text-white">'.$rows["cantidad"].' in stock</p>
                      </div>
                    </div>


                    <h2 id="accordion-open-heading-3">
                        <button type="button" class="flex items-center justify-between p-5 w-9/12 font-medium border border-gray-700 border-b-0 text-left text-gray-500 dark:text-gray-400 bg-gray-800" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                          <span class="flex items-center">Price</span>
                          <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                      <div class="p-5 border border-gray-700 border-b-0 w-9/12 bg-gray-700">
                        <p class="text-white">'.$rows["precio"].'€</p>
                      </div>
                    </div>

      
                    <h2 id="accordion-open-heading-4">
                        <button type="button" class="flex items-center justify-between p-5 w-9/12 font-medium border border-gray-700 border-b-0 text-left text-gray-500 dark:text-gray-400 bg-gray-800" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
                            <span class="flex items-center">Categoty</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
                      <div class="p-5 border border-gray-200 dark:border-gray-700 border-b-0 w-9/12 bg-gray-700 ">
                        <p class="text-white">'.$rows["categoria"].'</p>
                      </div>
                    </div>
        </div>');


	    }
    

        echo(' <div class="pl-16 xl:pl-48 lg:pl-28 md:pl-10 sm:pl-3 mt-8">
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
            </div>');
    echo("</div>");

echo("</section>");
?>
   
