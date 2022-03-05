<?php

    include_once('conexion.php');

    define("destino","img/");

echo $_FILES['userfile']["name"] . "<br>";
echo $_FILES['userfile']["type"]. "<br>";
echo $_FILES['userfile']["size"]. "<br>";
echo $_FILES['userfile']["tmp_name"]. "<br>";


if (move_uploaded_file($_FILES['userfile']["tmp_name"], destino.$_FILES['userfile']["name"])){
    echo "Upload successful";
}else{
    echo "Upload failed ";
}




if (isset($_POST['send'])) {

  
    $query = "UPDATE categoria SET foto = ('".destino.$_FILES['userfile']["name"]."') WHERE id_categoria=5";

    $log = mysqli_query ($con, $query);
}
?>