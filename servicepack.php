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
  <title>Service Pack - Branar, C.A.</title>
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
  <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/servicepack.php">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Service Pack - Branar, C.A.">
  <meta property="og:description" content="Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos">
  <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/servicepack.php">
  <meta property="og:site_name" content="Service Pack - Branar, C.A.">
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
    <div class="banner-top" style="background-image: url(./assets/images/social-media.jpg)">
      <div></div>
      <h1>ServiPack: Soluciones Integrales para Empresas Modernas</h1>
    </div>

    <section class="info-service-art">
      <article>
        <h2>Soluciones Empresariales Personalizadas</h2>
        <p>
          Nuestro equipo de expertos en tecnología se encarga de desarrollar
          paquetes de servicios a medida que se ajusten a las necesidades
          únicas de tu empresa.
        </p>
      </article>
      <div class="aside_div border_img_wide">
        <div class="container_circle">
          <img src="./nuevas/servicio.jpg" class="img_circle" alt="Branar impresoras Epson" />
        </div>
      </div>
    </section>

    <section class="graphic_design">
      <header>
        <h3>Aumenta la Productividad</h3>
        <p>
          Con ServiPack, optimiza tus procesos internos y mejora la eficiencia
          de tu negocio. 💼
        </p>
      </header>
      <article class="content-design">
        <img src="./assets/images/service.png" class="img" alt="Diseño grafico" />
        <section class="list-promo">
          <div>
            <span>⚙️</span>
            <p>
              <strong>Digitalización y Automatización:</strong> Optimiza tus
              procesos empresariales con nuestras soluciones avanzadas de
              digitalización y automatización.
            </p>
          </div>
          <div>
            <span>🔒</span>
            <p>
              <strong>Seguridad Informática Avanzada:</strong> Protege tu
              empresa de amenazas cibernéticas con nuestra seguridad
              informática avanzada.
            </p>
          </div>
          <div>
            <span>🌐</span>
            <p>
              <strong>Gestión de Infraestructura Tecnológica:</strong> Mantén
              tus sistemas y equipos en óptimo funcionamiento con nuestro
              servicio de gestión de infraestructura tecnológica.
            </p>
          </div>
          <div>
            <span>🤝</span>
            <p>
              <strong>Asesoría en Tecnología:</strong> Incorpora tecnología de
              vanguardia en tu empresa con la asesoría de nuestros expertos.
            </p>
          </div>
          <div>
            <span>💻</span>
            <p>
              <strong>Soporte Especializado para Software: </strong> Cuenta
              con nuestro equipo de soporte especializado en una amplia gama
              de software empresarial.
            </p>
          </div>
        </section>
      </article>
    </section>

    <article class="contactanos">
      <div>
        <h2>
          ¡Contáctanos hoy mismo y déjanos encargarnos del mantenimiento y
          reparación de tus equipos!
        </h2>
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