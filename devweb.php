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
  <title>Desarrollo Web | Branar C.A.</title>
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
  <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/devweb.php">
  <meta property="og:locale" content="es_VE">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Desarrollo Web | Branar C.A.">
  <meta property="og:description" content="Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos">
  <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/devweb.php">
  <meta property="og:site_name" content="Desarrollo Web | Branar C.A.">
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
    <div class="banner-top" style="background-image: url(./assets/images/devweb.jpg)">
      <div></div>
      <h1>Desarrollo Web: Tu Presencia Online con Impacto</h1>
    </div>

    <section class="info-service-art">
      <article>
        <h2>Lleva tu negocio al mundo digital</h2>
        <p>
          Conviértete en una presencia destacada en línea y alcanza a tu
          audiencia de manera efectiva. ¡Potencia tu crecimiento y expande tus
          horizontes en el mundo digital! 🎯
        </p>
      </article>
      <div class="aside_div border_img_wide">
        <img src="./nuevas/dis.png" alt="Diseño Responsive para tus aplicaciones web" />
      </div>
    </section>

    <section class="graphic_design">
      <header>
        <h3>¿Por qué elegir nuestro servicio de Desarrollo Web?</h3>
      </header>
      <article class="content-design">
        <img src="./nuevas/responsive.png" class="img" alt="Diseño grafico" />
        <section class="list-promo">
          <div>
            <span>🔍</span>
            <p>
              <strong>Experiencia y Expertise:</strong> Nuestro equipo de
              diseñadores y desarrolladores web cuenta con amplia experiencia
              en las últimas tendencias y tecnologías, asegurando resultados
              de alta calidad. 📚
            </p>
          </div>
          <div>
            <span>🎯</span>
            <p>
              <strong>Enfoque en el Usuario:</strong> Cada elemento está
              cuidadosamente diseñado para facilitar la navegación, la
              interacción y la conversión. 😀
            </p>
          </div>
          <div>
            <span>📈</span>
            <p>
              <strong>Enfoque en los Resultados:</strong> Desarrollamos sitios
              web que generan leads, aumentan las conversiones y fortalecen la
              presencia de tu marca. 🎯
            </p>
          </div>
          <div>
            <span>✨</span>
            <p>
              <strong>Personalización Total:</strong> Entendemos que cada
              negocio es único. Por eso, nos aseguramos de que cada sitio web
              sea completamente personalizado
            </p>
          </div>
          <div>
            <span>📱</span>
            <p>
              <strong>Optimización para Móviles:</strong> Todos nuestros
              sitios web son responsivos, lo que significa que se adaptan
              perfectamente a dispositivos móviles. 🚀
            </p>
          </div>
          <div>
            <span>🌐</span>
            <p>
              <strong>Integración con Redes Sociales:</strong> Facilitamos la
              integración de tus redes sociales en tu sitio web, lo que te
              permite ampliar tu alcance y aumentar la interacción con tus
              seguidores. 🚀
            </p>
          </div>
        </section>
      </article>
    </section>

    <section class="wrapper-cards">
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/diseno.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header">
                Diseño Web Creativo y Personalizado
              </div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Nuestros diseñadores trabajan en estrecha colaboración contigo
                para crear una experiencia web única y cautivadora.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/responsive.png)"></div>
            <div class="front__content">
              <div class="front__content--header">
                Desarrollo Responsivo y Optimizado
              </div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Creamos sitios web que se adaptan a diferentes dispositivos y
                tamaños de pantalla, garantizando una experiencia de usuario
                óptima tanto en computadoras de escritorio como en
                dispositivos móviles.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(./nuevas/dis.png)"></div>
            <div class="front__content">
              <div class="front__content--header">
                Integración de Funcionalidades Avanzadas
              </div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Incorporamos funcionalidades avanzadas según tus necesidades,
                como formularios de contacto, chat en línea, sistemas de
                reservas, carritos de compras y más.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container_card">
        <div class="card_content">
          <div class="front_card">
            <div class="front__img" style="background-image: url(assets/images/social-media.jpg)"></div>
            <div class="front__content">
              <div class="front__content--header">Optimización para SEO</div>
            </div>
          </div>
          <div class="back_card">
            <div class="back__content">
              <p>
                Implementamos estrategias de optimización para motores de
                búsqueda (SEO) para mejorar la visibilidad de tu sitio web en
                los resultados de búsqueda, lo que te ayudará a atraer más
                tráfico y clientes potenciales.
              </p>
            </div>
          </div>
        </div>
      </div>
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