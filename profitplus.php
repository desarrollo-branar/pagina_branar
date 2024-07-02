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
  <title>Profit Plus | Branar C.A.</title>
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
  <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/profitplus.php">
  <meta property="og:locale" content="es_VE">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Profit Plus | Branar C.A.">
  <meta property="og:description" content="Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos">
  <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/profitplus.php">
  <meta property="og:site_name" content="Profit Plus | Branar C.A.">
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
    <div class="banner-top" style="background-image: url(./nuevas/profit.jpg)">
      <div></div>
      <h1>
        Instalación y Soporte Profitplus: Optimiza tus Procesos de Gestión
      </h1>
    </div>

    <section class="info-service-art">
      <article>
        <h2>Implementación Personalizada</h2>
        <p>
          Nos encargamos de instalar y configurar Profitplus para que se
          ajuste a las necesidades particulares de tu empresa.
        </p>
      </article>
      <img src="./assets/images/2kdoce.png" alt="Diseño Responsive para tus aplicaciones web" />
    </section>

    <section class="service_article">
      <!-- <header class="sec_header">
            <h3>Soporte Técnico Continuo</h3>
            <p>Nuestro compromiso no termina con la instalación y capacitación. </p>
        </header> -->
      <article class="article_image_list general-margin">
        <section class="list">
          <header class="sec_header">
            <h3>Formación y Capacitación:</h3>
            <p>
              Potencia el rendimiento de tu equipo con nuestra capacitación
              especializada en Profitplus. Ofrecemos sesiones de formación
              diseñadas para mejorar la productividad y eficiencia de tu
              personal en el uso del software. A través de nuestros programas
              de capacitación, tus colaboradores aprenderán a aprovechar al
              máximo las herramientas y funcionalidades de Profitplus,
              permitiéndoles tomar decisiones más informadas y agilizar los
              procesos administrativos.
            </p>
          </header>
        </section>
        <div class="aside_div border_img_large">
          <img src="assets/images/women.png" class="img_women" alt="Instructor Profit Plus" />
        </div>
      </article>
    </section>

    <section class="service_article">
      <header class="sec_header">
        <h3>Soporte Técnico Continuo</h3>
        <p>
          Nuestro compromiso no termina con la instalación y capacitación.
        </p>
      </header>
      <article class="article_image_list">
        <img src="assets/images/laptop.png" alt="Sistema Profit Plus 2kdoce" style="width: 100%; height: 100%" class="laptop" />
        <section class="list">
          <div>
            <span>✅</span>
            <p>
              Instalación e implementación del software en las estaciones de
              trabajo.
            </p>
          </div>
          <div>
            <span>✅</span>
            <p>Configuración de la plataforma.</p>
          </div>
          <div>
            <span>✅</span>
            <p>Evaluación de las herramientas administrativas.</p>
          </div>
          <div>
            <span>✅</span>
            <p>Adecuación de procesos contables y reportes.</p>
          </div>
          <div>
            <span>✅</span>
            <p>Control de la base de datos.</p>
          </div>
          <div>
            <span>✅</span>
            <p>Modificación de módulos.</p>
          </div>
          <div>
            <span>✅</span>
            <p>Registro de datos</p>
          </div>
        </section>
      </article>
    </section>

    <article class="contactanos">
      <div>
        <h2>¡Que esperas para potenciar tu empresa! contactanos ahora</h2>
      </div>
      <div>
        <a href="https://wa.me/message/GZDFOHPWZTTAB1" class="whatsapp" aria-label="Telefono de contacto">
          <i class="fab fa-whatsapp"></i>
        </a>
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