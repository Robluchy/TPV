<?php
 include_once('header.php');
?>
    <!-- cards con las categorias  -->

<section class=" mt-20 grid xl:grid-cols-4 sm:grid-cols-none md:grid-cols-2 gap-4 my-28 pb-4 px-28 place-content-around ">
    
    <div class=" max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="cliente.php">
            <img class="rounded-t-lg" src="./img/tft.png" alt="clients">
        </a>    
        
        <div class="p-5 text-center">
            <a href="cliente.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Manage Client</h5>
            </a>
        </div>
    </div>

    <div class=" max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="items.php">
            <img class="rounded-t-lg" src="./img/tft.png" alt="clients">
        </a>    
        
        <div class="p-5 text-center">
            <a href="items.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Manage Items</h5>
            </a>
        </div>
    </div>

    <div class=" max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="categories.php">
            <img class="rounded-t-lg" src="./img/tft.png" alt="clients">
        </a>    
        
        <div class="p-5 text-center">
            <a href="categories.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Manage Category</h5>
            </a>
        </div>
    </div>

    <div class=" max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="purchase.php">
            <img class="rounded-t-lg" src="./img/tft.png" alt="clients">
        </a>    
        
        <div class="p-5 text-center">
            <a href="purchase.php">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">View purchases</h5>
            </a>
        </div>
    </div>



</section>



<?php
  include_once('footer.php');
?> 