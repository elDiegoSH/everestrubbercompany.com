<?php

$nombre = "";
$email = "";
$mensaje = "";
$error = "";

//VALIDANDO NOMBRE
if(empty($_POST["nombre"])){
    $error = 'Enter your name</br>';
}else{
    $nombre = $_POST["nombre"];
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $nombre = trim($nombre);
    if($nombre==''){
        $error .= 'Name is empty</br>';
    }
}
//VALIDANDO E-MAIL
if(empty($_POST["email"])){
    $error .= 'Enter your email</br>';
}else{
    $email = $_POST["email"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error .= 'Enter a true email</br>';
    }else{
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }
}
//VALIDANDO MENSAJE
if(empty($_POST["mensaje"])){
    $error .= 'Write your message</br>';
}else{
    $mensaje = $_POST["mensaje"];
    $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
    $mensaje = trim($mensaje);
    if($mensaje==''){
        $error .= 'Message is empty</br>';
    }
}

//CUERPO DEL MENSAJE
$cuerpo .= "Nombre: ";
$cuerpo .= $nombre;
$cuerpo .= "\n";
 
$cuerpo .= "Email: ";
$cuerpo .= $email;
$cuerpo .= "\n";
 
$cuerpo .= "Mensaje: ";
$cuerpo .= $mensaje;
$cuerpo .= "\n";

//DIRECCIÓN
$enviarA = 'dsanchez@grupoeverest.com.mx'; 
$asunto = 'NEW QUOTE TO EVEREST RUBBER';

//ENVIAR CORREO
if($error == ''){
    $success = mail($enviarA,$asunto,$cuerpo,'de: '.$email,);
    echo 'exito';
}else{
    echo $error;
}

?>