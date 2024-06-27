@extends('base')

@section('title', 'Branar - Infraestructura')
@section('og_url', 'https://branar.com/infraestructura/')
@section('description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos')
@section('keywords', 'instalacion de redes,redes informaticas,gestion de servidores')
@section('og_description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de sus procesos así como la seguridad de los datos')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/infraestructure.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/cards.css') }}">
@endsection

@section('content')

  <div class="banner-top" style="background-image: url({{ asset('images/connection-industry.jpeg') }})">
    <div></div>
    <h1>Infraestructura de Empresas: Potencia tu Negocio con la Mejor Base Tecnológica </h1>
  </div>

  <section class="info-service-art">
    <article>
      <h2>Potencia tu negocio con nuestra infraestructura y virtualización</h2>
      <p>
        Diseñamos, implementamos y mantenemos redes seguras y confiables
        para que tu empresa pueda funcionar sin interrupciones.
      </p>
    </article>
    <img src="{{ asset('images/infraestructure.png') }}" alt="Infraestructura Branar"/>
  </section>

  <header class="header-serv">
    <h3> Principales Servicios de Infraestructura Tecnológica: Diseñados para tu Éxito </h3>
  </header>

  <section class="wrapper-cards">
    <div class="container_card">
      <div class="card_content">
        <div class="front_card">
          <div class="front__img" style="background-image: url({{ asset('images/diagramacion.jpg') }})" ></div>
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
          <div class="front__img" style="background-image: url({{ asset('images/servidores3.jpg') }})" ></div>
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
          <div class="front__img" style="background-image: url({{ asset('images/servidores.jpg') }})" ></div>
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
          <div class="front__img" style="background-image: url({{ asset('images/servidores2.jpg') }})" ></div>
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
          <div class="front__img" style="background-image: url({{ asset('images/admin.jpg') }})" ></div>
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
          <div class="front__img" style="background-image: url({{ asset('images/nube.jpg') }})" ></div>
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
          <div
            class="front__img"
            style="background-image: url({{ asset('images/respaldo.jpg') }})"
          ></div>
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
          <div
            class="front__img"
            style="background-image: url({{ asset('images/control.jpg') }})"
          ></div>
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
      <img src="{{ asset('images/ms-365.jpg') }}" alt="Infraestructura Branar" />
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
@endsection
