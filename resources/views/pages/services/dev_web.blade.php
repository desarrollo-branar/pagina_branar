@extends('base')

@section('title', 'Branar - Desarrollo Web')
@section('description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de
  sus procesos así como la seguridad de los datos')
@section('keywords', 'instalacion de redes,redes informaticas,gestion de servidores')
@section('og_description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control
  de sus procesos así como la seguridad de los datos')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/socialmedia.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/cards.css') }}">
@endsection

@section('content')

  <div class="banner-top" style="background-image: url({{ asset('images/devweb.jpg') }})">
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
      <img src="{{ asset('images/dis.png') }}" alt="Diseño Responsive para tus aplicaciones web" />
    </div>
  </section>

  <section class="graphic_design">
    <header>
      <h3>¿Por qué elegir nuestro servicio de Desarrollo Web?</h3>
    </header>
    <article class="content-design">
      <img src="{{ asset('images/responsive.png') }}" class="img" alt="Diseño grafico" />
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
          <div class="front__img" style="background-image: url({{ asset('images/diseno.jpg') }})"></div>
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
          <div class="front__img" style="background-image: url({{ asset('images/responsive.png') }})"></div>
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
          <div class="front__img" style="background-image: url({{ asset('images/dis.png') }})"></div>
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
          <div class="front__img" style="background-image: url({{ asset('images/social-media.jpg') }})"></div>
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
@endsection
