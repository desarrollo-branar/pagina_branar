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
    <title>Centro de Servicio Autorizado Epson | Branar C.A.</title>
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

    <meta name="description" content="Mantenga operativa su computadora con nuestros planes de contratación, realizamos el mantenimiento lógico y físico de su equipo">
    <meta name="keywords" content="mantenimiento de computadoras,instalacion de camaras de seguridad,manteniemiento preventivo y correctivo,soporte tecnico en computadoras hp">
    <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/csa.php">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Centro de Servicio Autorizado Epson | Branar C.A.">
    <meta property="og:description" content="Mantenga operativa su computadora con nuestros planes de contratación, realizamos el mantenimiento lógico y físico de su equipo">
    <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/csa.php">
    <meta property="og:site_name" content="Centro de Servicio Autorizado Epson | Branar C.A.">
    <meta property="article:modified_time" content="2021-05-11T04:12:39+00:00">
    <meta property="og:image" content="<?= $_ENV['BASE_URL'] ?>/assets/images/navbar-logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts (Preconnect) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Material Icons (Preload) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" media="print" onload="this.media='all'">

    <!-- CDN Bootstrap (Preload and Async) -->
    <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" media="print" onload="this.media='all'">

    <!-- styles -->
    <link rel="stylesheet" type="text/css" href="<?= $_ENV['BASE_URL'] ?>/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= $_ENV['BASE_URL'] ?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] ?>/assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?= $_ENV['BASE_URL'] ?>/assets/css/csa.css">
    <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] ?>/assets/css/utils.css">
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

    <!-- main -->
    <main>
        <!-- banner-top -->
        <div class="banner-top" style="background-image: url(./assets/images/printer-epson.jpg);">
            <div></div>
            <h1>Centro de Servicio Autorizado EPSON: Soluciones Confiables para tus Equipos</h1>
        </div>

        <!-- section -->

        <section class="container-service-csa">
            <article class="article-csa">
                <section>
                    <div>
                        <h2>Reparación y Mantenimiento Especializado</h2>
                    </div>
                    <p>Nuestro equipo de técnicos altamente capacitados se encarga de brindar servicios de reparación y mantenimiento para tus equipos EPSON, asegurando su óptimo rendimiento y prolongando su vida útil. 🔧</p>
                </section>
                <div class="aside_div border_img_wide">
                    <img src="./nuevas/imp.png" class="img_plana" alt="Branar impresoras Epson">
                </div>

            </article>

            <article class="services-csa">
                <header class="header-serv-csa">
                    <h2>Ofrecemos una amplia gama de servicios, incluyendo:</h2>
                </header>
                <section class="servicios-csa">
                    <article>
                        <div class="div_serv_csa" style="background-image: url(assets/images/printer-epson.jpg);">
                            <div>
                                <h3>Diagnóstico Preciso y Rápido</h3>
                                <i class="fa-solid fa-print"></i>
                            </div>
                            <p>Contamos con herramientas y conocimientos específicos para diagnosticar cualquier problema con tus impresoras y proyectores EPSON de manera rápida y precisa, ahorrándote tiempo y preocupaciones.</p>
                        </div>
                    </article>
                    <article>
                        <div class="div_serv_csa" style="background-image: url(assets/images/replacement.jpeg);">
                            <div>
                                <h3>Piezas y Repuestos Originales</h3>
                                <i class="fa-brands fa-searchengin"></i>
                            </div>
                            <p>Utilizamos únicamente piezas y repuestos originales de EPSON para asegurar la calidad y durabilidad de las reparaciones, evitando futuros inconvenientes.</p>
                        </div>
                    </article>
                    <article>
                        <div class="div_serv_csa" style="background-image: url(assets/images/satisfaction_warranty.jpeg);">
                            <div>
                                <h3>Garantía de Satisfacción</h3>
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <p>Nos enorgullecemos de ofrecer un servicio de calidad y una garantía de satisfacción para que puedas confiar en que tus equipos estarán en buenas manos.</p>
                        </div>
                    </article>
                </section>
            </article>

            <div class="seccion_link" style="margin-bottom: 34px;">
                <header class="cont_title_link">
                    <h2>Servicio Certificado EPSON</h2>
                    <p>Más sobre nuestra certificación <a href="https://epson.com.ve/servicelocator?productCode=SPT_C11CC86201#full" aria-label="aquí">aquí</a></p>
                </header>
                <div>
                    <img src="./assets/images/search_branar_csa.png" alt="" style="width: 100%;">
                </div>
            </div>

            <article class="list_service">
                <section class="content-design">
                    <div></div>
                    <section class="list-promo">
                        <div>
                            <span>✅</span>
                            <p><strong>Reparación Especializada:</strong> Servicios de reparación precisa y efectiva para tus equipos EPSON, con soluciones rápidas y profesionales.</p>
                        </div>
                        <div>
                            <span>✅</span>
                            <p><strong>Reemplazo de Piezas Defectuosas:</strong> Utilizamos solo piezas originales de EPSON para asegurar calidad y confiabilidad en las reparaciones</p>
                        </div>
                        <div>
                            <span>✅</span>
                            <p><strong>Actualización de Firmware y Software:</strong> Mantenemos tus equipos al día con las últimas versiones de firmware y software de EPSON.</p>
                        </div>
                        <div>
                            <span>✅</span>
                            <p><strong>Sustitución de Consumibles:</strong> Proporcionamos consumibles originales y reemplazamos componentes para un rendimiento óptimo.</p>
                        </div>
                        <div>
                            <span>✅</span>
                            <p><strong>Pruebas de Funcionamiento:</strong> Rigurosas pruebas antes de entregar tus equipos reparados, asegurando su correcto funcionamiento.</p>
                        </div>
                    </section>
                </section>
            </article>

            <article class="contactanos">
                <div>
                    <h2>¡Contáctanos hoy mismo y déjanos encargarnos del mantenimiento y reparación de tus equipos Epson!</h2>
                </div>
                <div>
                    <a href="https://wa.me/message/GZDFOHPWZTTAB1" class="whatsapp" aria-label="Telefono de contacto">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </article>
        </section>
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