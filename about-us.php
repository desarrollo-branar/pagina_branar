<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre nosotros | Branar C.A.</title>
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
    <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/about-us.php/">
    <meta property="og:locale" content="es_VE">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sobre nosotros | Branar C.A.">
    <meta property="og:description" content="Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos">
    <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/about-us.php/">
    <meta property="og:site_name" content="Sobre nosotros | Branar C.A.">
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

    <!-- Required Core Stylesheet -->
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">

    <!-- Optional Theme Stylesheet -->
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">

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
            <h1>Sobre Nosotros: Potenciando tu Éxito en el Mundo Digital</h1>
        </div>

        <section class="info-service-about">
            <article>
                <p>¡Bienvenido a Branar, tu aliado tecnológico en el camino hacia el éxito! Somos una empresa venezolana dedicada a ofrecer servicios de vanguardia en tecnología para otras empresas (Business to Business). Nuestra misión es brindarte soluciones integrales y personalizadas que impulsen tu negocio hacia nuevas alturas.</p>
            </article>
            <div class="border_img_large personal_image">
            </div>
        </section>

        <section class="box_container general-padding general-margin">
            <header class="sec_header">
                <h3 style="color: white;">Nuestra Pasión por la Tecnología</h3>
            </header>
            <article class="box_info">
                <div style="margin-top: 12px;">
                    <img src="./assets/images/persons/10.png" alt="Personal Branar">
                </div>
                <div class="">
                    <p>En Branar, somos apasionados por la tecnología y creemos en su poder transformador para mejorar la eficiencia, productividad y presencia en el mundo digital. Con un equipo de expertos en constante actualización y conocimiento de las últimas tendencias, te ofrecemos soluciones innovadoras que se adaptan a tus necesidades únicas.</p>
                </div>
            </article>
        </section>

        <article class="text-cita general-margin general-padding">
            <p><strong>"En Branar, tu éxito es nuestra prioridad."</strong></p>
            <p> Permítenos ser parte de tu crecimiento y llevemos juntos tu negocio al siguiente nivel en el mundo digital. Confía en nosotros para impulsar tu éxito con tecnología de vanguardia y soluciones a la medida de tus sueños. ¡Juntos hacemos posible lo imposible!</p>
        </article>

        <section class="mision_vision general-margin general-padding " style="background-image: url(./nuevas/fondo3.jpg);">

            <article>
                <header>
                    <h3>Misión: Liderando la Transformación Tecnológica</h3>
                </header>
                <p>En Branar, nuestra misión es proporcionar a nuestros clientes soluciones en tecnologías de información actualizadas y personalizadas que abarquen el control de procesos, la comunicación, los sistemas de gestión y la seguridad de recursos. Nos dedicamos a optimizar la operatividad de cada negocio, ofreciendo ventajas competitivas para enfrentar las cambiantes variables del mercado.</p>
            </article>
            <article>
                <header>
                    <h3>Visión: Forjando un Futuro Tecnológico Brillante</h3>
                    <p>Nuestra visión es ser la empresa líder a la vanguardia del desarrollo tecnológico, anticipando y satisfaciendo las necesidades de nuestros clientes. Nos esforzamos por brindar productos y servicios de alto valor agregado en informática, comunicación y seguridad, permitiendo que las empresas aprovechen todo su potencial tecnológico.</p>
                </header>
            </article>
            <article class="valores">
                <header>
                    <h3>Valores: Nuestra Esencia</h3>
                </header>
                <ol>
                    <li><strong>Trabajo en Equipo:</strong> Juntos alcanzamos grandes logros y superamos desafíos, promoviendo una cultura de colaboración y sinergia en cada proyecto que emprendemos.</li>
                    <li><strong>Ética Profesional:</strong> Guiamos nuestras acciones con integridad y honestidad, respetando la confidencialidad y la privacidad de nuestros clientes.</li>
                    <li><strong>Respeto:</strong> Valoramos la diversidad, escuchamos a nuestros clientes y colaboradores con empatía, creando relaciones basadas en el respeto mutuo.</li>
                    <li><strong>Responsabilidad:</strong> Nos comprometemos con la excelencia y la puntualidad en cada entrega, asumiendo la responsabilidad de nuestras acciones y decisiones.</li>
                    <li><strong>Confianza:</strong> Construimos relaciones duraderas con nuestros clientes, brindando soluciones confiables y manteniendo la confianza depositada en nosotros.</li>
                </ol>
            </article>
        </section>

        <div class="container" style="margin-bottom: 24px;">
            <header class="sec_header">
                <h3 style="color: var(--light-blue);">Innovación y Tecnología: Nuestro Equipo, Nuestra Pasión</h3>
            </header>
            <div class="glide" style="position: relative">

                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <!--   <li class="glide__slide">
                        <img src="./assets/images/persons/1.png" alt="" style="width: 400px; height: 400px;">
                    </li>
                    <li class="glide__slide">
                        <img src="./assets/images/persons/2.png" alt="" style="width: 400px; height: 400px;">
                    </li>
                    <li class="glide__slide">
                        <img src="./assets/images/persons/3.png" alt="" style="width: 400px; height: 400px;">
                    </li> -->
                        <li class="glide__slide utils_paddindg">
                            <img src="./assets/images/persons/1.png" alt="" style="width: 100%; height: 100%;">
                        </li>
                        <li class="glide__slide utils_paddindg">
                            <img src="./assets/images/persons/3.png" alt="" style="width: 100%; height: 100%;">
                        </li>
                        <li class="glide__slide utils_paddindg">
                            <img src="./assets/images/persons/4.png" alt="" style="width: 100%; height: 100%;">
                        </li>
                        <li class="glide__slide utils_paddindg">
                            <img src="./assets/images/persons/5.png" alt="" style="width: 100%; height: 100%;">
                        </li>
                        <li class="glide__slide utils_paddindg">
                            <img src="./assets/images/persons/7.png" alt="" style="width: 100%; height: 100%;">
                        </li>
                        <li class="glide__slide utils_paddindg">
                            <img src="./assets/images/persons/8.png" alt="" style="width: 100%; height: 100%;">
                        </li>
                        <li class="glide__slide utils_paddindg">
                            <img src="./assets/images/persons/9.png" alt="" style="width: 100%; height: 100%;">
                        </li>
                        <li class="glide__slide utils_paddindg">
                            <img src="./assets/images/persons/11.png" alt="" style="width: 100%; height: 100%;">
                        </li>
                    </ul>
                </div>

                <div class="glide" style="position: initial">

                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-angle-left"></i></button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once(__DIR__ . '/includes/footer.php'); ?>

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Glide.js -->
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script>
        const config = {
            type: 'carousel',
            perView: 4,
            breakpoints: {
                1024: {
                    perView: 2
                },
                600: {
                    perView: 1
                }
            }
        };
        new Glide('.glide', config).mount()
    </script>

    <!-- cdn Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- scripts -->
    <script src="<?= $_ENV['BASE_URL'] ?>/assets/js/main.js"></script>
</body>

</html>