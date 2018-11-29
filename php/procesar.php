<?php

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$comentario=$_POST['comentarios'];



if (mail($email, $nombre, $comentario )){
	echo "mail enviado a "; echo  $email;
}else{ 
	echo "no se envio";
}
?>


