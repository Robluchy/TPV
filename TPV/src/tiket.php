<?php 
include_once('header.php');
include_once('conexion.php');


 

$query = "SELECT * FROM compras WHERE id_compra =". $_GET['id'];  

$resultado = mysqli_query($con, $query ) or die
("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con)); 
while($rows = mysqli_fetch_array($resultado)){	
    
 
echo'
<div class="flex justify-center items-center h-screen bg-gray-200 text-gray-900">
  <div class="rounded-md relative w-72 shadow-2xl p-3 bg-white">
    <div class="py-2">
      <div class="text-center text-xl font-bold">ORDER</div>
      <div class="text-center text-xs font-bold">The order details</div>
    </div>
    <div class="text-center text-xs font-bold mb-1">~~~~~~~~~~~~~~~~~~~~~~~~~~~~</div>
    <div class="text-xs pl-2">
      <div class="text-xs mb-1">Customer: '.$rows['cliente'].'</div>
      <div class="text-xs mb-1">empleado: '.$rows['empleado'].'</div>
      <div>OrderNumber：17485554487748500</div>
    </div>
    <div class="border-double border-t-4 border-b-4 border-l-0 border-r-0 border-gray-900 my-3">
      <div class="flex text-sm pt-1 px-1">
        <span class="w-2/6">Name</span>
        <span class="w-2/6 text-right">Price</span>
        <span class="w-2/6 text-right">Number</span>
      </div>
      <div class="border-dashed border-t border-b border-l-0 border-r-0 border-gray-900 mt-1 my-2 py-2 px-1">
        <div class="flex justify-between text-sm">
          <span class="w-2/6 truncate">Boxing glove</span>
          <span class="w-2/6 text-right">'.$rows['importe'].'</span>
          <span class="w-2/6 text-right">1</span>
        </div>
      </div>
    </div>
    <div class="text-xs">
      <div class="mb-1">Discount: 5%</div>
      <div class="text-right">
        <div>Time: '.$rows['fecha'].'</div>
        <div class="font-bold text-sm">Total: '.$rows['importe'].' </div>
      </div>
    </div>
  </div>
</div>';
}

?>