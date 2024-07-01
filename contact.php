<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos | Branar C.A.</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= $_ENV['BASE_URL'] ?>/assets/icons/favicon-32x32.png">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-57GHTKM');
    </script>
    <!-- End Google Tag Manager -->

    <meta name="description" content="Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos">
    <meta name="keywords" content="instalacion de redes,redes informaticas,gestion de servidores">
    <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/contact.php">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Contactanos | Branar C.A.">
    <meta property="og:description" content="Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos">
    <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/contact.php">
    <meta property="og:site_name" content="Contactanos | Branar C.A.">
    <meta property="article:modified_time" content="2021-05-11T04:12:39+00:00">
    <meta property="og:image" content="<?= $_ENV['BASE_URL'] ?>/assets/images/navbar-logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- fontawesone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VE0TTSQRCJ"></script>

    <!-- styles -->
    <link rel="stylesheet" type="text/css" href="<?= $_ENV['BASE_URL'] ?>/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= $_ENV['BASE_URL'] ?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] ?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?= $_ENV['BASE_URL'] ?>/assets/css/socialmedia.css">
    <link rel="stylesheet" type="text/css" href="<?= $_ENV['BASE_URL'] ?>/assets/css/utils.css">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VE0TTSQRCJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-VE0TTSQRCJ');
    </script>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GHTKM" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include_once(__DIR__ . '/includes/navbar.php'); ?>

    <main>
        <div class="banner-top" style="background-image: url(./assets/images/banfondo.jpg);">
            <div></div>
            <h1>Conéctate con Nosotros: Responderemos a tus preguntas</h1>
        </div>
        <aside class="form_microsoft_365">
            <iframe width="100%" height="600px" src="https://forms.office.com/Pages/ResponsePage.aspx?id=-22uGf8pNkmswH_AffukpF6TCH2X5MdPk86IucDD6L5UNlMwTFFVVEEyMFc2SEI0RDk5R0hRMDA5OC4u&embed=true" frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh" title="Formulario de contacto microsoft 365" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
            <div class="qr_first">
                <img src="./assets/images/qr_formulario_contacto.png" class="qr_form" alt="QR Formulario de Contacto">
                <div>
                    <p>Comunicate con nosotros ahora mismo</p>
                </div>
            </div>
        </aside>

        <article class="section_contacto_information">
            <div class="ubication_map">
                <header class="sec_header">
                    <h2>Ubicacion</h2>
                </header>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.2299702297105!2d-69.33538428524454!3d10.080233774413554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8767ab02d95f41%3A0x7704b1c5d591db07!2sBranar%20CA!5e0!3m2!1ses!2sve!4v1638893052516!5m2!1ses!2sve" style="border: 0; width: 90%; height: 500px; margin: auto;" allowfullscreen="" loading="lazy" title="Ubicacion por google maps"></iframe>
            </div>
            <div class="contact_information">
                <div class="div_contact_information">
                    <i class="fa-solid fa-phone icon_contact"></i>
                    <p>Teléfono: (0251) - 4453083 / 0412 - 3290719</p>
                </div>
                <div class="div_contact_information">
                    <i class="fa-solid fa-house icon_contact"></i>
                    <p>Dirección: Av. Libertador, Cruce Calle 41, Local 41-12. Barquisimeto-Lara.</p>
                </div>
                <div class="div_contact_information">
                    <i class="fa-solid fa-envelope icon_contact"></i>
                    <p>Correo: contacto@branar.com</p>
                </div>
            </div>
        </article>
    </main>

    <?php include_once(__DIR__ . '/includes/footer.php'); ?>

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- cdn Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- scripts -->
    <script src="<?= $_ENV['BASE_URL'] ?>/assets/js/main.js"></script>
</body>

</html>