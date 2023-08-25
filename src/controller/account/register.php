<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\User;
use Branar\Blog\model\Email;
use Branar\Blog\model\CodeVerifyUser;

// dd($_POST);

// Establecer zona horaria por defecto
date_default_timezone_set("America/Caracas");

// Validar si existe un submit
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
	$first_name = Navegation::validateInput($_POST['first_name']);
	$last_name = Navegation::validateInput($_POST['last_name']);
	$email = Navegation::validateInput($_POST['email']);
	$username = Navegation::validateInput($_POST['username']);
	$password = Navegation::validateInput($_POST['password']);
	$status	= 'disabled';
	$role_por_defecto = 2;

	// Instancia de User
	$user = new User($username, $first_name, $last_name, $email);

	// verificar si el username o email existen
	$user->verifyUserExist();

	// dd($user->get_message());

	// si no se encuentra ningun usuario registrado con esos datos de username y email
	if ($user->get_message()['response'] == false) {

		$user->createUser($status, $role_por_defecto, $password);
		echo '<br>resultado al crear usuario';
		echo '<pre>';
		print_r($user->get_message());
		echo '</pre>';

		// Si se crea el usuario con exito
		if ($user->get_message()['response'] == true) {
			$_SESSION['codigo'] = CodeVerifyUser::generar_codigo_verificacion(); // crear codigo de verificacion

			$time_expiration = 300;
			
			// Sumar el tiempo de expiracion a la fecha actual
			$interval= DateInterval::createFromDateString('300 seconds'); // establecer intervalo de tiempo
			$date_expiration = new DateTime();
			$date_expiration->add($interval); // agregar segundos

			$date = new DateTime(); // fecha de creacion

			// Obtener datos del ultimo usuario registrado
			$lastUser = $user->getLastDataUser();
			$nombre_completo = "{$lastUser['first_name']} {$lastUser['last_name']}";

			echo '<br>obtener ultimo usuario';
			echo '<pre>';
			print_r($lastUser);
			echo '</pre>';

			$code_verify_user = new CodeVerifyUser();
			// insertar datos del token de autenticacion
			$create_code_verify = $code_verify_user->setCodeVerifyUser(
				$_SESSION['codigo'], 
				$lastUser['id'], 
				$time_expiration,
				$date->format("Y-m-d h:i:s"),
				$date_expiration->format("Y-m-d h:i:s")
			);

			echo '<br>codigo de verificacion';
			echo '<pre>';
			print_r($create_code_verify);
			echo '</pre>';

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
						<p>Estimado/a $nombre_completo</p>
						<p>Gracias por registrarte en nuestro blog. Para verificar tu cuenta, por favor ingresa el siguiente código de verificación:</p>
						<p>Código de verificación: {$_SESSION['codigo']}</p>
						<p>No compartas este código con nadie, ya que es confidencial y se utiliza para verificar tu identidad. Si no intentaste registrarte en nuestro sitio, por favor ignora este correo electrónico.</p>
						<p>Gracias</p>
						<p>branar.com</p>
					</div>
				</body>
				</html>";

				$subject = 'Código de verificación para tu cuenta';

				$mail = new Email($email, $subject, $body, $nombre_completo); 

				$_SESSION['correo'] = $email;
				$_SESSION['nombre'] = $nombre_completo;
				$_SESSION['subject'] = $subject;
				$_SESSION['id_user'] = $lastUser['id'];
				
				$mail->sendEmail();
			}else{
				dd($user->get_message());
			}

		} else {
			dd($user->get_message());
		}
	}
