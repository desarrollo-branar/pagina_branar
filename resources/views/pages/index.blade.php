@extends('base')

@section('og_url', 'https://branar.com/')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
  <style>
    @media only screen and (max-width:400px) {

      /* Estilo para las imágenes dentro del carrusel */
      #carouselExampleInterval .carousel-inner .carousel-item img {
        max-width: 100%;
        height: auto;
        object-fit: contain;
      }
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

  <script src="https://www.google.com/recaptcha/api.js?render=6LcRLuEoAAAAANp06sYfR8ePjm_9D24T65mx-eU7"></script>

  <script>
    $(document).ready(function() {
      $('#button_courses').click(function(event) {
        event.preventDefault(); // Evita la acción predeterminada del botón

        grecaptcha.ready(function() {
          grecaptcha.execute('6LcRLuEoAAAAANp06sYfR8ePjm_9D24T65mx-eU7', {
            action: 'courses'
          }).then(function(token) {
            // Agrega el token al formulario
            $('#form-courses').prepend(`<input type="hidden" name="token" value="${token}">`);
            $('#form-courses').prepend(`<input type="hidden" name="action" value="courses">`);

            // Envía el formulario por AJAX
            $.ajax({
              type: "POST",
              url: "./src/controller/sendEmail.php",
              data: $('#form-courses').serialize(), // Serializa el formulario
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

      $('#button_plan_social_media').click(function(event) {
        event.preventDefault(); // Evita la acción predeterminada del botón

        grecaptcha.ready(function() {
          grecaptcha.execute('6LcRLuEoAAAAANp06sYfR8ePjm_9D24T65mx-eU7', {
            action: 'plan_social_media'
          }).then(function(token) {
            // Agrega el token al formulario
            $('#form-plan-social-media').prepend(`<input type="hidden" name="token" value="${token}">`);
            $('#form-plan-social-media').prepend(
              `<input type="hidden" name="action" value="plan_social_media">`);

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
@endsection

@section('carrousel')
  <!-- carrousel -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/banners/banner1.jpg') }}" class="d-block w-100" alt="Transformamos tu vision digital">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ asset('images/banners/banner2.jpg') }}" class="d-block w-100" alt="Grandes Oportunidades">
      </div>
    </div>
    <button class="carousel-control-prev button-carrousel-circle" type="button" data-bs-target="#carouselExampleInterval"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon button-carrousel-circle" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next button-carrousel-circle" type="button" data-bs-target="#carouselExampleInterval"
      data-bs-slide="next">
      <span class="carousel-control-next-icon button-carrousel-circle" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carrousel -->
@endsection

@section('content')

  <!-- Servicios -->
  <div class="encabezado">
    <h1>Tu mejor alternativa tecnológica</h2>
      <p class="subtitle">¡Optimiza y protege tu negocio con nuestros <strong>servicios especializados en
          tecnología</strong>!</p>
  </div>

  <section class="wrapper-cards">
    <div class="container_card">
      <div class="card_content">
        <div class="front_card">
          <div class="front__img" style="background-image: url({{ asset('images/cards/epson.jpg') }})"></div>
          <div class="front__content">
            <div class="front__content--header">Centro de Servicio Autorizado EPSON</div>
          </div>
        </div>
        <div class="back_card">
          <div class="back__content">
            <p>Confía en nuestro equipo para el mantenimiento y reparación de tus equipos. Garantizamos un rendimiento
              óptimo y mayor vida útil para tus dispositivos.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container_card">
      <div class="card_content">
        <div class="front_card">
          <div class="front__img" style="background-image: url({{ asset('images/cards/section_servi_pack.jpg')}})"></div>
          <div class="front__content">
            <div class="front__content--header">Service Pack</div>
          </div>
        </div>
        <div class="back_card">
          <div class="back__content">
            <p>Ofrecemos mantenimiento completo y actualización de software para tus equipos, asegurando un rendimiento
              óptimo y protección contra amenazas.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container_card">
      <div class="card_content">
        <div class="front_card">
          <div class="front__img" style="background-image: url({{ asset('images/cards/section_redes_inf.jpg') }})"></div>
          <div class="front__content">
            <div class="front__content--header">Redes e Infraestructura</div>
          </div>
        </div>
        <div class="back_card">
          <div class="back__content">
            <p>Diseñamos y construimos una infraestructura de red confiable y eficiente, para garantizar la conectividad y
              el flujo de datos en tu empresa.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container_card">
      <div class="card_content">
        <div class="front_card">
          <div class="front__img" style="background-image: url({{ asset('images/cards/social-media.jpg') }})"></div>
          <div class="front__content">
            <div class="front__content--header">Social Media</div>
          </div>
        </div>
        <div class="back_card">
          <div class="back__content">
            <p>Creamos campañas personalizadas, optimizamos tus perfiles en redes sociales y generamos contenido atractivo
              para impulsar tus ventas.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container_card">
      <div class="card_content">
        <div class="front_card">
          <div class="front__img" style="background-image: url({{ asset('images/cards/section_profit.jpg') }})"></div>
          <div class="front__content">
            <div class="front__content--header">Profit Plus</div>
          </div>
        </div>
        <div class="back_card">
          <div class="back__content">
            <p>Nuestro equipo de expertos se encargará de todo el proceso, y obtendras una instalacion adecuada a tus
              necesidades</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container_card">
      <div class="card_content">
        <div class="front_card">
          <div class="front__img" style="background-image: url({{ asset('images/cards/devweb.jpg') }})"></div>
          <div class="front__content">
            <div class="front__content--header">Desarrollo Web</div>
          </div>
        </div>
        <div class="back_card">
          <div class="back__content">
            <p>Estamos listos para crear la plataforma perfecta para tu negocio. Diseñamos soluciones digitales que te
              ayudarán a destacarte en el competitivo mundo digital.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- capacitacion -->
  <aside class="capacitacion">
    <div>
      <img src="{{ asset('images/banners/capacitacion-banner.png') }}" alt="Capacitate con Branar">
      <button type="button" class="button-promo" data-bs-toggle="modal" data-bs-target="#modalCourses"
        style="color: white; font-weight: bold;">
        Registrate ahora
      </button>
    </div>
  </aside>
  <!-- end capacitacion -->

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

        <button type="button" class="button-promo" id="button_plan" data="1" data-bs-toggle="modal"
          data-bs-target="#exampleModal" style="color: white; font-weight: bold;">
          Contratar
        </button>
        <hr class="hr">

        <div class="list-promo">
          <div>
            <i class="fa-solid fa-check orange"></i>
            <p><strong>3 publicaciones semanales</strong></p>
          </div>
          <div>
            <i class="fa-solid fa-check orange"></i>
            <p><strong>3 publicaciones interactivas en historias</strong> (Semanales)</p>
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

        <button type="button" class="button-promo" id="button_plan" data="2" data-bs-toggle="modal"
          data-bs-target="#exampleModal" style="color: white; font-weight: bold;">
          Contratar
        </button>
        <hr class="hr">

        <div class="list-promo">
          <div>
            <i class="fa-solid fa-check orange"></i>
            <p><strong>4 publicaciones semanales</strong></p>
          </div>
          <div>
            <i class="fa-solid fa-check orange"></i>
            <p><strong>4 publicaciones interactivas en historias</strong> (Semanales)</p>
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
            <p><strong>Diseño de historias destacadas</strong> (5) y <strong>2 plantillas para historias</strong></p>
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

        <button type="button" class="button-promo" id="button_plan" data="3" data-bs-toggle="modal"
          data-bs-target="#exampleModal" style="color: white; font-weight: bold;">
          Contratar
        </button>
        <hr class="hr">

        <div class="list-promo">
          <div>
            <i class="fa-solid fa-check green"></i>
            <p><strong>1 publicación diaria</strong></p>
          </div>
          <div>
            <i class="fa-solid fa-check green"></i>
            <p><strong>5 publicaciones interactivas en historias</strong> (Semanales)</p>
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
            <p><strong>Diseño de historias destacadas</strong>, <strong>2 plantillas para historias</strong> y <strong>1
                plantilla para feed</strong></p>
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

  <!-- Modal -->
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
              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="jhon"
                required>
              <label for="first_name">Nombre</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="jhon2"
                required>
              <label for="last_name">Apellido</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" id="email2"
                placeholder="name@example.com">
              <label for="email2">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" name="comment" id="comment" placeholder="comment" required></textarea>
              <label for="comment">Comentario</label>
            </div>

            <div class="form-floating mb-3">
              <select class="form-select" name="plan" id="select_plan" required>
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

  <div class="modal fade" id="modalCourses" tabindex="-1" aria-labelledby="modalCoursesLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalCoursesLabel">Formulario de Servicio</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="./src/controller/sendEmail.php" method="post" id="form-courses">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="jhon@emil.com"
                required>
              <label for="email">Correo Electronico</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="full_name" id="full_name" placeholder="jhon2"
                required>
              <label for="full_name">Nombre Completo</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="dni" id="dni" placeholder="" required>
              <label for="dni">Documento de Identidad</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder=""
                required>
              <label for="phone_number">Numero de Telefono</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="address" id="address" placeholder="jhon2" required>
              <label for="address">Direccion</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="position" id="position" placeholder="jhon2" required>
              <label for="position">Cargo o ocupacion</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="enterprise" id="enterprise" placeholder="jhon2"
                required>
              <label for="enterprise">Empresa</label>
            </div>
            <div class="mb-3">
              <label for="availability">Días disponibles para realizar el curso</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="availability" id="availability"
                value="Lunes a viernes" required>
              <label class="form-check-label" for="availability">
                Lunes a viernes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="availability" id="availability2" value="Sabatinos"
                required>
              <label class="form-check-label" for="availability2">
                Sabatinos
              </label>
            </div>

            <button type="button" class="btn btn-primary mt-3" id="button_courses">Enviar</button>
            <!-- <button class="g-recaptcha"
                        data-sitekey="6LcRLuEoAAAAANp06sYfR8ePjm_9D24T65mx-eU7"
                        data-callback='onSubmit'
                        data-action='submit'>Submit</button> -->
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- sobre nosotros -->
  <div class="encabezado">
    <h2 class="title-h2">Transforma tu empresa con nuestro respaldo</h2>
    <p class="subtitle">Bienvenido a Branar, C.a, <strong>donde la excelencia en servicios tecnológicos se encuentra con
        la innovación constante</strong>. Somos una empresa dedicada a proporcionar soluciones tecnológicas avanzadas para
      empresas de todos los tamaños.</p>
  </div>
  <section class="about-us">
    <article>
      <a href="#">
        <div class="circle-div">
          <ion-icon name="business-outline" class="icon-div"></ion-icon>
          <p>Empresa B2B</p>
        </div>
      </a>
    </article>
    <article>
      <a href="#">
        <div class="circle-div">
          <i class="fa-solid fa-hand-sparkles icon-div"></i>
          <p>Más de 20 años de experiencia</p>
        </div>
      </a>
    </article>
    <article>
      <a href="#">
        <div class="circle-div">
          <ion-icon name="ribbon-outline" class="icon-div"></ion-icon>
          <p>Líder en vanguardia del desarrollo tecnológico</p>
        </div>
      </a>
    </article>
    <a href="aboutme.html" class="button-azul"><button>Saber mas</button></a>
  </section>

  <section class="contact" style="background-image: url({{asset('images/fondo-dark.jpg')}})">
    <header class="header_sec">
      <h2 class="contact-title">¿TE INTERESAN NUESTROS SERVICIOS?</h2>
    </header>
    <article class="contact_container">
      <div class="google-maps">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.2299702297105!2d-69.33538428524454!3d10.080233774413554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8767ab02d95f41%3A0x7704b1c5d591db07!2sBranar%20CA!5e0!3m2!1ses!2sve!4v1638893052516!5m2!1ses!2sve"
          width="80%" height="500" style="border:0;" allowfullscreen="" title="map" loading="lazy"></iframe>
      </div>

      <div>
        <article class="content-form">
          <form method="post" action="correo.php" class="form">
            <div class="form-floating mb-3" style="width: 100%;">
              <input type="text" class="form-control" name="name" id="nombre"
                placeholder="Nombre o Razon social" required>
              <label for="nombre">Nombre o razon social</label>
            </div>
            <div class="form-floating mb-3" style="width: 100%;">
              <input type="email" class="form-control" name="email" id="correo"
                placeholder="Nombre o Razon social" required>
              <label for="correo">Correo Electronico</label>
            </div>
            <div class="form-floating mb-3" style="width: 100%;">
              <textarea class="form-control" name="comment" id="mensaje" placeholder="comment" style="width: 100%;"></textarea>
              <label for="mensaje">Mensaje</label>
            </div>
            <button class="button">Enviar</button>
          </form>

          <div class="social">
            <a href="https://www.facebook.com/BranarContacto" target="_blink"><button class="facebook"><ion-icon
                  name="logo-facebook"></ion-icon>Facebook</button></a>

            <a href="https://www.instagram.com/contactobranar/" target="_blink"><button class="instagram"><ion-icon
                  name="logo-instagram"></ion-icon>Instagram</button></a>

            <a href="https://www.linkedin.com/company/branar-c-a-/" target="_blink"><button class="linkedin"><ion-icon
                  name="logo-linkedin"></ion-icon>Linkedin</button></a>

            <a href="https://wa.link/rc1mal" aria-label="Telefono de contacto"><button class="whatsapp"
                target="_blink"><ion-icon name="logo-whatsapp"></ion-icon>Whatsapp</button></a>
          </div>
        </article>
      </div>
    </article>
  </section>

@endsection

@section('scripts')
  <script src="{{ asset('js/bot.js') }}"></script>
  <script src="{{ asset('js/plan.js') }}"></script>
@endsection
