<?php 

include("con_db.php");
include("config.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['username']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['password2']) >= 1 ) {
        if(($_POST['password']) == ($_POST['password2'])){
        $contraseña=$_POST['password'];
	    $nombre = trim($_POST['name']);
	    $username = trim($_POST['username']);
        $email = trim($_POST['email']);

       $encriptada = openssl_encrypt($contraseña,AES,KEY);
        
            
	    $consulta = "INSERT INTO user(name,username,email,password) VALUES ('$nombre','$username','$email','$encriptada')";
	    $resultado = mysqli_query($conex,$consulta);
		
	    if ($resultado) {
			
			
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente, vuelve e inicia sesion!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }}else{
            ?> 
	    	<h3 class="bad">¡tus contraseñas no coinciden!</h3>
           <?php
        } 
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }

}
?>