@extends('base')

@section('title', 'Branar - Social Media')
@section('description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos')
@section('keywords', 'instalacion de redes,redes informaticas,gestion de servidores')
@section('og_description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/socialmedia.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }}">
@endsection

@section('content')

  <div class="banner-top" style="background-image: url({{ asset('images/social-media.jpg') }})" >
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
        <img src="{{ asset('images/servicio.jpg') }}" class="img_circle" alt="Branar impresoras Epson" />
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
      <img src="{{ asset('images/service.png') }}" class="img" alt="Diseño grafico" />
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
      <a href="https://wa.me/message/GZDFOHPWZTTAB1" class="whatsapp" aria-label="Telefono de contacto" >
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
  </article>
@endsection
