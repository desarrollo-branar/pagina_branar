@extends('base')

@section('title', 'Branar - Centro de Servicio Autorizado Epson')
@section('og_url', 'https://branar.com/centro-de-servicio-autorizado/')
@section('description', 'Mantenga operativa su computadora con nuestros planes de contratación, realizamos el
  mantenimiento lógico y físico de su equipo')
@section('keywords', 'mantenimiento de computadoras,instalacion de camaras de seguridad,manteniemiento preventivo y
  correctivo,soporte tecnico en computadoras hp')
@section('og_description', 'Mantenga operativa su computadora con nuestros planes de contratación, realizamos el
  mantenimiento lógico y físico de su equipo')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/csa.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }}">
@endsection

@section('content')

  <!-- banner-top -->
  <div class="banner-top" style="background-image: url({{ asset('images/printer-epson.jpg') }});">
    <div></div>
    <h1>Centro de Servicio Autorizado EPSON: Soluciones Confiables para tus Equipos</h1>
  </div>

  <!-- section -->

  <section class="container-service-csa">
    <article class="article-csa">
      <section>
        <div>
          <h2>Reparación y Mantenimiento Especializado</h2>
        </div>
        <p>Nuestro equipo de técnicos altamente capacitados se encarga de brindar servicios de reparación y mantenimiento
          para tus equipos EPSON, asegurando su óptimo rendimiento y prolongando su vida útil. 🔧</p>
      </section>
      <div class="aside_div border_img_wide">
        <img src="{{ asset('images/imp.png') }}" class="img_plana" alt="Branar impresoras Epson">
      </div>

    </article>

    <article class="services-csa">
      <header class="header-serv-csa">
        <h2>Ofrecemos una amplia gama de servicios, incluyendo:</h2>
      </header>
      <section class="servicios-csa">
        <article>
          <div class="div_serv_csa" style="background-image: url({{ asset('images/printer-epson.jpg') }});">
            <div>
              <h3>Diagnóstico Preciso y Rápido</h3>
              <i class="fa-solid fa-print"></i>
            </div>
            <p>Contamos con herramientas y conocimientos específicos para diagnosticar cualquier problema con tus
              impresoras y proyectores EPSON de manera rápida y precisa, ahorrándote tiempo y preocupaciones.</p>
          </div>
        </article>
        <article>
          <div class="div_serv_csa" style="background-image: url({{ asset('images/replacement.jpeg') }});">
            <div>
              <h3>Piezas y Repuestos Originales</h3>
              <i class="fa-brands fa-searchengin"></i>
            </div>
            <p>Utilizamos únicamente piezas y repuestos originales de EPSON para asegurar la calidad y durabilidad de las
              reparaciones, evitando futuros inconvenientes.</p>
          </div>
        </article>
        <article>
          <div class="div_serv_csa" style="background-image: url({{ asset('images/satisfaction_warranty.jpeg') }});">
            <div>
              <h3>Garantía de Satisfacción</h3>
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
            <p>Nos enorgullecemos de ofrecer un servicio de calidad y una garantía de satisfacción para que puedas confiar
              en que tus equipos estarán en buenas manos.</p>
          </div>
        </article>
      </section>
    </article>

    <div class="seccion_link" style="margin-bottom: 34px;">
      <header class="cont_title_link">
        <h2>Servicio Certificado EPSON</h2>
        <p>Más sobre nuestra certificación <a href="https://epson.com.ve/servicelocator?productCode=SPT_C11CC86201#full"
            aria-label="aquí">aquí</a></p>
      </header>
      <div>
        <img src="{{ asset('images/search_branar_csa.png') }}" alt="" style="width: 100%;">
      </div>
    </div>

    <article class="list_service" style="background-image: url({{ asset('images/fondo_imp.png') }})">
      <section class="content-design">
        <div></div>
        <section class="list-promo">
          <div>
            <span>✅</span>
            <p><strong>Reparación Especializada:</strong> Servicios de reparación precisa y efectiva para tus equipos
              EPSON, con soluciones rápidas y profesionales.</p>
          </div>
          <div>
            <span>✅</span>
            <p><strong>Reemplazo de Piezas Defectuosas:</strong> Utilizamos solo piezas originales de EPSON para asegurar
              calidad y confiabilidad en las reparaciones</p>
          </div>
          <div>
            <span>✅</span>
            <p><strong>Actualización de Firmware y Software:</strong> Mantenemos tus equipos al día con las últimas
              versiones de firmware y software de EPSON.</p>
          </div>
          <div>
            <span>✅</span>
            <p><strong>Sustitución de Consumibles:</strong> Proporcionamos consumibles originales y reemplazamos
              componentes para un rendimiento óptimo.</p>
          </div>
          <div>
            <span>✅</span>
            <p><strong>Pruebas de Funcionamiento:</strong> Rigurosas pruebas antes de entregar tus equipos reparados,
              asegurando su correcto funcionamiento.</p>
          </div>
        </section>
      </section>
    </article>

    <article class="contactanos">
      <div>
        <h2>¡Contáctanos hoy mismo y déjanos encargarnos del mantenimiento y reparación de tus equipos Epson!</h2>
      </div>
      <div>
        <a href="https://wa.me/message/GZDFOHPWZTTAB1" class="whatsapp" aria-label="Telefono de contacto">
          <i class="fab fa-whatsapp"></i>
        </a>
      </div>
    </article>
  </section>
@endsection
