<?php
include("con_db.php");
  
		if (isset($_POST['delete'])) {
			if (strlen($_POST['ide']) >= 1){
				$nombre = trim($_POST['ide']);
			   
					
				$eliminar = "DELETE FROM estudiante where num_id=$nombre";
				$resultado = mysqli_query($conex,$eliminar);
				if ($resultado) {
					?> 
					<h3 class="ok">¡has eliminado el dato correctamente!</h3>
				   <?php
				} else {
					?> 
					<h3 class="bad">¡Ups ha ocurrido un error!</h3>
				   <?php
				}
			}
		}
		?>