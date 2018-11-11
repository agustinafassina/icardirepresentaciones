<?php
$con=mysqli_connect('localhost','root','','prueba_icardi') or
die('Problemas con la conexión');
mysqli_set_charset($con,'utf8');

if($_POST['nombre_post'])
{
$nombre= $_POST['nombre_post'];
$email= $_POST['email_post'];
$telefono= $_POST['telefono_post'];
$mensaje= $_POST['mensaje_post'];

$time=time();
$sql= "INSERT INTO consulta (nombre,telefono,email,consulta, fecha) VALUES('$nombre','$telefono','$email','$mensaje',NOW())";
$result = mysqli_query($con,$sql);
echo "<h2>¡Muchísimas gracias!</h2>";
}
?>