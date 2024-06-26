@extends('base')

@section('title', 'Branar - Sobre nosotros')
@section('og_url', 'https://branar.com/about-us/')
@section('description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de
  sus procesos así como la seguridad de los datos')
@section('keywords', 'instalacion de redes,redes informaticas,gestion de servidores')
@section('og_description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control
  de sus procesos así como la seguridad de los datos')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/socialmedia.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }}">

  <link rel="stylesheet" href="{{ asset('css/glide.core.min.css') }}">
  <!-- Optional Theme Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/glide.theme.min.css') }}">
@endsection

@section('content')

  <div class="banner-top" style="background-image: url({{ asset('images/banfondo.jpg') }});">
    <div></div>
    <h1>Sobre Nosotros: Potenciando tu Éxito en el Mundo Digital</h1>
  </div>

  <section class="info-service-about">
    <article>
      <p>¡Bienvenido a Branar, tu aliado tecnológico en el camino hacia el éxito! Somos una empresa venezolana dedicada a
        ofrecer servicios de vanguardia en tecnología para otras empresas (Business to Business). Nuestra misión es
        brindarte soluciones integrales y personalizadas que impulsen tu negocio hacia nuevas alturas.</p>
    </article>
    <div class="border_img_large personal_image" style="background-image: url({{ asset('images/persons/6.png') }})">
    </div>
  </section>

  <section class="box_container general-padding general-margin">
    <header class="sec_header">
      <h3 style="color: white;">Nuestra Pasión por la Tecnología</h3>
    </header>
    <article class="box_info">
      <div style="margin-top: 12px;">
        <img src="{{ asset('images/persons/10.png') }}" alt="Personal Branar">
      </div>
      <div class="">
        <p>En Branar, somos apasionados por la tecnología y creemos en su poder transformador para mejorar la eficiencia,
          productividad y presencia en el mundo digital. Con un equipo de expertos en constante actualización y
          conocimiento de las últimas tendencias, te ofrecemos soluciones innovadoras que se adaptan a tus necesidades
          únicas.</p>
      </div>
    </article>
  </section>

  <article class="text-cita general-margin general-padding">
    <p><strong>"En Branar, tu éxito es nuestra prioridad."</strong></p>
    <p> Permítenos ser parte de tu crecimiento y llevemos juntos tu negocio al siguiente nivel en el mundo digital. Confía
      en nosotros para impulsar tu éxito con tecnología de vanguardia y soluciones a la medida de tus sueños. ¡Juntos
      hacemos posible lo imposible!</p>
  </article>

  <section class="mision_vision general-margin general-padding "
    style="background-image: url({{ asset('images/fondo3.jpg') }});">

    <article>
      <header>
        <h3>Misión: Liderando la Transformación Tecnológica</h3>
      </header>
      <p>En Branar, nuestra misión es proporcionar a nuestros clientes soluciones en tecnologías de información
        actualizadas y personalizadas que abarquen el control de procesos, la comunicación, los sistemas de gestión y la
        seguridad de recursos. Nos dedicamos a optimizar la operatividad de cada negocio, ofreciendo ventajas competitivas
        para enfrentar las cambiantes variables del mercado.</p>
    </article>
    <article>
      <header>
        <h3>Visión: Forjando un Futuro Tecnológico Brillante</h3>
        <p>Nuestra visión es ser la empresa líder a la vanguardia del desarrollo tecnológico, anticipando y satisfaciendo
          las necesidades de nuestros clientes. Nos esforzamos por brindar productos y servicios de alto valor agregado en
          informática, comunicación y seguridad, permitiendo que las empresas aprovechen todo su potencial tecnológico.
        </p>
      </header>
    </article>
    <article class="valores">
      <header>
        <h3>Valores: Nuestra Esencia</h3>
      </header>
      <ol>
        <li><strong>Trabajo en Equipo:</strong> Juntos alcanzamos grandes logros y superamos desafíos, promoviendo una
          cultura de colaboración y sinergia en cada proyecto que emprendemos.</li>
        <li><strong>Ética Profesional:</strong> Guiamos nuestras acciones con integridad y honestidad, respetando la
          confidencialidad y la privacidad de nuestros clientes.</li>
        <li><strong>Respeto:</strong> Valoramos la diversidad, escuchamos a nuestros clientes y colaboradores con empatía,
          creando relaciones basadas en el respeto mutuo.</li>
        <li><strong>Responsabilidad:</strong> Nos comprometemos con la excelencia y la puntualidad en cada entrega,
          asumiendo la responsabilidad de nuestras acciones y decisiones.</li>
        <li><strong>Confianza:</strong> Construimos relaciones duraderas con nuestros clientes, brindando soluciones
          confiables y manteniendo la confianza depositada en nosotros.</li>
      </ol>
    </article>
  </section>

  <div class="container" style="margin-bottom: 24px;">
    <header class="sec_header">
      <h3 style="color: var(--light-blue);">Innovación y Tecnología: Nuestro Equipo, Nuestra Pasión</h3>
    </header>
    <div class="glide" style="position: relative">

      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <!--   <li class="glide__slide">
                          <img src="./assets/images/persons/1.png" alt="" style="width: 400px; height: 400px;">
                      </li>
                      <li class="glide__slide">
                          <img src="./assets/images/persons/2.png" alt="" style="width: 400px; height: 400px;">
                      </li>
                      <li class="glide__slide">
                          <img src="./assets/images/persons/3.png" alt="" style="width: 400px; height: 400px;">
                      </li> -->
          <li class="glide__slide utils_paddindg">
            <img src="{{ asset('images/persons/1.png') }}" alt="" style="width: 100%; height: 100%;">
          </li>
          <li class="glide__slide utils_paddindg">
            <img src="{{ asset('images/persons/3.png') }}" alt="" style="width: 100%; height: 100%;">
          </li>
          <li class="glide__slide utils_paddindg">
            <img src="{{ asset('images/persons/4.png') }}" alt="" style="width: 100%; height: 100%;">
          </li>
          <li class="glide__slide utils_paddindg">
            <img src="{{ asset('images/persons/5.png') }}" alt="" style="width: 100%; height: 100%;">
          </li>
          <li class="glide__slide utils_paddindg">
            <img src="{{ asset('images/persons/7.png') }}" alt="" style="width: 100%; height: 100%;">
          </li>
          <li class="glide__slide utils_paddindg">
            <img src="{{ asset('images/persons/8.png') }}" alt="" style="width: 100%; height: 100%;">
          </li>
          <li class="glide__slide utils_paddindg">
            <img src="{{ asset('images/persons/9.png') }}" alt=""style="width: 100%; height: 100%;">
          </li>
          <li class="glide__slide utils_paddindg">
            <img src="{{ asset('images/persons/11.png') }}" alt="" style="width: 100%; height: 100%;">
          </li>
        </ul>
      </div>

      <div class="glide" style="position: initial">

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i
              class="fa-solid fa-angle-left"></i></button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
              class="fa-solid fa-angle-right"></i></button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/glide.min.js') }}"></script>
  <script>
    const config = {
      type: 'carousel',
      perView: 4,
      breakpoints: {
        1024: {
          perView: 2
        },
        600: {
          perView: 1
        }
      }
    };
    new Glide('.glide', config).mount()
  </script>
@endsection
