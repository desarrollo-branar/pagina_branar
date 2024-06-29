@extends('base')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endsection

@section('content')
  <section class="project_bg_top" style="background-image: url({{ asset('images/banfondo.jpg') }});">
    <header>
      <h1>{{ $project->name }}</h1>
      <p>{{ $project->description }}</p>
    </header>
  </section>

  <section class="project_details">
    <article class="detail">
      <div class="detail_image">
        <img src="{{ asset($project->image) }}" alt="{{ $project->name }}">
      </div>
      <div class="detail_content">
        <header>
          <h2>Descripción del proyecto</h2>
        </header>
        <div>
          <p>{{ $project->description }}</p>
        </div>
      </div>
    </article>
  </section>

  {{-- <h1>{{ $project->name }}</h1>
  <img src="{{ asset($project->image) }}" alt="{{ $project->name }}">
  <p>{{ $project->description }}</p>
  <h3>Features:</h3>
  <p>{{ $project->features }}</p> --}}
@endsection
