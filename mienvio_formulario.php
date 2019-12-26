<?php
$nombre_usuario =$_POST['nombre'];
$email_usuario =$_POST['email'];
$consulta_usuario =$_POST['mensaje'];
//3 variables que toman lo que se envía por post del formulario
$destino="quinterobernaldavid@gmail.com";

$asunto="Consulta enviada desde www.northcomputer.com";

$mensaje="Nombre:".$nombre_usuario."\r\n";
$mensaje.="Email:".$email_usuario."\r\n";
$mensaje.="Consulta".$consulta_usuario."\r\n";

$remitente="From: david.0793@hotmail.com";

mail($destino, $asunto, $mensaje, $remitente);
//El header me redirige a el index de la pagina
header("Location:index.php?i=ok");
?>