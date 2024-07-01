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
  <title>Infraestructura | Branar C.A.</title>
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
  <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/infraestructure.php">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Infraestructura | Branar C.A.">
  <meta property="og:description" content="Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos">
  <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/infraestructure.php">
  <meta property="og:site_name" content="Infraestructura | Branar C.A.">
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
  <link rel="stylesheet" type="text/css" href="<?= $_ENV['BASE_URL'] ?>/assets/css/utils.css">
  <link rel="stylesheet" type="text/css" href="<?= $_ENV['BASE_URL'] ?>/assets/css/infraestructure.css" />
  <link rel="stylesheet" href="<?= $_ENV['BASE_URL'] ?>/assets/css/cards.css" />

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
    <div class="banner-top" style="background-image: url(./assets/images/connection-industry.jpeg)">
      <div></div>
      <h1>
        Infraestructura de Empresas: Potencia tu Negocio con la Mejor Base
        Tecnológica
      </h1>
    </div>

    <section class="info-service-art">
      <article>
        <h2>
          Potencia tu negocio con nuestra infraestructura y virtualización
        </h2>
        <p>
          Diseñamos, implementamos y mantenemos redes seguras y confiables
          para que tu empresa pueda funcionar sin interrupciones.
        </p>
      </article>
      <img src="./assets/images/infraestructure.png" alt="Infraestructura Branar" />
    </section>

    <header class="header-serv">
      <h3>
        Principales Servicios de Infraestructura Tecnológica: Diseñados para
        tu Éxito
      </h3>
    </header>

    <section class="wrapper-cards">
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/diagramacion.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header">Diagramación de la red</div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Creamos estructuras de red eficientes y escalables para
                optimizar la conectividad y el flujo de datos en tu empresa.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/servidores3.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header">
                Instalación de cableado estructurado
              </div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Garantizamos una infraestructura de cableado ordenada y de
                alta calidad para mantener la estabilidad y el rendimiento de
                tus sistemas.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/servidores.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header">
                Instalación de redes inalámbricas (puntos de acceso)
              </div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Implementamos redes inalámbricas seguras y de alto rendimiento
                para facilitar la movilidad dentro de tu espacio de trabajo.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/servidores2.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header">
                Formato e instalación de sistema operativo para servidores
              </div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Configuramos y optimizamos los sistemas operativos de tus
                servidores para un rendimiento óptimo.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/admin.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header">
                Administración de servidores
              </div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Monitorizamos y gestionamos tus servidores para garantizar su
                funcionamiento continuo y la seguridad de tus datos.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/nube.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header">
                Migración de la información a servicios en la nube
              </div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Facilitamos la transición hacia la nube para que puedas
                acceder a tus datos desde cualquier lugar y mejorar la
                eficiencia operativa.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/respaldo.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header">
                Control de la actividad de la red así como en sus conexiones
              </div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Implementamos respaldos automatizados para proteger tu
                información ante posibles fallos o pérdidas.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/control.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header"></div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Monitoreamos y aseguramos la actividad de tu red, garantizando
                la seguridad y la eficiencia de tus operaciones.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <header class="cont_title_link">
      <h2>Socio de Microsoft</h2>
      <p>Descubre nuestra asociación con Microsoft <a href="https://appsource.microsoft.com/es-es/marketplace/partner-dir/19ae6dfb-29ff-4936-acc0-7fc07dfba4a4/overview" aria-label="aquí" target="_blink">aquí</a></p>
    </header>


    <section class="service-microsoft">
      <div>
        <img src="./assets/images/ms-365.jpg" alt="Infraestructura Branar" />
      </div>
      <article>
        <h2>
          Licencias y Servicios Microsoft: Maximiza el Potencial de tu Empresa
        </h2>
        <p>
          Maximiza el Potencial de tu Empresa con Licencias y Servicios
          Microsoft. Ofrecemos una amplia gama de soluciones, desde licencias
          de software hasta servicios de correo electrónico, para potenciar la
          productividad y el crecimiento de tu negocio."
        </p>
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