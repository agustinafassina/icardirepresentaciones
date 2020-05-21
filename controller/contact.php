<?php
$con=mysqli_connect('localhost','c1541245_icardi','tiwa69DAka','c1541245_icardi') or
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

//function mail kundo
    $to = "info@icardirepresentaciones.com.ar";
    $subject = "CONSULTA WEB ICARDI";
    $message = "
    <html>
      <body>
        <table>
           <tr>
            <td><strong>Nombre:</td>
            <td>". $nombre . "</td>
           </tr>
           <tr>
            <td><strong>Email:</td>
            <td>" . $email . "</td>
           </tr>
           <tr>
            <td><strong>Telefono</td>
            <td>" . $telefono. "</td>
           </tr>
           <tr>
            <td><strong>Consulta</td>
            <td>" . $mensaje. "</td>
           </tr>
        </table>
        <hr />
    </body>
    </html>";

    $headers= "From: info@icardirepresentaciones.com.ar\nReply-To:".$email."\n";
    $headers.= "Mime-Version: 1.0\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    mail($to, $subject, $message, $headers);
    echo "<h2>¡Muchísimas gracias!</h2>";

}
?>