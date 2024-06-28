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

  @foreach ($projects as $project)
    <article class="projects_cards">
      <div class="projects_images">
        <img src="{{ $project->image}}" alt="{{ $project->name }}">
      </div>
      <div class="projects_content">
        <h2>{{ $project->name }}</h2>
        <p>{{ $project->description }}</p>
        <a href="{{ route('projects.project_detail', $project->slug) }}">Ver mas</a>
      </div>
    </article>
  @endforeach
@endsection
