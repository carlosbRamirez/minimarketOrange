<!DOCTYPE html>
<html>
<head>
	<title>Registro de estudiante</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="post.css">
</head>

<body>
<a id="iHome" href="https://minimarketorange.000webhostapp.com/edit.php">HOME</a>
    <form class="caja" method="post">
    	<h1>¡Registro de empleados!</h1>
    	<input type="text" name="nombre" placeholder="Nombre completo">
        <input type="text" name="apellido" placeholder="Apellido completo">
    	<input type="email" name="email" placeholder="Email estudiante">
    	<input type="submit" name="register">
    </form>
           <?php
           include("registrar.php");
           ?>
</body>
</html>