
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
    			<img class='w-40 shadow-lg shadow-yellow-500' src='".$columna["foto"]."'>
                </a><h1 class='text-xl text-center mt-6'>".$columna['nombre_categoria']."</h1>
    	</div>";	
    	}

    
    	echo("</div>");	
    
        echo ("<div class='justify-self-center mt-12'>");

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
            
                echo ("<tr><td>Name of Category: </td><td class='italic font-bold'>".$columna['nombre_categoria']."</td></tr>");
    	    }
            echo("</table>");

            echo('<div class=" mt-4 pl-10 inline-flex rounded-md shadow-sm">
            <a href="addcat.php?id='.$detalle.'" aria-current="page" class="py-2 px-4 text-sm font-medium bg-neutral-50 border-slate-900 transition-all ease-in duration-75 hover:-translate-y-1 hover:scale-110 rounded-l-lg border">
                Add
            </a>
            <a href="modifycat.php?id='.$detalle.'" class="py-2 px-4 text-sm bg-neutral-50 border-slate-900 transition-all ease-in duration-75 hover:-translate-y-1 hover:scale-110 font-medium border">
                Modify
            </a>

            <a class="py-2 px-4 text-sm font-medium bg-neutral-50 border-slate-900 transition-all ease-in duration-75 hover:-translate-y-1 hover:scale-110 rounded-r-lg border" data-modal-toggle="popup-modal">
                Remove
            </a>


        </div>
    </div>
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
                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        <a href="removecat.php?id='.$detalle.'">Yes</a>
                    </button>
                    <button  data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100  rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">No, cancel</button>
                </div>
            </div>
        </div>');

?>





