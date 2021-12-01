
<head>
	<title>Registro de estudiante</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="getStyle.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>



<table class="container">

	<thead>
		<tr>
			<th><h1>id</h1></th>
			<th><h1>nom_emp</h1></th>
			<th><h1>ape_emp</h1></th>
			<th><h1>email</h1></th>
     
		</tr>
	</thead>
	<tbody>
  <?php 

include("con_db.php");
include("eliminarMySql.php");
     
	    $obtener = "SELECT * FROM estudiante";
	    $resultado = mysqli_query($conex,$obtener);
		
        while($datos=mysqli_fetch_array($resultado)){
        
          ?>       
		<tr>
		<form class="caja" method="post">
		<input type="hidden" name="ide" value="<?php echo $datos['num_id']?>">
			<td><?php echo $datos['num_id']?></td>
			<td><?php echo $datos['nom_est']?></td>
			<td><?php echo $datos['ape_est']?></td>
			<td id="email"><?php echo $datos['email_est']?><button type="submit" name="delete" value="delete" ><i class='bx bx-trash'></i></button><button id="edit"><i class='bx bx-edit-alt'></i></button></td>
		</form>
		</tr>
    <?php
        }
        
        ?>
    
	</tbody>
</table>
