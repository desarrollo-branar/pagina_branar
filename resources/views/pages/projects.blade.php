@extends('base')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endsection

@section('content')
  <div class="encabezado">
    <h1>Nuestros Proyectos</h1>
    <p class="subtitle">Explora nuestros trabajos más destacados y cómo hemos ayudado a nuestros clientes a alcanzar sus
      <strong>objetivos tecnológicos</strong>.</p>
  </div>

  <section class="container_projects">

    @foreach ($projects as $project)
      <article class="projects_cards">
        <div class="projects_images">
          <img src="{{ $project->image }}" alt="{{ $project->name }}">
        </div>
        <div class="projects_content">
          <h2>{{ $project->name }}</h2>
          <p>{{ truncate_description($project->description, 240) }}</p>
          <a href="{{ route('projects.project_detail', $project->slug) }}">Ver más</a>
        </div>
      </article>
    @endforeach
  </section>
@endsection

@php
  function truncate_description($description, $limit)
  {
      // Trunca la descripción si es más larga que el límite
      if (strlen($description) > $limit) {
          $description = substr($description, 0, $limit) . '...';
      }
      return $description;
  }
@endphp
