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
  <title>Social Media | Branar C.A.</title>
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
  <link rel="canonical" href="<?= $_ENV['BASE_URL'] ?>/social-media.php">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Social Media | Branar C.A.">
  <meta property="og:description" content="Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos">
  <meta property="og:url" content="<?= $_ENV['BASE_URL'] ?>/social-media.php">
  <meta property="og:site_name" content="Social Media | Branar C.A.">
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
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  <script src="https://www.google.com/recaptcha/api.js?render=6Le2meAoAAAAAB2ezKyeu7asrxLJeUMqWQ9JUI-C"></script>
  <script>
    $(document).ready(function() {
      $('#button_plan_social_media').click(function(event) {
        event.preventDefault(); // Evita la acción predeterminada del botón

        grecaptcha.ready(function() {
          grecaptcha.execute('6Le2meAoAAAAAB2ezKyeu7asrxLJeUMqWQ9JUI-C', {
            action: 'plan_social_media'
          }).then(function(token) {
            // Agrega el token al formulario
            $('#form-plan-social-media').prepend(`<input type="hidden" name="token" value="${token}">`);
            $('#form-plan-social-media').prepend(`<input type="hidden" name="action" value="plan_social_media">`);

            // Envía el formulario por AJAX
            $.ajax({
              type: "POST",
              url: "./src/controller/sendEmail.php",
              data: $('#form-plan-social-media').serialize(), // Serializa el formulario
              success: function(response) {
                // Muestra la respuesta del servidor (éxito o error) en una ventana emergente
                alert(response);
                // Puedes redirigir aquí si es necesario
              },
              error: function(xhr, status, error) {
                // Maneja errores de AJAX, si es necesario
                console.log("Error: " + error);
              }
            });
          });
        });
      });
    });
  </script>

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
      <h1>
        SocialMedia: Conquista las Redes Sociales y Llega a Nuevos Clientes
      </h1>
    </div>

    <section class="info-service-art">
      <article>
        <h2>Estrategias de Contenido Impactantes</h2>
        <p>
          Creamos contenido creativo y atractivo que conecta con tu audiencia,
          aumentando el alcance y el compromiso en tus plataformas sociales.
          🎯
        </p>
      </article>
      <img src="./assets/images/design_responsive.png" alt="Diseño Responsive para tus aplicaciones web" />
    </section>

    <section class="graphic_design">
      <header>
        <h3>Campañas Publicitarias Efectivas</h3>
        <p>
          Aprovecha el potencial de la publicidad en redes sociales para
          llegar a nuevos clientes y generar conversiones. 💼
        </p>
      </header>
      <article class="content-design">
        <img src="./nuevas/90.png" class="img" alt="Diseño grafico" />
        <section class="list-promo">
          <div>
            <span>🎨</span>
            <p>
              <strong>Logotipos:</strong> Creamos logotipos únicos y
              representativos que destacan tu marca en el mercado.
            </p>
          </div>
          <div>
            <span>📑</span>
            <p>
              <strong>Catálogos, brochures, menú:</strong> Impresiona a tus
              clientes con materiales de marketing de alta calidad.
            </p>
          </div>
          <div>
            <span>📇</span>
            <p>
              <strong>Tarjetas de presentación:</strong> Diseñamos tarjetas
              profesionales y memorables para dejar una impresión duradera.
            </p>
          </div>
          <div>
            <span>🚩</span>
            <p>
              <strong>Banners, Flyers:</strong> Crea impacto con banners y
              flyers llamativos para promocionar tus productos o servicios.
            </p>
          </div>
          <div>
            <span>📸</span>
            <p>
              <strong>Diseño de feed:</strong> Mantén una estética visual
              coherente en tus redes sociales y refleja la identidad de tu
              marca.
            </p>
          </div>
          <div>
            <span>🏬</span>
            <p>
              <strong>Material POP:</strong> Potencia tus ventas con displays,
              posters y etiquetas que destacan tu marca en el punto de venta.
            </p>
          </div>
        </section>
      </article>
    </section>

    <section class="promotions-service">
      <header class="promotions-header">
        <h2>Impulsa tu Presencia en las Redes Sociales</h2>
      </header>
      <article class="promotions-container">
        <section class="promotion">
          <header>
            <h3>Plan Emprendedor</h3>
            <p>El impulso que necesitas para destacar en redes sociales</p>
          </header>

          <button type="button" class="button-promo" id="button_plan" data="1" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: white; font-weight: bold;">
            Contratar
          </button>
          <hr class="hr" />

          <div class="list-promo">
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p><strong>3 publicaciones semanales</strong></p>
            </div>
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p>
                <strong>3 publicaciones interactivas en historias</strong>
                (Semanales)
              </p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p>Efemérides</p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong>Métricas de crecimiento</strong> (Mensual)</p>
            </div>
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p><strong>Diseño de historias destacadas</strong> (5)</p>
            </div>
          </div>
        </section>
        <section class="promotion">
          <header>
            <h3>Plan Ejecutivo</h3>
            <p>Maximiza tu presencia en redes con el Plan Ejecutivo</p>
          </header>

          <button type="button" class="button-promo" id="button_plan" data="1" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: white; font-weight: bold;">
            Contratar
          </button>
          <hr class="hr" />

          <div class="list-promo">
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p><strong>4 publicaciones semanales</strong></p>
            </div>
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p>
                <strong>4 publicaciones interactivas en historias</strong>
                (Semanales)
              </p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p>Efemérides</p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong>Métricas de crecimiento</strong> (Mensual)</p>
            </div>
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p>
                <strong>Diseño de historias destacadas</strong> (5) y
                <strong>2 plantillas para historias</strong>
              </p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong>Atención al usuario</strong></p>
            </div>
          </div>
        </section>
        <section class="promotion">
          <header>
            <h3>Plan Profesional</h3>
            <p>Destaca entre la competencia con el Plan Profesional</p>
          </header>

          <button type="button" class="button-promo" id="button_plan" data="1" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: white; font-weight: bold;">
            Contratar
          </button>
          <hr class="hr" />

          <div class="list-promo">
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong>1 publicación diaria</strong></p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p>
                <strong>5 publicaciones interactivas en historias</strong>
                (Semanales)
              </p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p>Efemérides</p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong>Métricas de crecimiento</strong> (Mensual)</p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p>
                <strong>Diseño de historias destacadas</strong>,
                <strong>2 plantillas para historias</strong> y
                <strong>1 plantilla para feed</strong>
              </p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong>Campaña paga de ADS</strong></p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong>1 reels mensual</strong></p>
            </div>
          </div>
        </section>
      </article>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario de Servicio</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="./src/controller/sendEmail.php" method="post" id="form-plan-social-media">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="jhon" required>
                <label for="first_name">Nombre</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="jhon2" required>
                <label for="last_name">Apellido</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email2" placeholder="name@example.com" required>
                <label for="email2">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" name="comment" id="comment" placeholder="comment" required></textarea>
                <label for="comment">Comentario</label>
              </div>

              <div class="form-floating mb-3">
                <select class="form-select" name="plan" id="select_plan">
                  <option id="1" value="Plan Emprendedor - Social Media">Plan Emprendedor - Social Media</option>
                  <option id="2" value="Plan Ejecutivo - Social Media">Plan Ejecutivo - Social Media</option>
                  <option id="3" value="Plan Profesional - Social Media">Plan Profesional - Social Media</option>
                </select>
                <label for="floatingSelect">Plan</label>
              </div>

              <button type="button" class="btn btn-primary mt-3" id="button_plan_social_media">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <section class="info-service-art">
      <article>
        <h2>Gestión Integral de Redes Sociales</h2>
        <p>
          Nos encargamos de la planificación, publicación y análisis de tus
          redes sociales para que puedas enfocarte en hacer crecer tu negocio.
          📅
        </p>
      </article>
      <img src="./nuevas/redes.png" alt="Diseño Responsive para tus aplicaciones web" />
    </section>

    <section class="promotions-service">
      <header class="promotions-header">
        <h2>Potencia tu Marca con Nuestra Publicidad en Redes Sociales</h2>
      </header>
      <article class="promotions-container">
        <section class="promotion">
          <header>
            <h3>Paquete Lite</h3>
            <p>Llega a Nuevos Clientes con un Anuncio Potente</p>
          </header>

          <button class="button-promo">
            <a href="#">Contratar</a>
          </button>
          <hr class="hr" />

          <div class="list-promo">
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong> Diseño de 1</strong> (uno) <strong>Post</strong></p>
            </div>
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p>
                <strong>Alcance de 8000</strong> a
                <strong>23000 usuarios</strong>
              </p>
            </div>
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p><strong>5 días de publicidad</strong></p>
            </div>
          </div>
        </section>
        <section class="promotion">
          <header>
            <h3>Paquete Medium</h3>
            <p>Publicidad Efectiva para un Alcance Excepcional</p>
          </header>

          <button class="button-promo">
            <a href="#">Contratar</a>
          </button>
          <hr class="hr" />

          <div class="list-promo">
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong> Diseño de 2</strong> (dos) <strong>Post</strong></p>
            </div>
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p>
                <strong>Alcance de 18000</strong> a
                <strong>48000 usuarios</strong>
              </p>
            </div>
            <div>
              <i class="fa-solid fa-check orange"></i>
              <p><strong>5 días de publicidad</strong></p>
            </div>
          </div>
        </section>
        <section class="promotion">
          <header>
            <h3>Paquete Premium</h3>
            <p>Publicidad Estratégica para Crecimiento Sostenido</p>
          </header>

          <button class="button-promo">
            <a href="#">Contratar</a>
          </button>
          <hr class="hr" />

          <div class="list-promo">
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong> Diseño de 2</strong> (dos) <strong>Post</strong></p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p>
                <strong>Alcance de 38000</strong> a
                <strong>100000 usuarios</strong>
              </p>
            </div>
            <div>
              <i class="fa-solid fa-check green"></i>
              <p><strong>15 días de publicidad</strong></p>
            </div>
          </div>
        </section>
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