<?php
include_once('header.php');
include_once('conexion.php');

$query = "SELECT * FROM productos WHERE id_producto =". $_GET['id'];

$resultado = mysqli_query($con, $query ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));


while($rows = mysqli_fetch_array($resultado)){	

echo ('
<div class="grid">
    <form class="bg-transparent w-2/4 mt-4 justify-self-center ">

        <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Product ID</label>
        <input type="text" id="disabled-input" id="small-input" class="mb-6 bg-gray-100 border border-gray-300 text-white text-sm rounded-lg  block w-full p-2.5 cursor-not-allowed dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-500 "  value="'.$rows["id_producto"].'" disabled>

        <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Name</label>
        <input type="text" value="'.$rows["nombre"].'" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" >

        <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Quantity</label>
        <input type="text" value="'.$rows["cantidad"].'" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">

        <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Price</label>
        <input type="text"  value="'.$rows["precio"].'" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">

        <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Description</label>
        <input type="text"  value="'.$rows["descripcion"].'" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">

        <label class="block my-4 text-sm font-medium text-white dark:text-gray-300" for="user_avatar">Upload image</label>
        <input class="block w-full text-sm text-white bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
        '
    );
}
?>
<?php 
include_once('conexion.php');
$query = "SELECT * FROM categorias";

$resultado = mysqli_query($con, $query ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));
?>
<label for="countries" class="block my-4 text-sm font-medium text-white">Select Category</label><select id="countries" class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">

<?php 
while($rows = mysqli_fetch_array($resultado)){	
echo ('<option>'.$rows["nombre"].'</option>');
}
?>

</select>
    <button class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="small-modal">
    Submit
    </button>
    </form>
</div>

<div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full" id="small-modal">
    <div class="relative px-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Accept the terms
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="small-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="small-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-toggle="small-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>