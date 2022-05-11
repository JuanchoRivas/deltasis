<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = "Mensaje desde pagina deltasis";
$message = $_POST["message"];

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: <".$email.">\r\n"; 

mail("pmrivas@gmail.com",$subject,$message,$headers);
header('Location:/');
?>