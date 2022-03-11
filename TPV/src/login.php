<?php
 include_once('header.php');
 include_once('conexion.php');

 


?>



<div class="flex items-center justify-center min-h-screen ">
    <div class="px-8 py-6 text-left bg-white shadow-2xl shadow-indigo-400">
    <p class="hidden">Puede que tu nombre de usuario o contraseña sean incorrectos. 
        Echa un vistazo al enlace ¿No puedes iniciar sesión? para obtener más información.
    </p>
        <h3 class="text-2xl font-bold text-center">Login to your account</h3>
        <form method="POST">
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                            <input type="text" required minlength="1" name="email" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" required minlength="1" name="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex items-baseline justify-between">
                    <button name="Login" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php 
if (isset($_POST['Login'])) {
  
    $email = $_POST['email'];
  
    $pass = $_POST['password'];
    
    $_SESSION["email"] = $_POST['email'];
  
    
    $query = "SELECT * FROM empleados WHERE email='$email' and pass='$pass'";
  
  
    $resultado = mysqli_query($con, $query ) or die("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($con));
  
      if(mysqli_num_rows($resultado) > 0){
      echo '<script>alert("Bienvenido");window.location = "index.php";</script>';    
  
    }else{
      echo 	'<script>alert("error");window.location = "login.php";</script>';
      exit;
    }
  }
  ?>