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
  <title>CiberSeguridad | Branar C.A.</title>
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

  <meta name="description" content="¿Desea invertir en Tecnologias de Información? Branar C.A. brinda servicios Avanzados en Tecnología a pequeñas y medianas empresas venezolanas...">
  <meta name="keywords" content="empresas en tecnologia,servicios en tecnologia,empresas informaticas">
  <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/ciber_seguridad.php">
  <meta property="og:locale" content="es_VE">
  <meta property="og:type" content="website">
  <meta property="og:title" content="CiberSeguridad | Branar C.A.">
  <meta property="og:description" content="¿Desea invertir en Tecnologias de Información? Branar C.A. brinda servicios Avanzados en Tecnología a pequeñas y medianas empresas venezolanas...">
  <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/ciber_seguridad.php">
  <meta property="og:site_name" content="CiberSeguridad | Branar C.A.">
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
  <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] ?>/assets/css/socialmedia.css">
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

  <meta name="google-site-verification" content="24wjTYuMbQJIbk8lDwHf2x-FJY-INU-8Ifl9ao7-cpM" />
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GHTKM" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php include_once('./includes/navbar.php'); ?>

  <main>
    <div class="banner-top" style="background: url(<?= $_ENV['BASE_URL'] ?>/assets/images/banners/binary-code-background.jpg)">
      <div></div>
      <h1>CiberSeguridad: Protege lo que más importa</h1>
    </div>

    <section class="info-service-art">
      <article>
        <h2>Defiende tu Mundo Digital</h2>
        <p>Las amenazas cibernéticas evolucionan constantemente. Protege tu red y tus datos con una defensa avanzada que se anticipa a los ataques. Tu tranquilidad digital está asegurada.</p>
      </article>
      <img src="<?= $_ENV['BASE_URL'] ?>/assets/images/sentinelhost_top.png" alt="Diseño Responsive para tus aplicaciones web" />
    </section>

    <section class="graphic_design">
      <header>
        <h3>SENTINEL, TU ESCUDO DIGITAL</h3>
        <p>Sentinel es una solución de ciberseguridad avanzada diseñada para ofrecer una protección integral a tu red. Con una combinación de tecnología de vanguardia y capacidades avanzadas, Sentinel asegura que tu infraestructura digital esté siempre un paso adelante de las amenazas.</p>
      </header>
    </section>

    <section class="graphic_design">
      <header>
        <h3>Beneficios de Sentinel:</h3>
      </header>
      <article class="content-design">
        <img src="<?= $_ENV['BASE_URL'] ?>/assets/images/sentinelhost.png" class="img" alt="Diseño grafico" />
        <section class="list-promo">
          <div>
            <span>🕒</span>
            <p>
              <strong>Monitorización en tiempo real:</strong> Mantén tu red vigilada 24/7.
            </p>
          </div>
          <div>
            <span>🛡️</span>
            <p>
              <strong>Análisis de amenazas:</strong> Identifica patrones sospechosos y comportamientos anómalos.
            </p>
          </div>
          <div>
            <span>🤖</span>
            <p>
              <strong>Automatización de respuestas:</strong> Responde rápidamente a incidentes con acciones automatizadas.
            </p>
          </div>
          <div>
            <span>📊</span>
            <p>
              <strong>Informes detallados:</strong> Obtén información clara y precisa sobre la seguridad de tu red.
            </p>
          </div>
          <div>
            <span>🌐</span>
            <p>
              <strong>Soporte certificado internacional:</strong> Confía en nuestro equipo de expertos para proteger tu infraestructura.
            </p>
          </div>
        </section>
      </article>
    </section>

    <section class="info-service-art">
      <article>
        <h2>No comprometas tu seguridad. Confía en Sentinel.</h2>
        <p>Sentinel es tu aliado en la lucha contra el cibercrimen. Con tecnología avanzada y un equipo de soporte certificado, tu red estará protegida contra cualquier amenaza. <a href="https://wa.link/rc1mal" target="_blink">Contactanos ahora</a>.</p>
      </article>
      <img src="<?= $_ENV['BASE_URL'] ?>/assets/images/laptop_1.jpg" alt="Diseño Responsive para tus aplicaciones web" />
    </section>
  </main>

  <?php include_once('./includes/footer.php'); ?>

  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- cdn Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- scripts -->
  <script src="./assets/js/main.js"></script>
</body>

</html>