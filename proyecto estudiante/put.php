<?php 

include("con_db.php");

if (isset($_POST['put'])) {
    if (strlen($_POST['id']) >= 1 && strlen($_POST['email']) >= 1) {
	    $id = trim($_POST['id']);
	    $nombre = trim($_POST['email']);
        
            
	    $consulta = "UPDATE estudiante SET email_est='$nombre' WHERE num_id=$id";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has actualizado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>