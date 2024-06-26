@extends('base')

@section('title', 'Branar - Contactanos')
@section('og_url', 'https://branar.com/contact/')
@section('description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control de
  sus procesos así como la seguridad de los datos')
@section('keywords', 'instalacion de redes,redes informaticas,gestion de servidores')
@section('og_description', 'Conecte todos sus equipos por medio de redes informaticas que le permitan un mejor control
  de sus procesos así como la seguridad de los datos')

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/socialmedia.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/utils.css') }}">
@endsection

@section('content')
  <div class="banner-top" style="background-image: url({{ asset('images/banfondo.jpg') }});">
    <div></div>
    <h1>Conéctate con Nosotros: Responderemos a tus preguntas</h1>
  </div>
  <aside class="form_microsoft_365">
    <iframe width="100%" height="600px"
      src="https://forms.office.com/Pages/ResponsePage.aspx?id=-22uGf8pNkmswH_AffukpF6TCH2X5MdPk86IucDD6L5UNlMwTFFVVEEyMFc2SEI0RDk5R0hRMDA5OC4u&embed=true"
      frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh"
      title="Formulario de contacto microsoft 365" allowfullscreen webkitallowfullscreen mozallowfullscreen
      msallowfullscreen> </iframe>
    <div class="qr_first">
      <img src="{{ asset('images/qr_formulario_contacto.png') }}" class="qr_form" alt="QR Formulario de Contacto">
      <div>
        <p>Comunicate con nosotros ahora mismo</p>
      </div>
    </div>
  </aside>

  <article class="section_contacto_information">
    <div class="ubication_map">
      <header class="sec_header">
        <h2>Ubicacion</h2>
      </header>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.2299702297105!2d-69.33538428524454!3d10.080233774413554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8767ab02d95f41%3A0x7704b1c5d591db07!2sBranar%20CA!5e0!3m2!1ses!2sve!4v1638893052516!5m2!1ses!2sve"
        style="border: 0; width: 90%; height: 500px; margin: auto;" allowfullscreen="" loading="lazy"
        title="Ubicacion por google maps"></iframe>
    </div>
    <div class="contact_information">
      <div class="div_contact_information">
        <i class="fa-solid fa-phone icon_contact"></i>
        <p>Teléfono: (0251) - 4453083 / 0412 - 3290719</p>
      </div>
      <div class="div_contact_information">
        <i class="fa-solid fa-house icon_contact"></i>
        <p>Dirección: Av. Libertador, Cruce Calle 41, Local 41-12. Barquisimeto-Lara.</p>
      </div>
      <div class="div_contact_information">
        <i class="fa-solid fa-envelope icon_contact"></i>
        <p>Correo: contacto@branar.com</p>
      </div>
    </div>
  </article>
@endsection
