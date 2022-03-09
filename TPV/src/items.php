 
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

        $query2 = "SELECT id_producto, productos.nombre, cantidad, descripcion, precio, productos.foto, nombre_categoria 
        FROM productos, categorias 
        WHERE id_producto = '$detalle'
        and productos.categoria = categorias.id_categoria";

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
                        <p class="text-white">'.$rows["nombre_categoria"].'</p>
                      </div>
                    </div>
        </div>');


	    }

        echo(' <div class="pl-16 xl:pl-48 lg:pl-28 md:pl-12 sm:pl-6 mt-8 inline-flex rounded-md shadow-sm">
            <a href="addp.php" aria-current="page" class="py-2 px-4 text-sm font-medium text-blue-700 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                Add
            </a>
            <a href="modifyp.php?id='.$detalle.'" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                Modify
            </a>

            <a class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white " data-modal-toggle="popup-modal">
                Remove
            </a>
            <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="popup-modal">
            <div class="relative px-4 w-full max-w-md h-full md:h-auto">
            
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>                 
                    <div class="p-6 pt-0 text-center">
                        <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                        <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            <a href="removep.php?id='.$detalle.'">Yes</>
                        </button>
                        <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">
                        <a href="items.php?id='.$detalle.'" > No, cancel </a>
                        </button>
                    </div>
                </div>
            </div>
    </div>
        </div>');
    echo("</div>");

echo("</section>");
?>
   
