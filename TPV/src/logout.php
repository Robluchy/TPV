<?php 
session_start();
session_destroy();
echo '<script>alert("saliendo");window.location = "index.php";</script>';    
?>