 <?php 
 session_start();
 include_once('header.php');
 ?>
 
<!-- <script>
    window.location.assign('index.php')
</script> -->

<form action="subearchivo.php" method="post" enctype="multipart/form-data"> 
    <b>Campo de tipo texto:</b> 
    <br> 
    <input type="text" name="cadenatexto" size="20" maxlength="100"> 
    <br> 
    <br> 
    <b>Enviar un nuevo archivo: </b> 
    <br> 
    <input name="userfile" type="file"> 
    <br> 
    <input type="submit" name="send" value="Enviar"> 
</form>

<!-- <form action="subearchivo.php" method="post" enctype="multipart/form-data"> 

    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload file</label>
    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile picture is useful to confirm your are logged into your account</div>

</form> -->
