@extends('base')

@section('title', 'Branar - Software Administrativo Profit Plus')
@section('description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos')
@section('keywords', 'instalacion de redes,redes informaticas,gestion de servidores')
@section('og_description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/socialmedia.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }}">
@endsection

@section('content')

  <div class="banner-top" style="background-image: url({{ asset('images/profit.jpg') }})">
    <div></div>
    <h1>Instalación y Soporte Profitplus: Optimiza tus Procesos de Gestión</h1>
  </div>

  <section class="info-service-art">
    <article>
      <h2>Implementación Personalizada</h2>
      <p>
        Nos encargamos de instalar y configurar Profitplus para que se
        ajuste a las necesidades particulares de tu empresa.
      </p>
    </article>
    <img src="{{ asset('images/2kdoce.png') }}" alt="Diseño Responsive para tus aplicaciones web" />
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
        <img src="{{ asset('images/women.png') }}" class="img_women" alt="Instructor Profit Plus" />
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
      <img src="{{ asset('images/laptop.png') }}" alt="Sistema Profit Plus 2kdoce" style="width: 100%; height: 100%" class="laptop" />
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
      <a href="https://wa.me/message/GZDFOHPWZTTAB1" class="whatsapp" aria-label="Telefono de contacto" >
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
  </article>
@endsection
