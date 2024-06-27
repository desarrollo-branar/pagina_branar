@extends('base')

@section('title', 'Branar - Social Media')
@section('description',
  'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de
  sus procesos así como la seguridad de los datos')
@section('keywords', 'instalacion de redes,redes informaticas,gestion de servidores')
@section('og_description',
  'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control
  de sus procesos así como la seguridad de los datos')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/socialmedia.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }}">
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

@section('content')

  <div class="banner-top" style="background-image: url({{ asset('images/social-media.jpg') }})">
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
    <img src="{{ asset('images/design_responsive.png') }}" alt="Diseño Responsive para tus aplicaciones web" />
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
      <img src="{{ asset('images/90.png') }}" class="img" alt="Diseño grafico" />
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

        <button type="button" class="button-promo" id="button_plan" data="1" data-bs-toggle="modal"
          data-bs-target="#exampleModal" style="color: white; font-weight: bold;">
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

        <button type="button" class="button-promo" id="button_plan" data="1" data-bs-toggle="modal"
          data-bs-target="#exampleModal" style="color: white; font-weight: bold;">
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

        <button type="button" class="button-promo" id="button_plan" data="1" data-bs-toggle="modal"
          data-bs-target="#exampleModal" style="color: white; font-weight: bold;">
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
              <input type="email" class="form-control" name="email" id="email2" placeholder="name@example.com"
                required>
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
    <img src="{{ asset('images/redes.png') }}" alt="Diseño Responsive para tus aplicaciones web" />
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
@endsection
