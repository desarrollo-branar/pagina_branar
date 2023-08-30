<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos">
    <meta name="keywords" content="instalacion de redes,redes informaticas,gestion de servidores">  
    <meta name="robots" content="noindex,nofollow">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/icons/favicon-32x32.png">

    <!-- styles -->
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/socialmedia.css">
    <link rel="stylesheet" href="../assets/css/utils.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

    <!-- fontawesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">
    
    <!-- cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<?php require_once 'templates/navbar.php'; ?>

<main>
    <div class="banner-top" style="background-image: url(../assets/images/banfondo.jpg);">
        <div></div>
        <h1>Conéctate con Nosotros: Responderemos a tus preguntas</h1>
    </div>

    <section class="form_contact">
        <header class="sec_header">
            <h3>Contacto</h3>
        </header>
        <form action="container">
            <div class="row">
                <div class="col-md-6 form-group my-3">
                    <label for="formGroupExampleInput" class="h5">Nombre y Apellido</label>
                    <input type="text" class="form-control form-control-lg" id="formGroupExampleInput" placeholder="Ejemplo: Juan Pérez">
                </div>
                <div class="col-md-6 form-group my-3">
                    <label for="formGroupExampleInput2" class="h5">Correo</label>
                    <input type="text" class="form-control form-control-lg" id="formGroupExampleInput2" placeholder="Ejemplo: correo@example.com">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group my-3">
                    <label for="formGroupExampleInput3" class="h5">Teléfono</label>
                    <input type="text" class="form-control form-control-lg" id="formGroupExampleInput3" placeholder="Ejemplo: 1234567890">
                </div>
                <div class="col-md-6 form-group my-3">
                    <label for="formGroupExampleInput4" class="h5">Asunto</label>
                    <select class="form-control form-control-lg" id="formGroupExampleInput4">
                        <option value="Solicitud de Cotización">Solicitud de Cotización</option>
                        <option value="Consulta Técnica">Consulta Técnica</option>
                        <option value="Soporte Técnico">Soporte Técnico</option>
                    </select>
                </div>
            </div>
            <div class="form-group my-3">
                <label for="formGroupExampleInput5" class="h5">Descripción</label>
                <textarea class="form-control form-control-lg" id="formGroupExampleInput5" rows="4" placeholder="Escribe aquí tu mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>
    
    <aside class="form_microsoft_365">
        <iframe width="100%" height="600px" src="https://forms.office.com/Pages/ResponsePage.aspx?id=-22uGf8pNkmswH_AffukpF6TCH2X5MdPk86IucDD6L5UNlMwTFFVVEEyMFc2SEI0RDk5R0hRMDA5OC4u&embed=true" frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
    </aside>

    <aside class="imagen general-padding">
        <img src="../assets/images/qr_formulario_contacto.png" alt="QR Formulario de Contacto">
    </aside>
    
    <article class="google-maps">
        <header class="sec_header">
            <h3>Ubicacion</h3>
        </header>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.2299702297105!2d-69.33538428524454!3d10.080233774413554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8767ab02d95f41%3A0x7704b1c5d591db07!2sBranar%20CA!5e0!3m2!1ses!2sve!4v1638893052516!5m2!1ses!2sve" width="90%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
    </article>
</main>

<?php require_once 'templates/footer.php'; ?>