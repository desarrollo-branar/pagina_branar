<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');
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

  <meta name="description" content="¿Desea invertir en Tecnologias de Información? Branar C.A. brinda servicios Avanzados en Tecnología a pequeñas y medianas empresas venezolanas...">
  <meta name="keywords" content="empresas en tecnologia,servicios en tecnologia,empresas informaticas">
  <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/projects/">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Branar - Servicios en Tecnologia">
  <meta property="og:description" content="¿Desea invertir en Tecnologias de Información? Branar C.A. brinda servicios Avanzados en Tecnología a pequeñas y medianas empresas venezolanas...">
  <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/projects/">
  <meta property="og:site_name" content="Branar - Servicios en Tecnologia">
  <meta property="article:modified_time" content="2021-05-11T04:12:39+00:00">
  <meta property="og:image" content="<?= $_ENV['BASE_URL'] ?>/assets/images/navbar-logo.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- favicon -->
  <link rel="shortcut icon" href="<?= $_ENV['BASE_URL'] ?>/assets/icons/favicon-32x32.png">

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
  <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] ?>/assets/css/projects.css">

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

  <header class="header">
    <nav class="navbar">
      <div class="cont-menu-logo">
        <a href="index.html"><img src="../assets/images/navbar-logo.png" class="menu-logo" alt="Branar - Servicios en Tecnologia | Logo" width="90" height="70"></a>
      </div>
      <ul class="nav">

        <li class="menu">
          <a href="#" class="line-down underline">Servicios<ion-icon name="caret-down-outline"></ion-icon></a>
          <ul class="submenu">
            <li><a href="csa.html" class="underline">Csa Epson<span class="icon-dot"></span></a></li>
            <li><a href="infraestructure.html" class="underline">Infraestructura<span class="icon-dot"></span></a></li>
            <li><a href="social-media.html" class="underline">Social Media<span class="icon-dot"></span></a></li>
            <li><a href="profitplus.html" class="underline">Profit Plus<span class="icon-dot"></span></a></li>
            <li><a href="servipack.html" class="underline">Service Pack<span class="icon-dot"></span></a></li>
            <li><a href="devweb.html" class="underline">Desarrollo Web<span class="icon-dot"></span></a></li>
          </ul>
        </li>
        <li><a href="aboutme.html" class="underline"><span class="icon-house"></span>Nosotros</a></li>
        <li><a href="contact.html" class="underline"><span class="icon-mail"></span>Contacto</a></li>
      </ul>
      <div class="menu-icon inactive">
        <ion-icon name="reorder-four-outline" id="icon-hamburguer"></ion-icon>
      </div>
    </nav>
    <div class="mobile-navbar">
      <ul>
        <li class="mobile-menu" id="submenu-down">
          <a href="#" class="line-down underline">Servicios<ion-icon name="caret-down-outline"></ion-icon></a>
          <ul class="mobile-submenu">
            <li><a href="csa.html" class="underline">Csa Epson <span class="icon-dot"></span></a></li>
            <li><a href="infraestructure.html" class="underline">Infraestructura <span class="icon-dot"></span></a></li>
            <li><a href="social-media.html" class="underline">SocialMedia<span class="icon-dot"></span></a></li>
            <li><a href="profitplus.html" class="underline">Profit Plus<span class="icon-dot"></span></a></li>
            <li><a href="servipack.html" class="underline">ServiPack<span class="icon-dot"></span></a></li>
            <li><a href="devweb.html" class="underline">Desarrollo Web <span class="icon-dot"></span></a></li>
          </ul>
        </li>
        <li><a href="aboutme.html" class="underline">Nosotros</a></li>
        <li><a href="contact.html" class="underline">Contacto</a></li>
      </ul>
    </div>
  </header>

  <?php
  include_once('../vendor/autoload.php');
  include_once('../src/includes/DB.php');

  use Parsedown;

  $db = new DB();
  $conn = $db->connect();
  $smtp = $conn->prepare('SELECT * FROM projects WHERE id = :id');
  $smtp->execute(['id' => $_GET['id']]);
  $project = $smtp->fetch(PDO::FETCH_OBJ);

  $parsedown = new Parsedown();
  ?>

  <main>
    <section class="project_bg_top" style="background-image: url(<?= $_ENV['BASE_URL'] ?>/assets/images/banfondo.jpg);">
      <header>
        <h1><?= htmlspecialchars($project->name, ENT_QUOTES, 'UTF-8') ?></h1>
        <p><?= htmlspecialchars($project->short_description, ENT_QUOTES, 'UTF-8') ?></p>
      </header>
    </section>

    <section class="project_details">
      <article class="detail">
        <div class="detail_image">
          <img src="<?= htmlspecialchars($project->image, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($project->name, ENT_QUOTES, 'UTF-8') ?>">
        </div>
        <div class="detail_content">
          <header>
            <h2>Descripción del proyecto</h2>
          </header>
          <div>
            <?= $parsedown->text($project->description) ?>
          </div>
        </div>
      </article>
    </section>
  </main>


  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <ul>
            <li>
              <a href="./">
                <img src="../assets/images/logo-para-fondo-oscuro.png" class="image_footer" alt="Branar - Servicios en Tecnología">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer_container">
      <div class="footer_column">
        <header>
          <h3>Unete a nosotros</h3>
        </header>
        <ul>
          <li><a href="csa.html" class="underline-footer">Csa Epson<span class="icon-dot"></span></a></li>
          <li><a href="infraestructure.html" class="underline-footer">Infraestructura<span class="icon-dot"></span></a></li>
          <li><a href="social-media.html" class="underline-footer">SocialMedia<span class="icon-dot"></span></a></li>
          <li><a href="profitplus.html" class="underline-footer">Profit Plus<span class="icon-dot"></span></a></li>
          <li><a href="servipack.html" class="underline-footer">ServiPack<span class="icon-dot"></span></a></li>
          <li><a href="devweb.html" class="underline-footer">Desarrollo Web<span class="icon-dot"></span></a></li>
        </ul>
      </div>
      <div class="footer_column">
        <header>
          <h3>Nosotros</h3>
        </header>
        <ul>
          <li><a href="aboutme.html" class="underline-footer">Quienes somos?<span class="icon-dot"></span></a></li>
          <li>
            <a href="https://www.facebook.com/BranarContacto" target="_blink" class="underline-footer">
              <ion-icon name="logo-facebook"></ion-icon>Facebook<span class="icon-dot"></span>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/contactobranar/" target="_blink" class="underline-footer">
              <ion-icon name="logo-instagram"></ion-icon>Instagram<span class="icon-dot"></span>
            </a>
          </li>
          <li>
            <a href="https://wa.link/rc1mal" target="_blink" class="underline-footer" aria-label="Telefono de contacto">
              <ion-icon name="logo-whatsapp"></ion-icon>Whatsapp<span class="icon-dot"></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="footer_column">
        <header>
          <h3>Soporte</h3>
        </header>
        <ul>
          <li><a href="contact.html" class="underline-footer">Contactanos<span class="icon-dot"></span></a></li>
        </ul>
      </div>
      <div class="footer_column">
        <header>
          <h3>Contacto</h3>
        </header>
        <div>
          <p>Teléfono: (0251) – 4453083 / 0412 - 3290719</p>
          <p>Dirección: Av. Libertador, Cruce Calle 41, Local 41-12. Barquisimeto-Lara.</p>
          <p>Correo: contacto@branar.com</p>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-sm-12 d-flex justify-content-center">
          <p style="color: #6c6c6c; text-align: center;">Branar, C.A. J-310451397 © Copyright 2023 Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- cdn Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- scripts -->
  <script src="<?= $_ENV['BASE_URL'] ?>/assets/js/main.js"></script>
</body>

</html>