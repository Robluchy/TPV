<?php
include_once('header.php');
include_once('conexion.php');

$query = "SELECT * FROM facturas";
    
$resultado = mysqli_query($con, $query ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));


while($rows = mysqli_fetch_array($resultado)){	

echo '
<div class="flex flex-col">

    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">

      <div class="overflow-hidden shadow-md sm:rounded-lg">

        <table class="min-w-full">
          <thead class="bg-gray-50 dark:bg-gray-700">
          <tr>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Date
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Total
            </th>
            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Products
            </th>
          
            <th scope="col" class="relative py-3 px-6">
            <span class="sr-only">View</span>
            </th>
          </tr>

          </thead>

         
          <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
            '.$rows['fecha'].'
            </td>
           
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
            '.$rows['total'].'
            </td>

            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
            '.$rows['producto'].'
            </td>
            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                <a href="tiket.php?id='.$rows['compra'].'" class="text-blue-600 dark:text-blue-500 hover:underline">View</a>
            </td>
          </tr>
        </tbody>
          </table>
      </div>
    </div>
</div>';
}
?>