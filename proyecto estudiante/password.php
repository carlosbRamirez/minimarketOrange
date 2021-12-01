<?php
include('con_db.php');
include('config.php');
$usuario=$_POST['nombre'];
$emails=$_POST['email'];
$contraseña=$_POST['contra'];




$query="SELECT*FROM user where name='$usuario' and email='$emails'";
$result=mysqli_query($conex,$query);
$numRows=mysqli_num_rows($result);
$confirmar=mysqli_fetch_array($result);
$pass = $confirmar['password'];
$decrypt=openssl_decrypt($pass,AES,KEY);


if(($numRows==1)&&($contraseña==$decrypt))
{
  include("edit.php");   
}else{
    ?>
    <?php
    include("index.html"); 
  ?>
  <h1 class="bad">Datos invalidos</h1>
  <?php
}
mysqli_free_result($result);
mysqli_close($conex);