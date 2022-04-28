<?php

$nombre = "";
$email = "";
$mensaje = "";
$error = "";
$pagina = "https://www.everestrubber.com/blog/floors-for-gym/";

//VALIDANDO NOMBRE
if(empty($_POST["nombre2"])){
    $error = 'Enter your name</br>';
}else{
    $nombre = $_POST["nombre2"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $nombre = trim($nombre);
    if($nombre==''){
        $error .= 'Name is empty</br>';
    }
}
//VALIDANDO E-MAIL
if(empty($_POST["email2"])){
    $error .= 'Enter your email</br>';
}else{
    $email = $_POST["email2"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error .= 'Enter a true email</br>';
    }else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }
}
//VALIDANDO MENSAJE
if(empty($_POST["mensaje2"])){
    $error .= 'Write your message</br>';
}else{
    $mensaje = $_POST["mensaje2"];
    $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
    $mensaje = trim($mensaje);
    if($mensaje==''){
        $error .= 'Message is empty</br>';
    }
}

//CUERPO DEL MENSAJE
$cuerpo .= "Name: ";
$cuerpo .= $nombre;
$cuerpo .= "\n";
 
$cuerpo .= "Email: ";
$cuerpo .= $email;
$cuerpo .= "\n";
 
$cuerpo .= "Message: ";
$cuerpo .= $mensaje;
$cuerpo .= "\n";

$cuerpo .= "From: ";
$cuerpo .= $pagina;
$cuerpo .= "\n";

//DIRECCIÓN
$enviarA = 'dsanchez@grupoeverest.com.mx, dperez@grupoeverest.com.mx'; 
$asunto = 'New Quote From Blog: Benefits of rubber flooring for gym';

//ENVIAR CORREO
if($error == ''){
    $success = mail($enviarA,$asunto,$cuerpo,'de: '.$email,);
    echo 'exito';
}else{
    echo $error;
}

?>