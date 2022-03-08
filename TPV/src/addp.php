
<?php
include_once('header.php');
include_once('conexion.php');
?>

<div class="grid">
<form class="bg-transparent w-2/4 mt-4 justify-self-center " method="POST">

<label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Product ID</label>
    <input required type="text" id="disabled-input" id="small-input" class="mb-6 bg-gray-100 border border-gray-300 text-white text-sm rounded-lg  block w-full p-2.5 cursor-not-allowed dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-500 " value="ID" disabled>

    <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Name</label>
    <input required type="text" name="item" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Quantity</label>
    <input required type="text" name="quantity" pattern="[0-9]{1,5}" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <label for="small-input" class="block my-4 text-sm font-medium text-white dark:text-gray-300">Price</label>
    <input required type="text" name="price" pattern="[0-9]{1,5}" id="small-input" class="block p-2 w-full text-white bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <label for="message" class="block my-4 text-sm font-medium text-white">Description</label>
    <textarea required id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-white bg-gray-50 rounded-lg border border-gray-300  dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="Leave a comment..."></textarea>


<?php 
    include_once('conexion.php');
    $query = "SELECT * FROM categorias";

    $resultado = mysqli_query($con, $query ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));
?>
    <label for="countries" class="block my-4 text-sm font-medium text-white">Select Category</label>
    <select id="countries" class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg  block w-full p-2.5 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white ">
<?php 
    while($rows = mysqli_fetch_array($resultado)){	
    echo ('<option>'.$rows["nombre"].'</option>');
}
echo "</select>";
?>

    <button type="submit" name="send" action="cliente.php" class="text-white font-medium rounded-lg text-sm w-2/4 sm:w-auto px-5 mt-10 border text-center ">Submit</button>
    
    <svg role="status" class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-pink-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>

</form>

</div>

x

<?php
if (isset($_POST['send'])) {

    $items = $_POST['item'];
    $quantitys = $_POST['quantity'];
    $descriptions = $_POST['description'];
    $prices = $_POST['price'];

    $query1 = "INSERT INTO productos (nombre, cantidad, descripcion, precio) VALUES ('$items', $quantitys, '$descriptions', $prices)";
    $resultado1 = mysqli_query($con, $query1 ) or die
    ("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));

}
?>