<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Signup.css">
</head>

<body>
<a id="iHome" href="https://minimarketorange.000webhostapp.com/index.html">LogIn</a>
    <form class="caja" method="post">
    	<h1>Sign Up</h1>
    	<input type="text" name="name" placeholder="Name">
        <input type="text" name="username" placeholder="Username ">
    	<input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="contraseña">
        <input type="password" name="password2" placeholder="confirmar contraseña">
    	<input type="submit" name="register" value="Registrarme">
    </form>
    <?php
           include("pass.php");
           ?>
</body>
</html>