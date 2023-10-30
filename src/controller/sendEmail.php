<?php

require_once '../../vendor/autoload.php';
require_once '../model/Email.php';
require_once '../model/Navegation.php';

define('CLAVE', '6LcRLuEoAAAAADBWAPTI2i8gQL7_8Mwb_ilseLG7');

$token = $_POST['token'];
$action = $_POST['action'];

$cu = curl_init();
curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($cu, CURLOPT_POST, 1);
curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array(
  'secret' => CLAVE, 
  'response' => $token
)));
curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($cu);
curl_close($cu);

$datos = json_decode($response, true);
print_r($datos);
if ($datos['success'] == 1 && $datos['score'] >= 0.5) {
  $email = Navegation::validateInput($_POST['email']);

  if ($datos['action'] == 'courses' && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) ) { # Correo para los registros de Cursos Branar
    echo 'courses';

    $asunto = 'Inscripcion de cursos';
    $full_name = Navegation::validateInput($_POST['full_name']);
    $dni = Navegation::validateInput($_POST['dni']);
    $phone_number = Navegation::validateInput($_POST['phone_number']);
    $address = Navegation::validateInput($_POST['address']);
    $position = Navegation::validateInput($_POST['position']);
    $enterprise = Navegation::validateInput($_POST['enterprise']);
    $availability = Navegation::validateInput($_POST['availability']);
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
            <pstyle='margin-bottom: 1px'>Estimado/a {$full_name}</p>
            <pstyle='margin-bottom: 1px'>¡Gracias por registrarse en el curso con Branar, C.A.! Estamos emocionados de tenerlo como parte de nuestra comunidad educativa.</pstyle=>
            </br>
            <p style='margin-bottom: 1px'><strong>Correo Electrónico:</strong> {$email}</p>
            <p style='margin-bottom: 1px'><strong>Nombre Completo:</strong> {$full_name}</p>
            <p style='margin-bottom: 1px'><strong>DNI:</strong> {$dni}</p>
            <p style='margin-bottom: 1px'><strong>Número de Teléfono:</strong> {$phone_number}</p>
            <p style='margin-bottom: 1px'><strong>Dirección:</strong> {$address}</p>
            <p style='margin-bottom: 1px'><strong>Cargo u Ocupación:</strong> {$position}</p>
            <p style='margin-bottom: 1px'><strong>Empresa:</strong> {$enterprise}</p>
            <p style='margin-bottom: 1px'><strong>Disponibilidad:</strong> {$availability}</p>
            </br>
            <p>Pronto recibirá más detalles, incluida la fecha de inicio, el horario y los materiales del curso. Si tiene alguna pregunta antes del inicio del curso, no dude en ponerse en contacto con nosotros.</p>
            </p>Esperamos que este curso sea una experiencia educativa enriquecedora para usted. ¡Esperamos verlo pronto en nuestras aulas virtuales!</p>
            </br>
            <p style='margin-bottom: 1px'>Atentamente</p>
            <p style='margin-bottom: 1px'>Atencion al cliente <atencionalcliente@branar.com></p>
            <p style='margin-bottom: 1px'>Branar, C.A.</p>
            <p style='margin-bottom: 1px'>04127894563</p>
        </div>
    </body>
    </html>";
    
    $email = new Email($email, $asunto, $body, $full_name); 

    $email->sendEmail();
  }elseif ($datos['action'] != 'courses' && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) { # Correo para los planes de servicio
    
    $asunto = '¡Bienvenido a nuestros planes de servicio personalizados!';
    $first_name = Navegation::validateInput($_POST['first_name']);
    $last_name = Navegation::validateInput($_POST['last_name']);
    $comment = Navegation::validateInput($_POST['comment']);
    $plan = Navegation::validateInput($_POST['plan']);

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
            <p style='margin-bottom: 1px'>Estimado/a {$first_name} {$last_name}</p>
            <p style='margin-bottom: 1px'>Es un placer darle la bienvenida a nuestros planes de servicio personalizados. Agradecemos su interés en Branar, C.A. Estamos comprometidos a brindarle las soluciones más efectivas y adaptadas a sus necesidades.</p>
            </br>
            <p style='margin-bottom: 1px'><strong>Nombre:</strong> {$first_name}</p>
            <p style='margin-bottom: 1px'><strong>Apellido:</strong> {$last_name}</p>
            <p style='margin-bottom: 1px'><strong>Correo Electrónico:</strong> {$email}</p>
            <p style='margin-bottom: 1px'><strong>Plan Seleccionado:</strong> {$plan}</p>
            <p style='margin-bottom: 1px'><strong>Comentario Adicional:</strong> {$comment}</p>
            </br>
            <p>Nuestro equipo revisará sus preferencias y requisitos detenidamente. En breve, uno de nuestros expertos se pondrá en contacto con usted para discutir los detalles específicos del plan y responder a cualquier pregunta que pueda tener.</p>
            </p>Gracias por confiar en Branar, C.A. para sus necesidades de servicio. Esperamos tener una colaboración productiva y exitosa.</p>
            </br>
            <p style='margin-bottom: 1px'>Atentamente</p>
            <p style='margin-bottom: 1px'>Atencion al cliente</p>
            <p style='margin-bottom: 1px'>Branar, C.A.</p>
            <p style='margin-bottom: 1px'>04127894563</p>
        </div>
    </body>
    </html>";

    $email = new Email($email, $asunto, $body, $first_name.' '.$last_name); 

    $email->sendEmail();
  }
}else{
  echo "ERES UN ROBOT";
}
