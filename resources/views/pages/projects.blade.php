@extends('base')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endsection

@section('content')
<div class="encabezado">
  <h1>Nuestros Proyectos</h1>
    <p class="subtitle">Explora nuestros trabajos más destacados y cómo hemos ayudado a nuestros clientes a alcanzar sus <strong>objetivos tecnológicos</strong>.</p>
</div>

<section class="container_projects">
  <article class="projects_cards">
    <div class="projects_images">
      <img src="https://www.rammaheshwari.com/assets/jpeg/dopefolio.jpeg" alt="">
    </div>
    <div class="projects_content">
      <h2>Dopefolio</h2>
      <p>Dopefolio is a successful Open-Source project that I created which have been featured on some of the biggest tech sites like CSS-Tricks, Hostinger, etc & used by thousands of developers globally </p>
      <a href="#">Ver mas</a>
    </div>
  </article>

  <article class="projects_cards">
    <div class="projects_images">
      <img src="https://www.rammaheshwari.com/assets/jpeg/wilsonport.jpeg" alt="">
    </div>
    <div class="projects_content">
      <h2>Wilsonport</h2>
      <p>Wilsonport is a multiservice logistics and transport company and I created their website from scratch using the frontend tools I know.</p>
      <a href="#">Ver mas</a>
    </div>
  </article>
  
  <article class="projects_cards">
    <div class="projects_images">
      <img src="https://www.rammaheshwari.com/assets/jpeg/boreal-coffee-clone.jpeg" alt="">
    </div>
    <div class="projects_content">
      <h2>Dopefolio</h2>
      <p>Dopefolio is a successful Open-Source project that I created which have been featured on some of the biggest tech sites like CSS-Tricks, Hostinger, etc & used by thousands of developers globally </p>
      <a href="#">Ver mas</a>
    </div>
  </article>
  
  <article class="projects_cards">
    <div class="projects_images">
      <img src="https://www.rammaheshwari.com/assets/jpeg/crown-template.jpeg" alt="">
    </div>
    <div class="projects_content">
      <h2>Boreal Coffee Clone</h2>
      <p>I re-created the frontend of Boreal Coffee's official web app because I got attracted to their beautiful UI. It was a great experience for me to build the entire frontend. </p>
      <a href="#">Ver mas</a>
    </div>
  </article>
</section>
@endsection
