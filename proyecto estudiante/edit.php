<head>
	<title>edit</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="editar.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">edit table</a>

				<div>

					<form method="post">
                        <li class="titulo"><a href=""> edita el campo</a></li>
                        <input type="number" name="id" placeholder="id">
						<input type="email" name="email" placeholder="email">
						<button type="submit" name="put"><i class='bx bx-edit-alt'></i></button>
					
                    </form>
				</div>

				</li>
				<li><a href="https://minimarketorange.000webhostapp.com/insertar.php">insertar</a></li>
				<li><a href="https://minimarketorange.000webhostapp.com/get.php">formularios</a></li>
				<li><a href="https://minimarketorange.000webhostapp.com/index.html">log out</a></li>
			</ul>
			
		</nav>
		<h2>Bienvenido<?php $usuario?></h2>
		<?php
           include("put.php");
		   include("get.php");
		   
		   
		   
		   
           ?>