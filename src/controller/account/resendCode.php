<?php

use Branar\Blog\model\Email;
use Branar\Blog\model\CodeVerifyUser;

if(!isset($_SESSION['id_user'])) {
    header('Location: ../blog/');
}

// Establecer zona horaria
date_default_timezone_set("America/Caracas");

$time_expiration = 300;
				
// Sumar el tiempo de expiracion a la fecha actual
$interval= DateInterval::createFromDateString('300 seconds'); // establecer intervalo de tiempo
$date_expiration = new DateTime();
$date_expiration->add($interval); // agregar segundos

$date = new DateTime(); // fecha de creacion

//dd($_GET);
$_SESSION['codigo'] = CodeVerifyUser::generar_codigo_verificacion(); // crear codigo de verificacion

$body = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <div>
        <p>Estimado/a {$_SESSION['nombre']}</p>
        <p>Gracias por registrarte en Ahmundo.com. Para verificar tu cuenta, por favor ingresa el siguiente código de verificación:</p>
        <p>Código de verificación: {$_SESSION['codigo']}</p>
        <p>No compartas este código con nadie, ya que es confidencial y se utiliza para verificar tu identidad. Si no intentaste registrarte en nuestro sitio, por favor ignora este correo electrónico.</p>
        <p>Gracias</p>
        <p>Ahmundo.com</p>
    </div>
</body>
</html>";

$code_verify = new CodeVerifyUser();

$result = $code_verify->updateCodeVerification(
    $_SESSION['codigo'],
    $_SESSION['id_user'], 
    $time_expiration, 
    $date->format("Y-m-d h:i:s"),
    $date_expiration->format("Y-m-d h:i:s")
);

$subject = 'Código de verificación para tu cuenta';

if($result){
    $email = new Email($params['email'], $subject, $body, $_SESSION['nombre']); 

    $email->sendEmail();
}else{
    echo 'Lo siento';
}
